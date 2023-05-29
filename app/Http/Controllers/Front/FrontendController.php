<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\DocumentCenter;
use App\Events\ContactCreated;
use Illuminate\Http\Request;
use App\Mail\UserShareEmail;
use App\Models\Subscription;
use App\Models\Testimonial;
use App\Models\CompanyLogo;
use App\Models\Category;
use App\Models\Enquiry;
use App\Models\State;
use App\Models\City;
use App\Models\Page;
use App\Models\FAQ;
use Auth;
use Mail;

class FrontendController extends Controller
{
    public function index()
    {
        $record = Category::where('status', 1)->where('id', 9)->orderBy('id', 'asc')->first();
    
        return view('frontend.pages.index', compact('record'));
    }

    public function services(Request $request)
    {
        $service   = Category::where('slug', $request->slug)->where('status', 1)->first();
        return view('frontend.pages.services', compact('service'));
    }

    public function subcategoryList($cat_slug)
    {
         $categories      = Category::with('subcategory')->whereSlug($cat_slug)->where('status', 1)->first();
         abort_if(empty($categories), 404);
         $documents       = DocumentCenter::with('subcategory')->where('category_id', $categories->id)->orderBy('id', 'desc')->where('status', 1)->skip(0)->take(18)->get();
         $documents_list  = DocumentCenter::with('subcategory')->where('category_id', $categories->id)->orderBy('id', 'desc')->where('status', 1)->skip(2)->take(60)->get();
         
         return view('front.pages.subcategory_list', compact('categories', 'documents', 'documents_list'));
    }

    public function documentsList(Request $request)
    {
        $categiry   = Category::whereHas('parent', function($q){
            return $q->where('status', 1);
        })  
        ->with('parent')->where('status', 1)->where('slug', $request->sub_cat_slug)->wherenotnull('parent_id')->orderBy('id', 'asc')->first();
       abort_if(empty($categiry), 404);

        $documents = DocumentCenter::where('subcategory_id', $categiry->id)->where('status', 1)->get();
        
        return view('front.pages.document_list', compact('documents', 'categiry'));
    }

    public function documentListLoadMore(Request $request, $categoryid)
    {
       
        $categiry   = Category::with('parent')->where('status', 1)->where('id', $categoryid)->wherenotnull('parent_id')->orderBy('id', 'asc')->first();
       
        $documents = DocumentCenter::where('subcategory_id', $categoryid)->where('status', 1)->paginate(20);
        return view('front.pages.include.list', compact('documents', 'categiry'));
    }

    public function documentsDetail(Request $request)
    {

    $categories = Category::with('subcategory')->where('status', 1)->where('slug', $request->cat_slug)->first();    
    abort_if(empty($categories), 404);

    $sub_cat_id = Category::where('status', 1)->where('slug', $request->sub_cat_slug)->value('id');    
    abort_if(empty($sub_cat_id), 404);
    
    $records   = DocumentCenter::whereHas('subcategory', function($q){
            return $q->where('status', 1);
        })  
        ->with('subcategory', 'category')->where('status', 1)->where('subcategory_id', $sub_cat_id)->get();       
    abort_if(empty($records), 404);
   
    $document = DocumentCenter::where('slug', $request->docu_slug)->where('status', 1)->first();   
    abort_if(empty($document), 404);
    
    return view('front.pages.document_detail', compact('categories', 'document', 'records'));

    }

    public function aboutUs()
    {
        $record = Page::where('slug', 'about-us')->first();
        return view('front.pages.about_us', compact('record'));
    }

    public function blog()
    {
        return view('front.pages.blog');
    }

    public function blogdetail()
    {
        return view('front.pages.blog-detail');
    }

    public function changePassword()
    {
        return view('front.pages.change-password');
    }

    public function contactUs()
    {
        $record = Page::where('slug', 'contact-us')->first();
        $faqs   = FAQ::where('status', 1)->get();
        return view('front.pages.contact-us', compact('record', 'faqs'));
    }

    public function saveContactUs(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'subject' => 'required',
            'email' => 'required|email',
            'mobile_number' => 'required|min:10'
        ]);

        $obj = new Enquiry();
        $obj->document_center_id = 0;
        $obj->name          = $request->name;
        $obj->email         = $request->email;
        $obj->mobile        = $request->mobile_number;
        $obj->subject       = $request->subject;
        $obj->description   = $request->description;
        $obj->save();
        
        $data = $request->all();
        event(new ContactCreated($data));

        return response()->json([
            'success' => 'Your Contact has been Successfully Saved.',
        ]);
    }

    public function otp()
    {
        return view('front.pages.otp');
    }

    public function forgotPassword()
    {
        return view('front.pages.forgot-password');
    }

    public function login(Request $request)
    {
        return view('front.pages.login');
    }

    public function subscription(Request $request)
    {
        \DB::statement("SET SQL_MODE=''");
        
        $enquiryid = (isset($request->enid) && !empty($request->enid)) ? $request->enid :"";
        $records = Category::where('parent_id', '!=', 0)->where('status', 1)->skip(0)->take(30)->get();
        foreach($records as $k=>$record)
        {
            $records[$k]['category'] = Category::where('id', $record->parent_id)->first();
        }        
        abort_if(empty($records), 404);      
        

        return view('front.pages.subscription', compact('enquiryid', 'records'));
    }

    public function payNow(Request $request)
    {
        base64_decode($request->subscription_id);
        $subscription = Subscription::where('id', base64_decode($request->subscription_id))->first();
        
        abort_if(empty($subscription), 404);
        $fee          = $subscription->price;
        $title          = $subscription->title;
        $subid        = $request->subscription_id; 
        $states       = State::get();
        
        $enquiry_id = (isset($request->enid) && !empty($request->enid))?$request->enid:"";
        if($enquiry_id)
        {

            $enquiry      = Enquiry::where('id', decrypt($enquiry_id))->first();
        }else{
            $enquiry = $enquiry_id;
        }

        $pass = $this->generateOtp();
        
        return view('front.pages.pay-now', compact('pass', 'title', 'subid', 'fee', 'subid', 'states', 'subscription', 'enquiry'));
    }

    protected function generateOtp()
    {
        $otp = mt_rand(100000,999999);
        return $otp;
    }

    public function privacyPolicy()
    {
        $record = Page::where('slug', 'privacy-policy')->first();
        return view('front.pages.privacy-policy', compact('record'));
    }

    public function termsService()
    {
        $record = Page::where('slug', 'terms-of-service')->first();
        return view('front.pages.terms-service', compact('record'));
    }

    public function cookiesPolicy()
    {
        $record = Page::where('slug', 'cookies-policy')->first();
        return view('front.pages.cookies-policy', compact('record'));
    }

    public function profile()
    {
        return view('front.pages.profile');
    }

    public function salesAndMarekting()
    {
        return view('front.pages.sales-marekting');
    }

    public function signup()
    {
        return view('front.pages.signup');
    }

    public function thankyou()
    {
        return view('front.pages.thankyou');
    }

    public function contactThankyou()
    {
        return view('front.pages.contact_thankyou');
    }

    public function failure()
    {
        return view('front.pages.failure');
    }

    public function fetchCity(Request $request)
    {
        $data['cities'] = City::where("state_id", $request->state_id)
                                    ->get(["name", "id"]);
                                      
        return response()->json($data);
    }

    public function search_document(Request $request)
    {
        ini_set('memory_limit', '128M');

        ini_set('max_execution_time', '3000');

        ini_set('request_terminate_timeout', '3000');
        
        if(!empty($request->document_name))
        {
            $records = DocumentCenter::query()->with(['category'=>function($c){$c->select('id', 'slug');}, 'subcategory'=>function($sc){$sc->select('id', 'slug');}])->where('document_name', 'LIKE' ,"%$request->document_name%")->select('id', 'category_id', 'subcategory_id', 'slug', 'document_name', 'image', 'pdf', 'file_extension', 'file_size', 'page', 'description', 'status')->where('status', 1)->paginate(100);
            
        }else{
            $records = [];
        } 
        return view('front.pages.search_document', compact('records'));
    }

    public function filterDocuments(Request $request)
    {
      return DocumentCenter::where('document_name', 'LIKE' ,"%$request->phrase%")->where('status', 1)->get();
    }

    public function error()
    {
        return view('front.pages.404error');
    }

    public function sendMail(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',            
        ]);

            $user = Auth::user();
               Mail::to($request->email)
               ->send(new UserShareEmail($user));

               return back()->with('alert-success', "Mail Has Been Successfully Send!");
    }
}
