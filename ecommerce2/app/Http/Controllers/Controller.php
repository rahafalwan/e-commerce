<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use App\Cart;
use Session;
use DB;
use Auth;
class Controller extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;

    public function showHome()
    {
       
        if(Auth::guest())
        {
            return view('home',[
       
                'cart_total'=> 0  
                
            ]);
     
}
else{
    $user_id =  Auth::user()->id;
    $cart=new Cart();
      
      $cart_total=$cart->where("user_id",$user_id)->value(DB::raw("SUM(price*quantity)"));
      return view('home',[
        
        'cart_total'=> $cart_total,
        
    ]);



}

    }
    public function showAbout()
    {
        
        if(Auth::guest())
        {
            return view('about',[
       
                'cart_total'=> 0  
                
            ]);
     
}
else{
    $user_id =  Auth::user()->id;
    $cart=new Cart();
      
      $cart_total=$cart->where("user_id",$user_id)->value(DB::raw("SUM(price*quantity)"));
      return view('about',[
        
        'cart_total'=> $cart_total,
        
    ]);



}


    }
    public function showContactus()
    {
       
        if(Auth::guest())
        {
            return view('contactus',[
       
                'cart_total'=> 0  
                
            ]);
     
}
else{
    $user_id =  Auth::user()->id;
    $cart=new Cart();
      
      $cart_total=$cart->where("user_id",$user_id)->value(DB::raw("SUM(price*quantity)"));
      return view('contactus',[
        
        'cart_total'=> $cart_total,
        
    ]);



}


    }
    




    public function profile()
    {
       
       
        if(Auth::guest())
        {
            return view('login',[
       
                'cart_total'=> 0  
                
            ]);
     
}
else{
    $user_id =  Auth::user()->id;
    $cart=new Cart();
      
      $cart_total=$cart->where("user_id",$user_id)->value(DB::raw("SUM(price*quantity)"));
      return view('login',[
        
        'cart_total'=> $cart_total,
        'user_id'=>$user_id
    ]);

}
        
    }
}
