@extends('layout')
@section('title','Computres')

@section('content')
<div class="container mt-5">
  <h2 class="mb-4">Domain Sale Information</h2>

  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Name</h5>
      <p class="card-text" id="display-name">{{$computres->name }}</p>
    </div>
  </div>

  <div class="card mt-3">
    <div class="card-body">
      <h5 class="card-title">Price</h5>
      <p class="card-text" id="display-price">{{$computres ['price']}}</p>
    </div>
  </div>

  <div class="card mt-3">
    <div class="card-body">
      <h5 class="card-title">Origin Country</h5>
      <p class="card-text" id="display-originCountry">{{$computres ['origin']}}</p>
    </div>
  </div>
  <a href="{{route('computres.edit',$computres->id)}}">edit</a>
</div>
@endsection


