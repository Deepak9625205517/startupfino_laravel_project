<?php

namespace App\Http\Controllers\Front;

use App\Http\Requests\Payment\CreatePaymentRequest;
use App\Events\ForgetPasswordCreated;
use App\Http\Controllers\Controller;
use App\Models\SubscriptionUser;
use App\Models\Subscription;
use Illuminate\Http\Request;
use App\Mail\RegisterMail;
use App\Models\Subscribe;
use App\Models\User;
use Carbon\Carbon;
use Session;
use Cookie;
use Mail;
use Hash;
use Auth;
use URL;

class SubscribeController extends Controller
{
    public function subscribe(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
        ]);
        
        $checkemail = Subscribe::where('email', $request->email)->first();
        if($checkemail)
        {
            return response()->json([
                'error' => 'Sorry! You have alredy Subscribe.',
            ]);
        }

         $obj = new Subscribe();
         $obj->email = $request->email;
         $obj->save();

         return response()->json([
            'success' => 'You have successfully Subscribe.',
        ]);
    }

    public function forgotPassword(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
        ]);
        
        $user = User::where('email', $request->email)->where('is_admin', 2)->first();
        if(!$user)
        {
            return response()->json([
                'error' => 'Sorry! Your Email ID Does Not Exist.',
            ]);
        }
        $user['url']   = url('reset-password/'.base64_encode($user->email));
     
        event(new ForgetPasswordCreated($user));
        
         return response()->json([
            'success' => 'We have e-mailed your password reset link!',
        ]);
    }

    public function resetPasswords($email)
    {
        $user = User::where('email', base64_decode($email))->first();
        abort_if(!$user, 404);
        return view('front.pages.change-password', compact('email'));
    }

    public function changePassword(Request $request)
    {
        $this->validate($request, [
            'password' => 'required|min:6|same:password_confirmation',
        ]);
        
        $user = User::where('email', base64_decode($request->email))->first();
        abort_if(!$user, 1);

                User::where('email', base64_decode($request->email))->update(['password' => Hash::make($request->password)]);

        return response()->json([
            'success' => 'Your Password has been Successfully Changed.',
        ]);
    }

    public function paymentFailed()
    {
        return view('front.pages.payment_filed');
    }

    public function paymentSuccess()
    {
        return view('front.pages.success');
    }

    public function payment(CreatePaymentRequest $request)
    {
        $minutes = 60*60*24*1;
        
       
        
        $checkEmailsubscription = SubscriptionUser::where('subscription_id', base64_decode($request->sub_id))
                             ->where('email', $request->email)
                             ->where('transaction_status', 1)
                             ->where('status', 1)
                             ->whereNull('deleted_at')
                             ->first();
        
        $checkMobilesubscription = SubscriptionUser::where('subscription_id', base64_decode($request->sub_id))
                             ->where('mobile_number', $request->mobile_number)
                             ->where('transaction_status', 1)
                             ->where('status', 1)
                             ->whereNull('deleted_at')
                             ->first();                     
        if(!empty($checkEmailsubscription) && isset($checkEmailsubscription) || !empty($checkMobilesubscription) && isset($checkMobilesubscription))
        {
            
        // $firstDate  = Carbon::parse($checksubscription->last_date);
        // $secondDate = Carbon::parse(Carbon::now()->format('Y-m-d'));
           
                $msg = "Your Plan Is Already Successfully Running!";
            
                return redirect()->route('failure')->with('successss',$msg);
        }
        
        
        
        $checkuser = User::where('mobile_number', $request->mobile_number)->orWhere('email', $request->email)->where('is_admin', 2)->first(); 
        if($checkuser)
        {
           if(Auth::user())
           {
               $user_id = Auth::user()->id;
           }else{
               Auth::login($checkuser);
               $user_id = Auth::user()->id;
           }

            $subscription = Subscription::find(base64_decode($request->sub_id));
            if($request->subscription_type == $subscription->monthly)
            {
                $price = $request->subscription_type;
                $type  = 'Monthly';
            }
            else if($request->subscription_type == $subscription->price)
            {
                $price = $request->subscription_type;
                $type  = $subscription->type;
            }

            $obj = new SubscriptionUser();
            $obj->user_id	        = $user_id;
            $obj->subscription_id   = $subscription->id;
            $obj->subscription_date = Carbon::now()->format('Y-m-d');
            $obj->days              = $subscription->days;
            $obj->first_name        = $request->name;
            $obj->email             = $request->email;
            $obj->mobile_number     = $request->mobile_number;
            $obj->state_id          = $request->state_id;
            $obj->price             = $price;
            $obj->subscription_type = $type;
            $obj->transaction_id    = 'CORP'.rand(10000000,99999999);
            $obj->documens_limit    = $subscription->days;
            $obj->last_date         = Carbon::now()->addDay($subscription->days - 1);
            $obj->save();

            $data = array('trnsid'=>$obj->transaction_id, 'price'=>$obj->price, 'name'=>$obj->first_name, 'mobile'=>$obj->mobile_number, 'email'=>$obj->email);
            
            return view('front.pages.payumoney',compact('data'));

            
        }else{
            $this->validate($request, [
                'email' => 'required|email|unique:users',
            ]);
            $input = $request->all();
            $input['password'] = Hash::make($request->password);
            $input['refferal_code'] = $this->generateOtp();
            $input['is_admin'] = 2;
        
            $user = User::create($input);
            $user['pass'] = $request->password;
            $user->assignRole(['Customer']);

            $credentials = $request->only('email', 'password');
            
            $token = Auth::attempt($credentials);
            
            
            Mail::to($request->email)->send(new RegisterMail($user));
        }        
       

        $subscription = Subscription::find(base64_decode($request->sub_id));
            if($request->subscription_type == $subscription->monthly)
            {
                $price = $request->subscription_type;
                $type  = 'Monthly';
            }
            else if($request->subscription_type == $subscription->price)
            {
                $price = $request->subscription_type;
                $type  = $subscription->type;
            }

        $obj = new SubscriptionUser();
        $obj->user_id	        = Auth::user()->id;
        $obj->subscription_id   = $subscription->id;
        $obj->subscription_date = Carbon::now()->format('Y-m-d');
        $obj->days              = $subscription->days;
        $obj->first_name        = $request->name;
        $obj->email             = $request->email;
        $obj->mobile_number     = $request->mobile_number;
        $obj->state_id          = $request->state_id;
        $obj->price             = $price;
        $obj->subscription_type = $type;
        $obj->transaction_id    = 'CORP'.rand(10000000,99999999);
        $obj->documens_limit    = $subscription->days;
        $obj->last_date         = Carbon::now()->addDay($subscription->days - 1);
        $obj->save();

         
        $data = array('trnsid'=>$obj->transaction_id, 'price'=>$obj->price, 'name'=>$obj->first_name, 'mobile'=>$obj->mobile_number, 'email'=>$obj->email);
        return view('front.pages.payumoney',compact('data'));
    }

    protected function generateOtp()
    {
        $otp = mt_rand(100000,999999);
        return $otp;
    }

    

    
}
