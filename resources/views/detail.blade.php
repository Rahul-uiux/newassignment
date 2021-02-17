@extends('master')
@section('content')
<div class="container">
<div class="row">
<div class="col-6">
<img src="{{$product['gallary']}}" style="height:400px" alt="image">
</div>
<div class="col-6">
<dutton class="btn btn-success"><a class="text-light" href="/">Go Back</a></dutton>
<h3>Name: {{$product['name']}}</h3>
<h3>Price: {{$product['price']}}</h3>
<h3>Category: {{$product['category']}}</h3>
<h3>Description: {{$product['description']}}</h3>
<form action="/add_to_cart" method="POSt">
<input type="hidden" name="product_id" value="{{$product['id']}}">
@csrf
<button class="btn btn-info">Add To Cart</button>
</form>
<br>
<dutton class="btn btn-success"><a class="text-light" href="/">Buy Now</a></dutton>
</div>
</div>
</div>
    @endsection()