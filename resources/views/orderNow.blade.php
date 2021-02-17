@extends('master')
@section('content')

<div class="container">
<h1 class="text-center p-5">Order to cart product</h1>
<table class="table">
 
  <tbody>
    <tr>
      
      <td>Amount</td>
      <td>Rs {{$total}}</td>
      
    </tr>
    <tr>
      <td>Tax</td>
      <td>Rs 0 </td> 
    </tr>
    <tr>
      <td>Delivery</td>
      <td>Rs 10 </td> 
    </tr>
    <tr>
      <td>Total Amount</td>
      <td>Rs {{$total+10}}</td> 
      
    </tr>
  </tbody>
</table>
<div class="m-5">

<form action="orderplace" method="post">
@csrf
  <div class="mb-3 form-group">
    <textarea name="address" class="form-control" placeholder="enter your address" > </textarea>
  </div>
  <div class="mb-3  form-group">
 <label class="form-label">payment method</label><br/>
  <input type="radio" value="online payment" name="payment"> <span>online payment</span>
  <input type="radio" value="EMI payment" name="payment"> <span>EMI payment</span>
  <input type="radio" value="payment on delivery" name="payment"> <span>payment on delivery</span>
  </div>
  
  <button type="submit" class="btn btn-primary">Place Your Orders</button>
</form>
</div>

  </div>
  @endsection