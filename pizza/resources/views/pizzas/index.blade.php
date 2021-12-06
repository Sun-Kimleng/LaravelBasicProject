@extends('layouts/layout')

@section('content')
    
@foreach($pizzas as $pizza)

    <h3>Customer name: {{$pizza -> name}}</h3>
    <p>Base: {{$pizza -> base}}</p>
    <p>Type: {{$pizza -> type}}</p>
    
@endforeach
@endsection