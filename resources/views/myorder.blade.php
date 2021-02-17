@extends('master')
@section('content')
<h1 class="text-center"> product Orders</h1>

<div class="container">
  @foreach($orders as $item)  
      <img class="d-block w-100" src="{{$item->gallary}}" style="height:400px" alt="First slide">
      <div class="caption d-none d-md-block">
    <h5>{{$item->name}}</h5>
    <h5>Delivary status : {{$item->status}}</h5>
    <h5>payment_method : {{$item->payment_method}}</h5>
    <h5>payment_status : {{$item->payment_status}}</h5>
    <h5>address :{{$item->address}}</h5>
    <p>{{$item->description}}</p>
  </div>
    @endforeach
  </div>
    @endsection()