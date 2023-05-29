<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\SubscriptionUser;
use Illuminate\Http\Request;

class SigninController extends Controller
{
    public function SubscribProcess(Request $request)
    {
        $subs_details = SubscriptionUser::where('email', base64_decode($request->email))->where('mobile_number', base64_decode($request->mobile))->where('id', base64_decode($request->subscription_user_id))->where('subscription_id', base64_decode($request->subscription_id))->first();
        $price = $subs_details->price;
        return view('payumoney', compact('subs_details','price'));
    }

    public function Response(Request $request)
    {
        $data = $request->all();
        
        
        $validHash = $this->checkHasValidHas($data);
        
            SubscriptionUser::where('transaction_id', $request->txnid)->update([
                'transaction_status' => 1,
                'payment_type'       => $request->name_on_card,
            ]);
            
            return redirect(route('payment.success'));
    }

    public function SubscribeCancel()
    {
        dd('Payment Cancel!');
    }

}