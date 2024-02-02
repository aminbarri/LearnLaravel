@extends('layout')
@section('title','Computres')

@section('content')
<div class="container mt-5">
    @foreach ($computres as $computer)
        
    <div class="comp">
      <a href="{{route('computres.show',$computer->id)}}">{{$computer->name }}- {{$computer ['origin']}}- {{$computer ['price']}}$</a>
    </div>
  
  @endforeach
</div>
@endsection


