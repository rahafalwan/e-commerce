@extends('layouts.app')
@section('content')
@php
$total=0;
@endphp
<div class="container mt-5 base_bg text-white">
    <div class="row py-3">
<div class="col-md-8 ">
    <table>
        <tr>
            <th></th>
          <th>Product</th>
          <th>Price</th>
          <th>Quantity</th>
          <th>SubTotal</th>
          <th></th>
        </tr>
        @foreach($carts as $cart)
        <tr>
            <td><img class="card-img-top" src= "/img/{{ $cart->image }}" style="width: 50pt;height:50pt" alt="..."  ></td>
            <td ><a style="color: darkgoldenrod;text-decoration:none" href="{{ route('show.productsDetail', [$cart->product_name] )}}">{{$cart->product_name}}</a></td>
            <td> {{$cart->price}}</td>
            <form  method="post" >
                {{ csrf_field() }}
                <td>
                <input type="hidden" name="cart_id" value="{{ $cart->id }}">
                 <input type="submit" class="plus-min" name="minus" id="min_update" value="-" size="2" formaction="{{  url('update-cart',[$cart->quantity-1])}}"  />
                   <input type="text" class="product_quantity" name="quantity" value="{{$cart->quantity}}" size="1" >
                   <input type="submit" class="plus-min" name="add" id="add_update" value="+" size="2" formaction="{{ url('update-cart',[$cart->quantity+1])}}" />
                  
            </td>
            <td> {{($cart->price)*($cart->quantity)}}.00$</td>
            <td>
          <input type="submit" class="btn" name="delete" value="Delete" formaction="{{  url('delete-cart')}}"/><i class="fa fa-trash " style="color: rgb(83, 33, 33)"></i></td>
        </form>
    </tr>
        @endforeach
    </table>
</div>
<div class="col-md-4 ">
    <table >
        <tr>
         <th>Cart Totals</th>
         <th></th>
        </tr> 
       
        @foreach($carts as $cart)
        <tr  >
            <td>SubTotal</td>
            <td> {{($cart->price)*($cart->quantity)}}.00$</td>
            @php
            $total+=($cart->price)*($cart->quantity);
            @endphp
           
        </tr>
        @endforeach
        
        <tr class="tbr">
            <td>Total</td>
            <td>{{$total}}.00$</td>

            </tr>
    </table>
        
        </div>
</div>
</div>
@endsection