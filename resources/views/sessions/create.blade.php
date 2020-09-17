@extends('layouts.layout')
 
@section('content')
 
    <h2>Log In</h2>
    
    <form method="POST" action="/login">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}">
        </div>
 
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>

        </div>
 
        <div class="form-group">
            <button style="cursor:pointer" type="submit" class="btn btn-primary">Login</button>
        </div>

        @if($errors->any())
        <h4>{{$errors->first()}}</h4>
        @endif


    </form>
 
@endsection