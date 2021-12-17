@extends('layouts/layout')

@section('content')
    <h1 class="text-center" style="color: #f09846; font-size: 60px;">THIS IS YOUR ORDER</h1>
    <div class="wrapper pizza-detail text-center">
        <h3>Name</h3>
        <p>{{$pizza->name}}</p>
        <h3>Base</h3>
        <p>{{$pizza->base}}</p>
        <h3>Type</h3>
        <p>{{$pizza->type}}</p>
        <h3>Toppings</h3>
    @foreach($pizza->toppings as $toppings)
        <span>- {{$toppings}}</span>    
    @endforeach
        <h3>Order Date</h3>
        <p>{{$pizza->created_at}}</p>

        <form target="/pizzas/{{$pizza->id}}" method="post" style="margin-top: 30px">
            @csrf
            @method('delete')
            <button class="btn btn-warning">Complete order</button>
        </form>
    </div>
@endsection