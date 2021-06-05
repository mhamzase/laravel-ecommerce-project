@extends('master')


@section('myorders')


<div class="conatiner cartlist-page">
  <div class="trending-block">
    <div class="carousel-inner">
      <h3>My Orders List</h3>
      <hr/>
      @foreach ($myorders as $item)
        <div class="row searched-item cart-list-divider">
          <div class="col-sm-3">
            
              <img class="trending-img" src="{{$item->gallery}}" >
                
              
          </div>

          <div class="col-sm-3">
           
                <div class="">
                  <h4>{{$item->name}}</h4>
                  <h6><b>Order Status : </b>{{$item->status}}</h6>
                  <h6><b>Payment Method : </b>{{$item->payment_method}}</h6>
                  <h6><b>Payment Status : </b>{{$item->payment_status}}</h6>
                  <h6><b>Price : </b>{{$item->price}}</h6>
                  <h6><b>Delivery Address : </b>{{$item->shipping_address}}</h6>
                
                  
                </div> 

          </div>

        </div>
        @endforeach  

    </div>
  </div>      
</div>





@endSection


