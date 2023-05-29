<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Events\EnquiryCreated;
use Illuminate\Http\Request;
use App\Models\Enquiry;
use App\Models\User;
use App\Mail\RegisterMail;
use Mail;
use Hash;
use Auth;

class EnquiryController extends Controller
{
    public function index()
    {
       $records = Enquiry::with('documentCenter')->where('status', 1)->orderBy('id', 'desc')->get();
       return view('admin.enquiry.index', compact('records'));
    }

    public function enquiry(Request $request)
    {
       $this->validate($request, [
            'name'          => 'required',
            'mobile_number' => 'required|numeric|min:10',
            'email'         => 'required|email',
        ]);
         
         $request->password = $this->generateOtp();

         $obj = new Enquiry();
         $obj->document_center_id = $request->document_center_id;
         $obj->name               = $request->name;
         $obj->mobile             = $request->mobile_number;
         $obj->email              = $request->email;
         $obj->save();
        //  $obj->password = $request->password;
         
        // $checkuser = User::where('mobile_number', $request->mobile_number)->orWhere('email', $request->email)->first(); 
        // if($checkuser)
        // {
            // $credentials = $request->only('email', 'password');
            // $token = Auth::attempt($credentials);
        //     return response()->json([
        //         'success' => 'Your Enquiry has been successfully save.',
        //     ]);
            
        // }else{
            
        //     $input = $request->all();
        //     $input['password'] = Hash::make($obj->password);
        //     $input['is_admin'] = 2;
        
        //     $user = User::create($input);
        //     $user->assignRole(['Customer']);

        //     $credentials = $request->only('email', 'password');
            
        //     $token = Auth::attempt($credentials);
            

        //     Mail::to($request->email)->send(new RegisterMail($obj));
        // }        
       
        //  $data = $request->all();
        //  event(new EnquiryCreated($data));
         return response()->json([
            'enquiry_id' =>encrypt($obj->id), 
            'success' => 'Youe Enquiry has been successfully save.',
        ]);
    }

    protected function generateOtp()
    {
        $otp = mt_rand(100000,999999);
        return $otp;
    }
}
