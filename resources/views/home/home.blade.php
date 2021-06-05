@extends('master')


@section('home')



<div class="conatiner custom-home">
  <div id="demo" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>

    <div class="carousel-inner">
      @foreach ($products as $item)
      <div class="carousel-item {{$item['id']==1?'active':''}}">
        <a href="product-detail/{{$item['id']}}">
          <img class="slider-img" src="{{$item['gallery']}}" >
            <div class="carousel-caption slider-text">
              <h3>{{$item['name']}}</h3>
              <p>{{$item['description']}}</p>
            </div> 
        </a>
      </div>
      @endforeach  
    </div>

      <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
  </div>

  
  <div class="trending-block">
    <h1 class="text-center">Trending Products</h1>
    <div class="carousel-inner">
      @foreach ($products as $item)
        <div class="trending-item">
          <a href="product-detail/{{$item['id']}}">
          <img class="trending-img" src="{{$item['gallery']}}" >
            <div class="">
              <h6>{{$item['name']}}</h6>
            </div> 
          </a>
        </div>
        @endforeach  
    </div>
  </div>      
</div>





@endSection


