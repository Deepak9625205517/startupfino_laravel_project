<?php 

namespace App\Helper;


use App\Models\BasicSetting;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Manufacture;
use App\Models\Agent;
use DB;
use Auth;
use Mail;
use App\Models\Language;
use App\Models\AttributeGroup;
use App\Models\EmailTemplete;
use App\Models\AttributeProduct;
use App\Models\Assets;
use App\Models\Size;
use App\Models\Favorite;
use App\Models\AgentAddress;
use App\Models\ProductPrice;
use App\Models\Product;
use App\Models\OrderItems;
use App\Models\OrderAddress;
use App\Models\OrderData;
use App\Models\ViewerForCategorySubProduct;
use App\Models\ProductFavorite;
use App\Models\DeliveryAmount;
use MailHelper;

/**
 * Class ModelHelper
 * @package App\Helper
 */
class ModelHelper{
    function setViewerForCategorySubProduct($model,$model_id,$user_id){
        $data=[
                "model_id"=>$model_id,
                "model"=>$model,
                "user_id"=>$user_id,
                "entry_timestamp"=>strtotime(date('Y-m-d'))
            ];
        ViewerForCategorySubProduct::create($data);    
    }
    
    
    
    function getAllRevenue($vendor_id){
        $price=0;
        $data=OrderItems::where("vendor_id",$vendor_id)->get();
        foreach($data as $d){
            if($d->selling_price){
                $p=$d->selling_price;
            }else{
                $p=$d->actual_price;
            }
            $price=$price+($p*$d->quantity);
        }
        return $price;
    }
    
    function getAllRevenueAcToDate($vendor_id,$start_date=0,$end_date=0){
        $price=0;
        $data=OrderItems::where("vendor_id",$vendor_id);
        if($start_date!=0){
            $start_date=date("Y-m-d H:i:s",strtotime($start_date));
            $data->where("created_at",'>=',$start_date);
        }
        if($end_date!=0){
            $end_date=date("Y-m-d H:i:s",strtotime($end_date));
            $data->where("created_at",'<=',$end_date); 
        }
        $data=$data->get();
        foreach($data as $d){
            if($d->selling_price){
                $p=$d->selling_price;
            }else{
                $p=$d->actual_price;
            }
            $price=$price+($p*$d->quantity);
        }
        return $price;
    }
    
	function getDeliveryAndTax(){
		return  DeliveryAmount::get();
	}
	
	function getFavoriteDataBoolean($product_id,$user_id){
	    $data=ProductFavorite::where(["product_id"=>$product_id,"user_id"=>$user_id])->first();
	    if($data){
	        return true;
	    }else{
	        return false;
	    }
	}
	function getSingleProductData($id){
		 $products=Product::select('products.*','product_prices.actual_price','product_prices.selling_price','product_prices.id as price_id');
        $products->join("product_prices",'products.id','=','product_prices.product_id');

        $product=$products->where("products.id",$id)->first();
        return $product;
	}

	function getSubTotalPrice($p){
		$ac=1*$p->actual_price;
		$sell=$p->selling_price;
		$commission=$p->admin_commission;                    
		$ac=$ac*$p->default_currency_value;
		$ac=$ac+(($ac*$commission)/100);
		if($sell!=""){
		    $sell=$sell*$p->default_currency_value;
		    $sell=($sell+(($sell*$commission)/100));
		    $final_price= ($sell);
		}else{
		    $final_price =($ac);
		}
		return $final_price;
	}

	
	function getWholesaleCommission($product_id,$admin_commission=0){
		$product=Product::find($product_id);
		if($product->vendor->admin_commission!=""){
			return $product->vendor->admin_commission;
		}
		return $this->getDataFromSetting("wholesale_buyer");
	}

	function getOrderItems($order_id){
		return OrderItems::where("order_id",$order_id)->get();
	}
	function getOrderAddress($order_id){
		return OrderAddress::where("order_id",$order_id)->first();
	}
	
	function getProductDetail($id){
		return Product::find($id);
	}

	function getFavoriteProductListing(){
		$data=Favorite::where(["user_id"=>Auth::guard("front")->user()->id])->get();
		$product_ids=[];
		foreach($data as $d){
			$product_ids[]=$d->product_id;
		}

$products=Product::select('products.*','product_prices.actual_price','product_prices.selling_price','product_prices.id as price_id');
        $products->join("product_prices",'products.id','=','product_prices.product_id');
        $products->where("product_prices.is_default",1);
        $products->where("products.product_type","direct");
        $products->whereIn("products.id",$product_ids);
		return $products->get();
	}

	function getFavoriteDataForProduct($product_id){
		if(Auth::guard("front")->user()){
			$data=Favorite::where(["product_id"=>$product_id,"user_id"=>Auth::guard("front")->user()->id])->first();
			if($data){
				return 'unfavorite-data bg-danger text-white';
			}else{
				return 'favorite-data';
			}
		}else{
			return 'login-modal';
		}
	}

	function countProductAcToCategory($category_id){
		return Product::where("category_id",$category_id)->where('product_type',"direct")->count();
	}

	function getIsRelatedProduct($category_id,$id){

$products=Product::select('products.*','product_prices.actual_price','product_prices.selling_price','product_prices.id as price_id');
        $products->join("product_prices",'products.id','=','product_prices.product_id');
        $products->where("product_prices.is_default",1);
        $products->where("products.product_type","direct");
        $products->where("products.id","<>",$id);
		return $products->where("category_id",$category_id)->limit(6)->get();
	}

	function getIsHomeProduct(){

$products=Product::select('products.*','product_prices.actual_price','product_prices.selling_price','product_prices.id as price_id');
        $products->join("product_prices",'products.id','=','product_prices.product_id');
        $products->where("product_prices.is_default",1);
        $products->where("products.product_type","direct");
		return $products->where("isHome","1")->get();
	}


	function getPriceProductList($product_id){
		return ProductPrice::where("product_id",$product_id)->orderBy("is_default","desc")->get();
	}
	function getPriceProductListIsDefault($product_id){
		return ProductPrice::where("product_id",$product_id)->where("is_default","1")->first();
	}
	function getImageByProduct($product_id){
		return Assets::where("model_id",$product_id)->where("model","products")->get();
	}
	 public function getAttributeGroupProduct($product_id){
    	return AttributeProduct::where("product_id",$product_id)->get();
    }

	public  function getCategoriesSelect(){
		$data=[];
		$all=Category::where("publish",1)->get();
		foreach($all as $a){
			$data[$a->id]=$a->title;
		}
		return $data;
	}
	public  function getCategoriesSelectParent(){
		$data=[];
		$data[null]="Parent category";
		$all=Category::whereNull("isParent")->get();
		foreach($all as $a){
			$data[$a->id]=$a->title;
		}
		return $data;
	}
	function getpriceSelect(){
		return [
			""=>"Price",
			"low-to-high"=>"Low to High",
			"High-to-Low"=>"High to Low"
		];

	}




	public  function getCaProductSelect(){
		$data=[];
		$all=Product::all();
		foreach($all as $a){
			$data[$a->id]=$a->title ."(".$a->seo_url.")";
		}
		return $data;
	}
   
   function getVendor($vendorid)
   {
        $user = Agent::where('id', $vendorid)->first();
        return $user->first_name." ".$user->last_name;
   }

	function getAgentName($id){
		$data=Agent::find($id);
		if($data){
			return $data->first_name." ".$data->last_name;
		}else{
			return $id;
		}
	}
	function getProductName($id){
		$data=Product::find($id);
		if($data){
			return $data->title;
		}else{
			return $id;
		}
	}
	public function agentListSelect(){
		$data=[];
		$all=Agent::all();
		foreach($all as $a){
			$data[$a->id]=$a->first_name." ".$a->last_name;
		}
		return $data;
	}
	function getVendorList(){
		$data=[];
		$all=Agent::where('user_type','vendors')->get();
		foreach($all as $a){
			$data[$a->id]=$a->first_name." ".$a->last_name."(".$a->email.")";
		}
		return $data;
	}





	public  function getAttributeGroupSelect(){
		$data=[];
		$all=AttributeGroup::all();
		foreach($all as $a){
			$data[$a->id]=$a->name;
		}
		return $data;
	}

	function getAttributeGroupName($id){
		$data=AttributeGroup::find($id);
		if($data){
			return $data->name;
		}
		return $id;
	}





   
	function getLanguageName($id){
		$data=Language::find($id);
		if($data){
			return $data->title;
		}
		return $id;
	}
	function getCategoryName($id){
		$data=Category::find($id);
		if($data){
			return $data->title;
		}
		return $id;
	}
	function getCategoryData($id){
		$data=Category::find($id);
		
		return $data;
	}



	function getSizeName($id){
		$data=Size::find($id);
		if($data){
			return $data->title;
		}
		return $id;
	}

	function getAgentDetail($id){
		return Agent::find($id);
	}
	
	public function getDataFromSetting($name){
		$result=null;
		$data=BasicSetting::where("name",$name)->first();
		if($data){
			$result=$data->value;
		}

		return $result;
	}



	function getLanguageSelect(){
		$data=[];
		$all=Language::all();
		foreach($all as $a){
			$data[$a->id]=$a->title;
		}
		return $data;
	}


	function emailSender($mailData){
		$temp = EmailTemplete::where('email_type','=',$mailData['type'])->first();
		$body=$temp->email_body;
		if(isset($mailData['password'])){
        	$body = preg_replace("/{password}/", $mailData['password'] ,$body);
        }
        if(isset($mailData['useremail'])){
        	$body = preg_replace("/{useremail}/", $mailData['useremail'] ,$body);
        }
        if(isset($mailData['username'])){
        	$body = preg_replace("/{username}/", $mailData['username'] ,$body);
        }
        if(isset($mailData['usermobile'])){
        	$body = preg_replace("/{usermobile}/", $mailData['usermobile'] ,$body);
        }
        if(isset($mailData['usermessage'])){
        	$body = preg_replace("/{usermessage}/", $mailData['usermessage'] ,$body);
        }
       

        $data = [
            'email_body' => $body
        ];

        $objDemo = new \stdClass();
        $objDemo->to = $mailData['to'];
        $objDemo->from = 'demoadix@gmail.com';
        $objDemo->title = 'Groenteboer Plus';
        $objDemo->subject = $temp->email_subject;
        try{
            (Mail::send('mail.dummyMail',$data, function ($message) use ($objDemo) {
                $message->from($objDemo->from,$objDemo->title);
                $message->to($objDemo->to);
                $message->subject($objDemo->subject);
            }));
        }
        catch (\Exception $e){
             ($e->getMessage());
        }
	}
	
}