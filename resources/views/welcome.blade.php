        @extends('layouts.layout')

        @section('content')
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <head>
                <title>App Name - @yield('title')</title>

            </head>
            <div class="content">
                <div class="title m-b-md">
                    Quantitune
                </div>

                <div class="links">*
                    
                    <a href="{{url('/test')}}">TEST!!!</a>
                    <input  placeholder="text">Enter your Artist ID</input>  
                </div>
            </div>
        </div>   
        @endsection
