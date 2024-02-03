<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Session;
use App\Cart;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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
        
    ]);



}


}
}