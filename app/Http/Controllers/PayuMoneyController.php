<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\SubscriptionUser;
use App\Mail\PaymentFailMail;
use Illuminate\Http\Request;
use App\Mail\InvoiceMail;
use Mail;

/**
 * Class PayuMoneyController
 */
class PayuMoneyController extends \InfyOm\Payu\PayuMoneyController
{
    public function paymentCancel(Request $request)
    {
        
        $subscription = SubscriptionUser::where('transaction_id', $request->txnid)->first();
        if($subscription)
        {
            SubscriptionUser::where('transaction_id', $request->txnid)->update([
                                'transaction_status' => 2,
                                'payment_type'       => $request->name_on_card,
            ]);
        }
        
        $subs = SubscriptionUser::with('user', 'subscription')->where('id', $subscription->id)->first();
        if(!empty($subs))
        {
          Mail::to($subscription->email)->send(new PaymentFailMail($subs));
        }  
        return redirect(route('payment.failed'));
        
    }
    
    public function paymentSuccess(Request $request)
    {
        $data = $request->all();
        
        
        $validHash = $this->checkHasValidHas($data);
        
            SubscriptionUser::where('transaction_id', $request->txnid)->update([
                'transaction_status' => 1,
                'payment_type'       => $request->name_on_card,
            ]);
            
            $subs = SubscriptionUser::with('user', 'subscription')->where('id', $subscription->id)->first();
            if(!empty($subs))
            {
              Mail::to($subscription->email)->send(new InvoiceMail($subs));
            }
            return redirect(route('payment.success'));
        
    }
}
