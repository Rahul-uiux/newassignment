@extends('master')
@section('content')
<h1 class="text-center">Add to cart product</h1>
<a href="order" class="btn btn-success m-5">Order Now</a>
<div class="container">
  @foreach($products as $item)  
      <img class="d-block w-100" src="{{$item->gallary}}" style="height:400px" alt="First slide">
      <div class="caption d-none d-md-block">
    <h5>{{$item->name}}</h5>
    <p>{{$item->description}}</p>
  </div>
  <a href="remove/{{$item->cart_id}}" class="btn btn-warning">Remove to Cart</a>
    @endforeach
  </div>
  <div class="py-5 text-center">{{$products->links()}}</div>
    @endsection()