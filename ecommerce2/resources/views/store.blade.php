@extends('layouts.store')
@section('content')
<div class="container base_bg my-5">
<div class="row pt-3">
    <div class='col-md-2'>
        <button type="button" class="btn btn-outline-warning"><i class="fa fa-filter"></i>Filter</button>
    </div>
    <div class='col-md-3 text-white align-self-center'>
        Showing {{$offset}}-{{($offset-1)+count($products)}} of {{$count}} Results
    </div>
</div>
<div class=" row m-3">
  
    @if (count($products) > 0)
    @foreach ($products as $product)
   
    
    
    <div class="col-md-3 align-self-center" onclick="window.location.href = '{{ route('show.productsDetail', [$product->name] )}}'">
        <div class="card base_bg text-white"  >
            <img class="card-img-top" src= "/img/{{ $product->image }}" style="width: 80%" alt="..."  >
           
            <div class="card-body" >
                <p style="color:gray;font-size:10pt;line-height:5pt" >{{$product->type_name}}</p>
                <p style="font-size:12pt;line-height:5pt">{{$product->name}}</p>
                <div style="padding-bottom:5pt">
                   <span class="fa fa-star {{$product->rating >0 ? 'checked':''}}"></span>
                   <span class="fa fa-star {{$product->rating >1? 'checked':''}}"></span>
                   <span class="fa fa-star {{$product->rating >2? 'checked':''}}"></span>
                   <span class="fa fa-star {{$product->rating >3? 'checked':''}}"></span>
                   <span class="fa fa-star {{$product->rating >4? 'checked':''}}"></span>
                </div>
              <p style="font-weight:bold; color:gray" >{{$product->price}}.00$</p>
            </div>
          </div>
    </div>
    
    
    @endforeach
    <div class="row my-3">
        <div class="col">
        
            <a  class="btn btn-outline-warning"  {{Request::is('store')?'active':''}} href="{{ url('store') }}" >1</a>
        <a  class="btn btn-outline-warning"  {{Request::is('store-page2')?'active':''}} href="{{ url('store-page2') }}" >2</a>
        
   
</div>
        
    </div>
    @endif

    
</div>
</div>

@endsection

