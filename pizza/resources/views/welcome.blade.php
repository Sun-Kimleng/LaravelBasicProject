@extends('layouts/layout')

@section('content')
<div class="front-page">
    <img class="logo" src="https://cdn.pixabay.com/photo/2013/07/13/13/18/pizza-160780_1280.png">
    <a href="pizzas/create" class="orderPizza-link"><button type="button" class="btn btn-danger">Order Pizza</button></a> 

    @if(session()->has('msg'))
    <div class="alert alert-success text-center"  role="alert">
    <span class="cen">{{session('msg')}}</span>
    @endif
</div>
    
@endsection