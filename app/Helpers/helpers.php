<?php

use App\Models\SubscriptionUser;
use App\Models\DocumentCenter;
use App\Models\BasicSetting;
use App\Models\Subscription;
use App\Models\CompanyLogo;
use App\Models\Testimonial;
use App\Models\Favourite;
use App\Models\Category;
use Carbon\Carbon;
use App\Models\Page;
use App\Models\User;
use App\Models\Home;



if (! function_exists('getTestmonial')) {
    function getTestmonial(){
        return Testimonial::where('status', 1)->orderBy('id', 'desc')->get();
    }
}

if (! function_exists('seoPage')) {
    function seoPage($title, $keywords, $description){
        $seos = [$title, $kewords, $description];
        return $seos;
    }
}

if (! function_exists('CompanyLogo')) {
 function CompanyLogo()
 {
    return CompanyLogo::where('status', 1)->orderBy('id', 'desc')->get();
 }
} 

if (! function_exists('getSubscription')) {
    function getSubscription()
    {
       return Subscription::with('categories')->where('status', 1)->orderBy('price', 'asc')->get();
    }
   }
   
if (! function_exists('getMaxSubscription')) {
    function getMaxSubscription()
    {
        return Subscription::where('status', 1)->orderBy('price', 'desc')->offset(1)->limit(1)->pluck('price')->first();
    }
}   

if (! function_exists('getSubCategoryDocumentList')) {
    function getSubCategoryDocumentList()
    {
        return Category::whereHas('subcategory', function($q){
            return $q->where('status', 1);
        })  
        ->with('subcategory')->where('status', 1)->wherenotnull('parent_id')->orderBy('id', 'asc')->limit(8)->get();
    }
}   

if (! function_exists('getCategoryList')) {
    function getCategoryList()
    {
        ini_set('max_execution_time', 300);
        ini_set('memory_limit','128M');
        return Category::whereHas('subcategory', function($q){
            return $q->where('status', 1);
        })  
        ->with('subcategory')->where('status', 1)->wherenotnull('parent_id')->orderBy('id', 'asc')->get();
    }
}   


    function getDataFromSetting($name){
        $result=null;
        $data=BasicSetting::where("name",$name)->first();
        if($data){
            $result=$data->value;
        }

        return $result;
    }

if (! function_exists('getDataHomePage')) {
    function getDataHomePage($key){
        $result=null;
        $data=Home::where("key",$key)->first();
        if($data){
            $result=$data->value;
        }

        return $result;
    }
}

if (! function_exists('getHeadMenu')) {
    function getHeadMenu(){
        $headmenus=Page::whereIn("id", [17, 24])->get();

        return $headmenus;
    }
}

if (! function_exists('getLatestMenu')) {
    function getLatestMenu(){
        $headmenus=Page::orderBy('id', 'desc')->limit(3)->get();

        return $headmenus;
    }
}

if (! function_exists('getFooterMenu')) {
    function getFooterMenu(){
        $headmenus=Page::orderBy('id', 'asc')->limit(5)->get();

        return $headmenus;
    }
}

if (! function_exists('getLatestSubCategoryDocumentList')) {
    function getLatestSubCategoryDocumentList()
    {
        $records = Category::where('status', 1)->wherenot('parent_id', 0)->orderBy('id', 'asc')->limit(4)->get();
        foreach($records as $k=>$record)
        {
            $records[$k]['category'] = Category::where('id', $record->parent_id)->first();
        } 
        return $records;
    }
}

if (! function_exists('getSubCategoryList')) {
    function getSubCategoryList()
    {
           ini_set('max_execution_time', 300);
           ini_set('memory_limit','128M');
        return Category::where('status', 1)->wherenot('parent_id', 0)->orderBy('id', 'desc')->get();
    }
}

if (! function_exists('CategoryList')) {
    function CategoryList()
    {
        return Category::where('status', 1)->where('parent_id', 0)->orderBy('name', 'asc')->get();
    }
}

if (! function_exists('TotalDocuments')) {
    function TotalDocuments()
    {
        return DocumentCenter::where('status', 1)->get()->count();
    }
}

if (! function_exists('TotalUsers')) {
    function TotalUsers()
    {
        return User::wherenot('id', 1)->where('status', 1)->get()->count();
    }
}

if (! function_exists('TotalSubscriptionUser')) {
    function TotalSubscriptionUser()
    {
        return SubscriptionUser::where('status', 1)->get()->count();
    }
}

if (! function_exists('TotalTestimonial')) {
    function TotalTestimonial()
    {
        return Testimonial::where('status', 1)->get()->count();
    }
}

if (! function_exists('documentList')) {
    function documentList()
    {
           ini_set('max_execution_time', 300);
           ini_set('memory_limit','128M');
        return DocumentCenter::where('status', 1)->get();
    }
}

if (! function_exists('FavouriteCount')) {
    function FavouriteCount()
    {
        if(Auth::user()->id == 1)
        {
            $count  = Favourite::where('like', 1)->count();
        }else{

            $count  = Favourite::where('like', 1)->where('user_id', Auth::user()->id)->count();
        }
        return $count;
    }
}

if (! function_exists('CheackSubscriptioinUser')) {
    function CheackSubscriptioinUser()
    {
       
        $checkSubscription  = SubscriptionUser::where('user_id', Auth::user()->id)->where('status', 1)->where('transaction_status', 1)->first();
       
        return $checkSubscription;
    }
}



if (! function_exists('CheackRenewalAlert')) {
    function CheackRenewalAlert()
    {
        $checkSubs = SubscriptionUser::where('user_id', Auth::user()->id)->where('status', 1)->where('transaction_status', 1)->first();
        $next_date = !empty($checkSubs->last_date) ? $checkSubs->last_date : '';
        $prev_date = date("Y-m-d",strtotime($next_date.' - 1 month'));

        $to = Carbon::parse($prev_date);
        $from = Carbon::parse($next_date);
        
        $date = Carbon::now()->between($from, $to);
        return $date;
    }
}

if (! function_exists('CheackSubscriptionDateExist')) {
    function CheackSubscriptionDateExist($checksubscription)
    {
        $subs = '';
        foreach($checksubscription as $k => $v)
        {
            $subs = SubscriptionUser::where('subscription_id', $v)->first();
        }
        
        $firstDate = Carbon::parse($subs->last_date);
        $secondDate = Carbon::parse(Carbon::now()->format('Y-m-d'));
        $exist_date = $firstDate->gte($secondDate);
        return $exist_date;
    }
}

if (! function_exists('parentCategoryWithChield')) {
    function parentCategoryWithChield()
    {
        $parent_categories   = Category::with('childs')->where('status', 1)
                            ->where('parent_id', 0)
                            ->orderBy('id', 'desc')
                            ->get();
        return $parent_categories;
    }
}





 


