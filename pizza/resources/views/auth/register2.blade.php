@extends('layouts.layout')

@section('contents')
<br /><br /><br /><br />
<form class="login2-form" method="post" action="{{route('register2.save')}}">
        @csrf
    <h1>Registation</h1><br />
    @if(session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{Session::get('success')}}
    </div>
    @endif
    @if(Session::get('fail'))
    <div class="alert alert-danger" role="alert">
        {{Session::get('fail')}}
    </div>
    @endif

    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="name" value="{{old('name')}}" name="name" class="form-control" id="name" placeholder="Enter your username">
        <p style="color: red;">@error('name'){{ $message }}@enderror</p>
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" value="{{old('email')}}" name="email" class="form-control" id="email" placeholder="Enter your email">
        <p style="color: red;">@error('email'){{ $message }}@enderror</p>
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Password</label>
        <input type="password" value="{{old('passwords')}}" name="passwords" class="form-control" id="passwords" placeholder="Enter your password">
        <p style="color: red;">@error('passwords'){{ $errors->first('passwords') }}@enderror</p>
    </div>

    <div class="mb-3">
        <label for="c-password" class="form-label">Confirm Password</label>
        <input type="password" value="{{old('c-password')}}" name="c-password" class="form-control" id="c-password" placeholder="Enter your password">
        <p style="color: red;">@error('c-password'){{ $message }}@enderror</p>
    </div>


    <button type="submit" name="submit" class="btn btn-dark signinBtn">Register</button>
</form>

@endsection

