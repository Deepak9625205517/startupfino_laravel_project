<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use App\Models\User;
use Hash;
use Auth;
use DB;

class ProfileController extends Controller
{
    public function index()
    {
        return view('admin.profile.index');
    }

    public function update(Request $request)
    {
        
        $this->validate($request, [
            
            'name'          => 'required',            
            'mobile_number' => 'required|unique:users,mobile_number,'.Auth::user()->id,            
            'email'         => 'required|email|unique:users,email,'.Auth::user()->id,            
            'password'      => 'same:confirm-password',
            
        ]);

        $input = $request->all();
        
        if(!empty($request->business_priority))
        {
            $string = implode(',', $request->business_priority);
            $input['business_priority'] = $string;
        }

        
        if(!empty($input['password'])){ 

            $input['password'] = Hash::make($input['password']);

        }else{

            $input = Arr::except($input,array('password'));    

        }

    

        $user = User::find(Auth::user()->id);

        $user->update($input);
     

        \LogActivity::addToLog('User updated successfully');
        return back()->with('alert-success', "User Profile Updated Successfully.");
    }

    public function deleteProfile()
    {
        $update = User::where('id', Auth::user()->id)->update(['status' => 0]);
        $delete = User::find(Auth::user()->id); 
        $delete = $delete->delete();
        Auth::logout();
        return response()->json([
            'success' => 'Youe Account has been successfully Deleted.',
        ]);
    }
}
