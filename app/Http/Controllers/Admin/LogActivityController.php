<?php



namespace App\Http\Controllers\Admin;



use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\LogActivity;



class LogActivityController extends Controller

{

    /**

     * Show the application dashboard.

     *

     * @return \Illuminate\Http\Response

     */

    public function myTestAddToLog()

    {

        \LogActivity::addToLog('My Testing Add To Log.');

        dd('log insert successfully.');

    }





    /**

     * Show the application dashboard.

     *

     * @return \Illuminate\Http\Response

     */

    public function logActivity(Request $request)

    {

        $logs = LogActivity::orderBy('id', 'desc')->paginate(10);
        if($request->ajax()){
            $logs = LogActivity::query()
                ->when($request->seach_term, function($q)use($request){
                    $q->where('id', 'like', '%'.$request->seach_term.'%')
                    ->orWhere('method', 'like', '%'.$request->seach_term.'%')
                    ->orWhere('ip', 'like', '%'.$request->seach_term.'%')
                    ->orWhere('agent', 'like', '%'.$request->seach_term.'%');
                })
            ->orderBy('id', 'desc')->paginate(10);
            return view('admin.log_activity.include.list', compact('logs'))->render();
        }

        return view('admin.log_activity.index',compact('logs'));

    }



}

