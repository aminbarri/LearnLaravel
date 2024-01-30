@extends('layout')
@section('content')
    
<div class="container mt-5">
    <form method="post" action="{{route('computres.store')}}">
        @csrf
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" name='name' placeholder="Enter name" required>
        @error('name')
            {{$message}}
        @enderror
      </div>
  
      <div class="form-group">
        <label for="price">Price:</label>
        <input type="text" class="form-control" name="price" placeholder="Enter the domain price" required>
        @error('price')
            {{$message}}
        @enderror
      </div>
  
      <div class="form-group">
        <label for="originCountry">Origin Country:</label>
        <input type="text" class="form-control" name="origin" placeholder="Enter the origin country" required>
        @error('origin')
            {{$message}}
        @enderror
      </div>
  
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
@endsection