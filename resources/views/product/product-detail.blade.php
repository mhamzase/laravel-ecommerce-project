@extends('master')



@section('product-detail')


<div class="container pt-5" style="min-height:505px;">
      
      <div class="row">
            <div class="col-sm-6">
                  <img style="height:300px" class="detail-img" src="{{$product['gallery']}}">
            </div>
            <div class="col-sm-6">
                  <a href="/home" class="btn btn-secondary">Go Back</a>
                  <h1>Name : {{$product['name']}}</h1>     
                  <h3>Price : {{$product['price']}}</h3>     
                  <h5>Category : {{$product['category']}}</h5>     
                  <h5>Description : {{$product['description']}}</h5> 
                  <br/>
                  <form action="/add-to-cart" method="POST" class="float-left mr-4">
                        <input type="hidden" name="product_id" value="{{$product['id']}}">
                        @csrf
                        <button type="submit" name="addToCart" class="btn btn-success">Add to cart</button> 
                  </form>   
                  <form action="/buynow" method="POST" >
                        <input type="hidden" name="product_id" value="{{$product['id']}}">
                        @csrf
                        <button type="submit"  class="btn btn-primary">Buy Now</button>   
                  </form>
                   
            </div>
      </div>
</div>


@endSection