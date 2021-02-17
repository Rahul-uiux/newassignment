@extends('master')
@section('content')


<h1>Searching  products</h1>
<div class="container">
  @foreach($products as $item)
    <div class="item  {{$item['id']==1?'active':''}}">
    <a href="detail/{{$item['id']}}">
      <img class="d-block w-100" src="{{$item['gallary']}}" style="height:400px" alt="First slide">
      <div class="caption d-none d-md-block">
    <h5>{{$item['name']}}</h5>
    <p>{{$item['description']}}</p>
  </div>
      </a>
    </div>
    @endforeach
  </div>
    @endsection()
