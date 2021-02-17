<?php 
use App\Http\Controllers\ProductController;
$total= 0;
if(Session::has('user'))
{
  $total= ProductController::cartItem();
}
else{
  return redirect('/');
}
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="/">Ecom Shop</a>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="myorder">orders</a> 
        </li>
       
      </ul>
      <form action="/search" class="d-flex">
        <input class="form-control me-2" name="query" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      
      <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
        @if(Session::has('user'))
        <li class="nav-item">
          <a class="nav-link" href="/">Welcome {{Session::get('user')['name']}}</a>
        </li> 
        <li class="nav-item">
         <a class="nav-link" href="cartList">Cart({{$total}})</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout">Logout</a>
        </li>  
        @else
        <li class="nav-item">
          <a class="nav-link" href="register">register</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="login">Login</a>
        </li>
        @endif
      </ul>
    </div>
  </div>
</nav>