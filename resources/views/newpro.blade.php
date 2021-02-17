@extends('master')
@section('content')
<div class="container style_page">
<h2 class="text-center">Submit Product Details</h2>
<div class="row">
<div class="col-4 mx-auto">
<form action="allAdd" method="POST" enctype="multipart/form-data">
@csrf
<div class="mb-3">
    <label class="form-label">product name</label>
    <input type="text" name="name" class="form-control" placeholder="product name">   
  </div>
  <div class="mb-3">
    <label class="form-label">product price</label>
    <input type="number" name="price" class="form-control" placeholder="product name">   
  </div>
  <div class="mb-3">
    <label class="form-label">product category</label>
    <input type="text" name="category" class="form-control" placeholder="product category">   
  </div>
  <div class="mb-3">
    <label class="form-label">product description</label>
    <input type="text" name="description" class="form-control" placeholder="product description">   
  </div>
  <div class="mb-3">
    <label class="form-label">product iamge</label>
    <input type="file" name="gallary" class="form-control" placeholder="select product image">   
  </div>
  
  <button type="submit" class="btn btn-primary">Register</button>
</form>
</div>
</div>
</div>
    @endsection()