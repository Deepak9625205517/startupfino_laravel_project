<?php



namespace App\Http\Controllers\Admin;



use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Services\LoginHistoryService;
use App\Models\LoginHistory;



class LogingHistoryController extends Controller

{

    protected $loginhistoryservice;



    public function __construct(LoginHistoryService $loginhistoryservice)

    {

       return $this->loginhistoryservice = $loginhistoryservice;

    }



    public function index(Request $request)

    {

        $records = LoginHistory::query()->orderBy('id', 'desc')->paginate(10);

        if($request->ajax()){
            $records = LoginHistory::query()
                        ->when($request->seach_term, function($q)use($request){
                            $q->where('id', 'like', '%'.$request->seach_term.'%')
                            ->orWhere('name', 'like', '%'.$request->seach_term.'%')
                            ->orWhere('email', 'like', '%'.$request->seach_term.'%');
                        })
                        ->when($request->status, function($q)use($request){
                            $q->where('status',$request->status);
                        })
                        ->paginate(10);
            return view('admin.login_history.include.list', compact('records'))->render();
        }

        return view('admin.login_history.index', compact('records'));

    }

   
}

