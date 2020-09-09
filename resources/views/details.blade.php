@extends('layouts.layout')

@section('content')
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                    Test
                    <p> User {{$id}} </p>
                </div>

                <div class="links">
                    <a href="{{url('/')}}">Home!!!</a>

                </div>
            </div>
        </div>
@endsection
