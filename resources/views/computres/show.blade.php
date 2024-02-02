@extends('layout')
@section('title','Computres')

@section('content')
<div class="container mt-5">
  <h2 class="mb-4">Pc Information</h2>

  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Name</h5>
      <p class="card-text" id="display-name">{{$computres->name }}</p>
    </div>
  </div>

  <div class="card mt-3">
    <div class="card-body">
      <h5 class="card-title">Origin Country</h5>
      <p class="card-text" id="display-originCountry">{{$computres ['origin']}}</p>
    </div>
  </div>

  <div class="card mt-3">
    <div class="card-body">
      <h5 class="card-title">Price</h5>
      <p class="card-text" id="display-price">{{$computres ['price']}}$</p>
    </div>
  </div>
<div class="sum_edit">
   <form action="{{route('computres.edit',$computres->id)}}" method="post">
    @csrf
    @method('GET')
   <button type="submit" class=" btn_tst btn btn-primary ">edit</button>
</form>
  
  <form action="{{route('computres.destroy',$computres->id)}}" method="post">
    @csrf
    @method('DELETE')
   <button type="submit" class="btn_tst btn btn-primary ">delete</button>
</form>
</div>
 
  
</div>
@endsection


