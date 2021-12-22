@extends('layouts.layout')

@section('contents')
<br /><br /><br /><br />

<form class="login2-form" method="post" action="{{route('login2.check')}}">
    @csrf
    <h1>Login</h1><br />
    
    @if(Session::get('fail'))
    <div class="alert alert-danger" role="alert">
        {{Session::get('fail')}}
    </div>
    @endif

    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" class="form-control" id="email" placeholder="Enter your name">
        <p style="color: red;">@error('email'){{ $message }}@enderror</p>
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Password</label>
        <input type="password" name="passwords" class="form-control" id="passwords" placeholder="Enter your password">
        <p style="color: red;">@error('passwords'){{ $message }}@enderror</p>
    </div>

    <button type="submit" name="submit" class="btn btn-dark signinBtn">Sign in</button>
</form>

@endsection

