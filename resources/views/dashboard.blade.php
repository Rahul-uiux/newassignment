@extends('master')
@section('content')
<h1 class="text-center text-info p-5"><span><a href="addproAdmin" class="btn btn-success">Add Product</a></span>  welcome to dashbord {{Session::get('admin')['name']}} <span><a href="adminlogout" class="btn btn-danger">Logout</a></span></h1>

<div class="container">
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Category</th>
      <th scope="col">Gallary</th>
      <th scope="col">Description</th>
      <th colspan="3" scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($products as $product)
    <tr>
      <th scope="row">1</th>
      <td>{{$product['name']}}</td>
      <td>{{$product['price']}}</td>
      <td>{{$product['category']}}</td>
      <td>{{$product['gallary']}}</td>
      <td>{{$product['description']}}</td> 
      <td><a href="statusAdmin/{{$product['id']}}" class="btn btn-warning">Status</a></td> 
      <td><a href="editAdmin/{{$product['id']}}" class="btn btn-success">Edit</a></td>
      <td><a href="deleteAdmin/{{$product['id']}}" class="btn btn-danger">Delete</a></td>
    </tr>
@endforeach
  </tbody>
</table>
</div>
@endsection()