@extends('layouts/layout')

@section('content')

<div class="main-card">
    <button class="btn btn-warning" id ="popBtn">PLACE MORE ORDER</button>
    @foreach($pizzas as $pizza)
    <div class="card cardd">
        <div class="card-body">
                <h5 class="card-title" >Customer: {{$pizza -> name}}</h5>
                <h6 class="card-subtitle mb-2 text-muted">Date: {{$pizza->created_at->timezone('asia/bangkok')}}</h6>
            <div class="card-text">
                <p>Base: {{$pizza -> base}}<br /> Type: {{$pizza -> type}}</p>
                
            </div>
        </div>
    </div>
    @endforeach
    
</div>


<div class="pop">
    <div class="pop-form" id="abc">
            <svg xmlns="http://www.w3.org/2000/svg" class="closeForm" width="30" height="30" fill="currentColor" class="bi bi-x-square" viewBox="0 0 16 16">
                <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                 <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
            </svg>
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
            <button class="btnPizza btn btn-primary" type="submit">Order Pizza</button>
            <a class="btn btn-primary" href="/" role="button">Back</a>
        </form>
        </div>


        @if(session()->has('errors'))
        <script>
        // if(event.target == x){
        document.querySelector('.pop').style.display="block";
        </script>
        @endif
</div>

@endsection