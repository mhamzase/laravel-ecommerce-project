@extends('master')


@section('search')

<div class="conatiner search-result-page">
  @if($products->isEmpty())
  <h3>No Result Found</h3>

  @else
    <h3>Result for {{$q}}</h3>

    <div class="trending-block">
      <div class="carousel-inner">
        @foreach ($products as $item)
          <div class="searched-item">
            <a href="product-detail/{{$item['id']}}">
            <img class="trending-img" src="{{$item['gallery']}}" >
              <div class="">
                <h4>{{$item['name']}}</h4>
                <h6>{{$item['description']}}</h6>
              </div> 
            </a>
          </div>
          @endforeach  
      </div>
    </div> 
  @endif
       
</div>





@endSection


