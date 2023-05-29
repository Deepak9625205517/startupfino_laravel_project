<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Subscription\CreateSubscriptionRequest;
use App\Repository\Subscription\SubscriptionInterface;
use App\Http\Controllers\Controller;
use App\Models\SubscriptionCategory;
use App\Models\SubscriptionUser;
use App\Models\Subscription;
use Illuminate\Http\Request;
use App\Models\Category;
use File;
use DB;

class SubscriptionController extends Controller
{
    protected $subscription;

    public function __construct(SubscriptionInterface $subscription)
    {
         $this->subscription = $subscription;

         $this->middleware('permission:subscription-list|subscription-create|subscription-edit|subscription-delete|subscription-show', ['only' => ['index']]);
         $this->middleware('permission:subscription-create', ['only' => ['create','store']]);
         $this->middleware('permission:subscription-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:subscription-delete', ['only' => ['destroy']]);
         $this->middleware('permission:subscription-show', ['only' => ['show']]);
    }

    public function index()
    {
        $records = $this->subscription->getAll();   
        return view('admin.subscription.index', compact('records'));
    }
    
    public function create()
    {
        return view('admin.subscription.create');
    }

    public function store(CreateSubscriptionRequest $request)
    {
        $data = $request->all();
        
        $subscription = $this->subscription->store($data);
        $subscription->categories()->attach($request->category_id);
        if($subscription) {
            \LogActivity::addToLog('Subscription added successfully.');
            return redirect()->route('subscriptions.index')->with(['success' => 'Subscription added successfully.']);
        }

        return redirect()->back()->with(['fail' => 'Unable to add Subscription.']);
    }

    public function edit($id)
    {
        $edit = $this->subscription->find($id);
        $categorySubscription = $edit->categories->pluck('name', 'id')->all();
        return view('admin.subscription.edit', compact('edit', 'categorySubscription'));
    }

    public function update(CreateSubscriptionRequest $request, Subscription $Subscription)
    {
        $data = $request->all();
        
        DB::table('category_subscription')->where('subscription_id',$Subscription->id)->delete();
        $Subscription->categories()->attach($request->category_id);
        
        $Subscription = $this->subscription->update($data, $Subscription->id);
        

        if($Subscription) {
            \LogActivity::addToLog('Subscription updated successfully.');
            return redirect()->route('subscriptions.index')->with(['success' => 'Subscription updated successfully.']);
        }

        return redirect()->back()->with(['fail' => 'Unable to update Subscription.']);
    }

    public function changeStatus(Request $request, $id)
    {
        $this->subscription->statusChange($id);
        \LogActivity::addToLog('Subscription Status successfully changed.');
        return redirect()->route('subscriptions.index')->with(['success' => 'Status successfully changed.']);
    }

    public function destroy($id)
    {
        $subscription = $this->subscription->delete($id);
        // $subscription->categories()->detech($id);
        if($subscription) {
            \LogActivity::addToLog('Subscription Deleted successfully.');
            return redirect()->route('subscriptions.index')->with(['success' => 'Subscription Deleted successfully.']);
        }

        return redirect()->back()->with(['fail' => 'Unable to delete Subscription.']);
    }

    public function show()
    {
        $records = $this->subscription->getDetials();
        // dd($records->toArray());  
        return view('admin.subscription.show', compact('records'));
    }

    public function userStatus($id)
    {
        $this->subscription->SubscriptionUserStatusChange($id);
        \LogActivity::addToLog('Subscription User Status Successfully changed.');
        return redirect()->route('subscriptions.show')->with(['success' => 'Status successfully changed.']);

    }
}

