<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Type;
use App\Product;
use App\Review;
use App\Cart;
use DB;
use Session;
use Auth;
class StoreController extends Controller
{

    public  function showStore()
    {
        $products = Product::LeftJoin('type', function($join)
    {
        $join->on('type.pid', '=', 'products.type_id');
    })->orderBy('products.created_at', 'asc')->offset(0)->limit(8)->get();
    $count=DB::table('Product')->count();
    
   
    if(Auth::guest())
    {
        $cart_total=0;
    }
    else{
        $user_id =  Auth::user()->id;
        $cart=new Cart();
        $cart_total=$cart->where("user_id",$user_id)->value(DB::raw("SUM(price*quantity)"));
    }


    return view('store',[
        'products' => $products,
        'count'=>$count,
        'offset'=>1,
        'cart_total'=> $cart_total
   
    
    ]);
    }
    public  function showStore2()
    {
        $products = Product::LeftJoin('type', function($join)
       {
           $join->on('type.pid', '=', 'products.type_id');
       })->orderBy('products.created_at', 'asc')->offset(7)->limit(8)->get();
       $count=DB::table('Product')->count();
      
    if(Auth::guest())
    {
        $cart_total=0;
    }
    else{
        $user_id =  Auth::user()->id;
        $cart=new Cart();
        $cart_total=$cart->where("user_id",$user_id)->value(DB::raw("SUM(price*quantity)"));
    }

      
    
       return view('store',[
           'products' => $products,
           'count'=>$count,
           'offset'=>8,
           'cart_total'=> $cart_total
       ]);
    }
   public function showProductsDetail ($name)
   {

    if(Auth::guest())
    {
        $cart_total=0;
    }
    else{
        $user_id =  Auth::user()->id;
        $cart=new Cart();
        $cart_total=$cart->where("user_id",$user_id)->value(DB::raw("SUM(price*quantity)"));
    }
   
       $products = Product::LeftJoin('type', function($join)
       {
           $join->on('type.pid', '=', 'products.type_id');
       })->where('products.name', 'LIKE', $name)->get();

       $reviews = Review::Where('product_name', 'LIKE', $name)->get();
       
       
       return view('detail',[
           'products' => $products,
           'reviews'=>$reviews,
           'cart_total'=> $cart_total,
           'user_id'=>$user_id
           
       ]);
    
   }
   public function showProductsbyType($type)
   {
    $products = Product::LeftJoin('type', function($join)
    {
        $join->on('type.pid', '=', 'products.type_id');
    })->where('type.type_name', 'LIKE', $type)->get();
    
   
    $count=Product::LeftJoin('type', function($join)
    {
        $join->on('type.pid', '=', 'products.type_id');
    })->where('type.type_name', 'LIKE', $type)->count();
    
    if(Auth::guest())
    {
        $cart_total=0;
    }
    else{
        $user_id =  Auth::user()->id;
        $cart=new Cart();
        $cart_total=$cart->where("user_id",$user_id)->value(DB::raw("SUM(price*quantity)"));
    }
   
    return view('store',[
        'products' => $products,
        
        'offset'=> 1,
        'count'=>$count,
        'cart_total'=> $cart_total
        
    ]);
}
   public function addReview(Request $request)
    {
       
    
        $review = new Review;
        $product = new Product;
        $review->user_name = $request->user_name;
        $review->email = $request->email;
        $review->product_name=$request->product_name;
        
        $review->review_text = $request->reviews;
        $review->rating = $request->rating;
        $review->save();
        $avg_rate = DB::table('reviews')->Where('product_name', 'LIKE', $request->product_name)
        ->avg('rating');
        $product::Where('name','LIKE',$request->product_name)->update(['rating'=>$avg_rate]);
      
         return redirect()->back()->with('flash_msg_success','Your review has been submitted Successfully,');
       
        
    }
    
}

