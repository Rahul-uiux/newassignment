@extends('master')
@section('content')
<div class="container style_page">
<div class="row">
<div class="col-4 mx-auto">
<form action="register" method="POST">
@csrf
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">User Name</label>
    <input type="text" name="name" class="form-control" placeholder="User Name">   
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="User email">   
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="User password">
  </div>
  
  <button type="submit" class="btn btn-primary">Register</button>
</form>
</div>
</div>
</div>
    @endsection()