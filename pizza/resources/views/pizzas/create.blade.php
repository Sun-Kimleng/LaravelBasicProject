@extends('layouts/layout')


@section('contents')
<div class="create_pizza">
    <form action="/pizzas" method="POST">
        @csrf
        <br />
        <h1>Create Pizza</h1> <br />
        <!-- client name -->
        <input class="form-control" name ="name" type="text" placeholder="Enter your name" aria-label="default input example"><br />
        @error('name')
            <p class="form-errors">{{$errors->first('name')}}<p>
        @enderror
        <!-- pizza type -->
        <select class="form-select" name ="type" id="inputGroupSelect01 type"><br />
            <option selected>Pizza type ...</option>
            <option value="margaritta">Margaritta</option>
            <option value="hawaiann">Hawaiann</option>
            <option value="veg supreme">Veg Supreme</option>
            <option value="volcano">Volcano</option>
        </select>
        
        <br />

        <!-- pizza base -->
        <select class="form-select" name ="base" id="inputGroupSelect01 base">
            <option selected>Pizza base...</option>
            <option value="Cheesy Crust">Cheesy Crust</option>
            <option value="garlic crust">Garlic Crust</option>
            <option value="thick">Thick</option>
        </select>
        <br />
        <!-- check box to add more addition toppings -->
        <p><b>Extra toppings</b></p>
        <input class="form-check-input" name="toppings[]" type="checkbox" value="mushrooms" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">Mushrooms</label>
        <br /> <br />
        <input class="form-check-input" name="toppings[]" type="checkbox" value="peppers" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">Peppers</label>
        <br /> <br />
        <input class="form-check-input" name="toppings[]" type="checkbox" value="garlics" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">Garlics</label>
        <br /> <br />
        <input class="form-check-input" name="toppings[]" type="checkbox" value="olives" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">Olives</label>
        <br /> <br />
        <button class="btn btn-primary" type="submit">Order Pizza</button>
        <a class="btn btn-primary" href="/" role="button">Back</a>
    </form>
    
    
    
</div>
    @endsection