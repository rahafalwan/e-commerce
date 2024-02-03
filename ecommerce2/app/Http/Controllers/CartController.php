<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Cart;
use App\Product;
use DB;
use Auth;
class CartController extends Controller
{
    public function addToCart(Request $request)
    {
       
    
        $cart = new Cart;
        


        
        $cart->user_id = Auth::user()->id;
        $cart->price = $request->price;
        $cart->product_name=$request->product_name;
        $cart->quantity = $request->quantity;
        
        $cart->save();
      
         return redirect()->back()->with('flash_msg_success','Your review has been submitted Successfully,');
       
        
    }
    public function updateCart($new_Quantity,Request $request)
    {
        $cart = Cart::find($request->cart_id);
      
      if($new_Quantity>0)
        $cart->update([
            'quantity' => $new_Quantity]);
        
        
      
         return redirect()->back()->with('flash_msg_success','Your cart has been updated Successfully,');
       
        
    }
    public function deleteItemCart(Request $request)
    {
        $cart = Cart::find($request->cart_id);
      
          $cart->delete();
        
           return redirect()->back()->with('flash_msg_success','Your cart has been deleted Successfully,');
         

    }
    public function showCarts($user_id)
    {
      $cart=new Cart();
    //  $carts=$cart->where("user_id",$user_id)->get();
      $cart_total=$cart->where("user_id",$user_id)->value(DB::raw("SUM(price*quantity)"));
      $carts = Product::LeftJoin('carts', function($join)
      {
          $join->on('products.name', '=', 'carts.product_name');
      })->where("user_id",$user_id)->get();
       
      return view('showcarts',[
        'carts' => $carts,
        'cart_total'=> $cart_total,
        'user_id'=>$user_id


         
    ]);

    }
}
