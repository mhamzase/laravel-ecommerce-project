@extends('master')


@section('cartlist')

<div class="conatiner cartlist-page">
  <div class="trending-block">
    <div class="carousel-inner">
      <h3>Cart Items</h3>
      <a class="btn btn-primary mb-3 mt-3" href="/ordernow">Order Now</a>
      <hr/>
      @foreach ($cartItems as $item)
        <div class="row searched-item cart-list-divider">
          <div class="col-sm-3">
            
              <img class="trending-img" src="{{$item->gallery}}" >
                
              
          </div>

          <div class="col-sm-3">
           
                <div class="">
                  <h4>{{$item->name}}</h4>
                  <h6>{{$item->description}}</h6>
                </div> 

          </div>

          <div class="col-sm-3">
              <a href="/remove-cart-item/{{$item->cart_id}}" class="btn btn-warning">Remove from cart</a>
          </div>
        </div>
        @endforeach  
        <a class="btn btn-primary" href="/ordernow">Order Now</a>
    </div>
  </div>      
</div>





@endSection


