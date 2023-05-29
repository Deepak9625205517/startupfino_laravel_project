<?php

namespace App\Repository\Subscription;
use App\Models\SubscriptionUser;
use App\Models\Subscription;
use function is;
use function is_null;
use Auth;

class SubscriptionRepository implements SubscriptionInterface{

    public function getAll()
    {
        return Subscription::orderBy('id', 'desc')->get();
    }

    public function store($data)
    {
        $store = Subscription::create($data);
        
        return $store;
    }

    public function find($id)
    {
        $edit = Subscription::find($id);
        
        return $edit;
    }

    public function update($data, $id)
    {
        $update = Subscription::where('id', $id)->first();
        $update = $update->update($data);
        return $update;
    }

    public function statusChange($id)
    {
        $page    = Subscription::where('id', $id)->first();
        if($page->status == '1'){
            $status = '0';
        }else{
            $status = '1';
        }
        $value     = array('status' => $status);
        $change    = Subscription::where('id', $id)->update($value);
        return $change;
    }

    public function delete($id)
    {
        $delete = Subscription::find($id);
        $delete = $delete->delete();
        return $delete;
    }

    public function getDetials()
    {
       if(Auth::user()->is_admin == 2){
           return SubscriptionUser::with('user', 'subscription')->where('user_id', Auth::user()->id)->get();
    }else{
        return SubscriptionUser::with('user', 'subscription')->get();
       }
       
    }

    public function SubscriptionUserStatusChange($id)
    {
        $page    = SubscriptionUser::where('id', $id)->first();
        if($page->status == '1'){
            $status = '0';
        }else{
            $status = '1';
        }
        $value     = array('status' => $status);
        $change    = SubscriptionUser::where('id', $id)->update($value);
        return $change;
    }
}