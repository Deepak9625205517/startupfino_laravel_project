<?php



namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\SubscriptionUser;
use App\Models\DocumentCenter;
use Illuminate\Http\Request;
use App\Models\BasicSetting;
use App\Models\Favourite;
use App\Models\Enquiry;
use App\Models\User;
use Carbon\Carbon;
use Auth;

class AdminController extends Controller

{

    function __construct()
    {

           ini_set('memory_limit', '128M');

           ini_set('max_execution_time', '3000');

           ini_set('request_terminate_timeout', '3000');

    }



    public function index()

    {   

        $start        = Carbon::now()->startOfMonth();

        $inputdate    = Carbon::parse($start)->format('Y-m-d');

        $current_date = Carbon::now();

        $last_date    = Carbon::parse($current_date)->format('Y-m-d');

       

        $total_paid_amount   = SubscriptionUser::where('status', 1)->where('transaction_status', 1)->whereBetween('subscription_date', [$start, $current_date])->sum('price');

        $renewal_amount      = SubscriptionUser::where('status', 1)->where('transaction_status', 1)->where('last_date', $last_date)->sum('price');

        $missed_subscription = SubscriptionUser::where('status', 1)->where('transaction_status', 0)->whereBetween('created_at', [$inputdate, $last_date])->get()->count();

        $total_users         = User::where('status', 1)->where('is_admin', 1)->get()->count();

        $total_customers     = User::where('status', 1)->where('is_admin', 2)->get()->count();

        $total_new_customers = User::where('status', 1)->where('is_admin', 2)->whereBetween('created_at', [$inputdate, $last_date])->get()->count();

        $no_of_enquriry      = Enquiry::where('status', 1)->whereBetween('created_at', [$inputdate, $last_date])->get()->count();

        $no_of_document      = DocumentCenter::where('status', 1)->whereBetween('created_at', [$inputdate, $last_date])->get()->count();



        $subscriptions       = SubscriptionUser::with('subscription','user')->where('status', 1)->where('transaction_status', 1)->orderBy('id', 'desc')->limit(5)->get();

        $renewals            = SubscriptionUser::with('subscription','user')->where('status', 1)->where('transaction_status', 1)->where('last_date', $last_date)->orderBy('id', 'desc')->limit(5)->get();

        $customers           = User::where('status', 1)->where('is_admin', 2)->orderBy('id', 'desc')->limit(5)->get();

        $enquriries          = Enquiry::with('documentCenter')->where('status', 1)->orderBy('id', 'desc')->limit(5)->get();



    	return view('admin.dashboard.index', compact('enquriries', 'customers', 'inputdate', 'last_date', 'total_paid_amount', 'renewal_amount', 'missed_subscription', 'total_users', 'total_customers', 'total_new_customers', 'no_of_enquriry', 'no_of_document', 'subscriptions', 'renewals'));

    }



    public function getFilter(Request $request)

    {

        $inputdate    = $request->first_date;

        $last_date    = $request->second_date;

       

        $total_paid_amount   = SubscriptionUser::where('status', 1)->where('transaction_status', 1)->whereBetween('subscription_date', [$inputdate, $last_date])->sum('price');

        $renewal_amount      = SubscriptionUser::where('status', 1)->where('transaction_status', 1)->where('last_date', $last_date)->sum('price');

        $missed_subscription = SubscriptionUser::where('status', 1)->where('transaction_status', 0)->whereBetween('created_at', [$inputdate, $last_date])->get()->count();

        $total_users         = User::where('status', 1)->where('is_admin', 1)->get()->count();

        $total_customers     = User::where('status', 1)->where('is_admin', 2)->get()->count();

        $total_new_customers = User::where('status', 1)->where('is_admin', 2)->whereBetween('created_at', [$inputdate, $last_date])->get()->count();

        $no_of_enquriry      = Enquiry::where('status', 1)->whereBetween('created_at', [$inputdate, $last_date])->get()->count();

        $no_of_document      = DocumentCenter::where('status', 1)->whereBetween('created_at', [$inputdate, $last_date])->get()->count();



        return response()->json([

            'success'             => 'Successfully Get Your Data',

            'total_paid_amount'   => $total_paid_amount,

            'renewal_amount'      => $renewal_amount,

            'missed_subscription' => $missed_subscription,

            'total_users'         => $total_users,

            'total_customers'     => $total_customers,

            'total_new_customers' => $total_new_customers,

            'no_of_enquriry'      => $no_of_enquriry,

            'no_of_document'      => $no_of_document,

        ]);



        // return view('admin.dashboard.filter_result', compact('total_paid_amount', 'renewal_amount', 'missed_subscription', 'total_users', 'total_customers', 'total_new_customers', 'no_of_enquriry', 'no_of_document'));

    }



    public function getDocument(Request $request)

    {

        $results = DocumentCenter::where('status', 1)->paginate(12);
        
        foreach($results as $k => $v)
        {
            $results[$k]['like'] = Favourite::where('document_center_id', $v->id)->where('user_id', Auth::user()->id)->first();
        }
       

        return view('admin.dashboard.document-list', compact('results'));

    }

    public function getSubcategoryDocument(Request $request, $id)
    {
        $results = DocumentCenter::where('category_id', $id)->where('status', 1)->paginate(12);
        foreach($results as $k => $v)
        {
            $results[$k]['like'] = Favourite::where('document_center_id', $v->id)->where('user_id', Auth::user()->id)->first();
        }
        return view('admin.document_center.include.sub_document_list', compact('id', 'results'));
    }

    public function getcategoryDocument(Request $request, $id)
    {
        $records = DocumentCenter::where('category_id', $id)->where('status', 1)->paginate(12);
       
        foreach($records as $k => $v)
        {
            $records[$k]['like'] = Favourite::where('document_center_id', $v->id)->where('user_id', Auth::user()->id)->first();
        }

        return view('admin.document_center.include.category_document_list', compact('id', 'records'));
    }



    public function setting()
    {

        return view('admin.setting.index');

    }



    function settingPost(Request $request){

        //dd($request->all());

        foreach($request->input as $name=>$value){

            $name=str_replace("'","",$name);

            $data=BasicSetting::where("name",$name)->first();

            if($data){

                $data->value=$value;

                $data->save();

            }else{

                BasicSetting::create(['name'=>$name,"value"=>$value]);

            }

        }

        $request->session()->flash('alert-success', "Setting updated successfully!");

        return redirect()->back();

    }

}

