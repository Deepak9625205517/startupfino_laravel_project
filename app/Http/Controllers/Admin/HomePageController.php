<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Home;

class HomePageController extends Controller
{
    function __construct()
    {
        ini_set('memory_limit', '128M');
        ini_set('max_execution_time', '3000');
        ini_set('request_terminate_timeout', '3000');
    }

    public function create()
    {
        return view('admin.front_page.index');
    }

    function store(Request $request)
    {
        $data = $request->input;
        

        foreach($request->input as $key=>$value){

            $name=str_replace("'","",$key);
            // dd($name);
           

            $data=Home::where("key",$name)->first();
        
            if($data){
                
                $data->value=$value;

                $data->save();

            }else{

                Home::create(['key'=>$name,"value"=>$value]);

            }

        }

        $request->session()->flash('alert-success', "Setting updated successfully!");

        return redirect()->back();

    }
}
