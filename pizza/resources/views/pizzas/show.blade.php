@extends('layouts/layout')

@section('content')
    <p>Order For {{$pizzas -> name??'No one'}}</p>
    <a href="../pizzas">< -- BACK</a>
@endsection