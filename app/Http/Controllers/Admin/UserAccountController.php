<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SubscriptionUser;
use Illuminate\Http\Request;
use App\Models\State;
use Auth;
use Barryvdh\DomPDF\Facade as PDF;


class UserAccountController extends Controller
{
    public function index()
    {
        return view('account.user.create');
    }
    
    public function businessInformation()
    {
        $data = explode(',', Auth::user()->business_priority);
        
        $records = State::get();
        return view('account.user.business_information', compact('records', 'data'));
    }
    
    public function myTeam()
    {
        return view('account.user.my_team');
    }

    public function license()
    {
        $subscription_detail = SubscriptionUser::where('user_id', Auth::user()->id)->where('status', 1)->where('transaction_status', 1)->whereNull('deleted_at')->first();
        
        return view('account.user.license', compact('subscription_detail'));
    }

    public function billing()
    {
        return view('account.user.billing');
    }

    public function downloadInvoice(Request $request)
    {
        
        $sub = SubscriptionUser::with('subscription')->where('user_id', Auth::user()->id)->where('status', 1)->where('transaction_status', 1)->whereNull('deleted_at')->first();

        $pdf = \PDF::loadView('account.user.invoice',compact('sub'));
    
        return $pdf->download('invoice.pdf');

    }
}
