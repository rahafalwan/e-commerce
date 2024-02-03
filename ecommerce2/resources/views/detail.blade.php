@extends('layouts.app')
@section('content')

@foreach($products as $product)

    <div class="container-fluid  text-white mb-3">
        
      
        <div class="row pt-5">
            <h1 style="font-size: 300%;text-align:center">{{$product->name}}</h1>
        </div>
        <div class="row pt-3">
           <p style="text-align:center ;color:gray">Home / {{$product->type_name}} / {{$product->name}}</p>
           
        </div>
        <div class="row pt-3 ">
            <div class="col-md-6  align-self-center">
          <img src="/img/{{$product->image}}" style="width:300pt;height:300pt" alt="">
            </div>
            <div class="col-md-6">
             <h3 style="padding-bottom: 3pt;">{{$product->name}}</h3>
             <h5 style="padding-bottom: 3pt;">{{$product->price}}.00$</h5>
             <p style="padding-bottom: 3pt;">{{$product->description}}</p>
             <hr>
             <form class="cart-action" method="POST" action="{{url('add-to-cart')}}">
                {{ csrf_field() }}
                <input type="hidden" name="user_id" value="1">
                <input type="hidden" name="product_name" value="{{ $product->name }}">
                <input type="hidden" name="price" value="{{ $product->price }}">
                
                <input type="button" class="plus-min" name="minus" id="min" value="-" size="2"  />
                   <input type="text" class="product_quantity" name="quantity" id="quantity" value="1" size="1" />
                   <input type="button" class="plus-min" name="plus" id="add" value="+" size="2"  />
                <input type="submit" value="Add to Cart" class="btnAddAction" />
             </form>
           
        
             <hr>
        
               <div class="row">
                 <div class="col-md-3">
                  <p>SKU : {{$product->sku}}</p>
                 </div>
                  <div class="col-md-3">
                   <p> Category : {{$product->type_name}} </p>
                  </div>
               </div>
           </div>
        </div>
        <hr>
      <div class="row">
      <h3 style="color: gray">Reviews({{count($reviews)}})</h3>
      <form name="add-review-post-form" method="post" action="{{url('add-review')}}">
        {{ csrf_field() }}
        <div class="form-group row">
            <input type="hidden" name="product_name" value="{{ $product->name }}">
            <div class="col">
               <div class="rate">
                  <input type="radio" id="star5" class="rate" name="rating" value="5"/>
                  <label for="star5" title="text">5 stars</label>
                  <input type="radio" checked id="star4" class="rate" name="rating" value="4"/>
                  <label for="star4" title="text">4 stars</label>
                  <input type="radio" id="star3" class="rate" name="rating" value="3"/>
                  <label for="star3" title="text">3 stars</label>
                  <input type="radio" id="star2" class="rate" name="rating" value="2">
                  <label for="star2" title="text">2 stars</label>
                  <input type="radio" id="star1" class="rate" name="rating" value="1"/>
                  <label for="star1" title="text">1 star</label>
               </div>
            </div>
         </div>
    <label for="reviews">Reviews:</label><br>
    
   <textarea id="reviews" name="reviews" class="form-reviews"></textarea><br>
   <div class="row">
   <div class="col-md-6">
    <label for="email">Email</label><br>
    <textarea id="name" name="email" class="form-email" rows="1"></textarea>
   </div><div class="col-md-6">
    <label for="name">Name</label><br>
    <textarea id="email" name="user_name" class="form-email" rows="1"></textarea><br>
    </div>
   </div>
    <input type="submit" value="Submit" class="btnsubmit">
    
   </form>
   
        </div>
        @endforeach
        <script type="application/javascript">
         document.getElementById("min").addEventListener("click", function() {
        var q= document.getElementById("quantity").value;
        if(q>1)
        q--;
        document.getElementById("quantity").value=q;
     
     });
     document.getElementById("add").addEventListener("click", function() {
         var q= document.getElementById("quantity").value;
        
        q++;
        document.getElementById("quantity").value=q;
     });
  
            </script>
   
 @endsection
 

 
   




