@extends('layout')
@section('content')
    
<div class="container mt-5">
 <form method="post" action="{{ route('computres.update', ['computre' => $computres->id])}}">
    
        @csrf
        @method('PUT')
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" value="{{$computres->name }}" name='name' placeholder="Enter name" >
        @error('name')
            {{$message}}
        @enderror
      </div>
  
      <div class="form-group">
        <label for="price">Price:</label>
        <input type="text" class="form-control" name="price" value="{{$computres->price}}" placeholder="Enter the domain price" >
        @error('price')
            {{$message}}
        @enderror
      </div>
  
      <div class="form-group">
        <label for="originCountry">Origin Country:</label>
        <input type="text" class="form-control" name="origin"  value="{{$computres->origin}}" placeholder="Enter the origin country" >
        @error('origin')
            {{$message}}
        @enderror
      </div>
  
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
@endsection