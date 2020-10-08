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

            <div class="content">
                <div class="title m-b-md">
                    Big Test
                
                </div>

                @foreach($testsongs as $test)
                
                    @php
                        $total = isset($total) ? $total + $test->Played_Duration : 0;
                    @endphp    
                    <div>
                        {{ $test->Artist}}  - {{ $test->Title}} - {{ $test->Played_Duration}}
                    </div>

                @endforeach

                <div class="calculations">

                <h1>
                    @php
                        $radio_rate = 48;
                        $math = 60;
                        $total_earned = isset($total_earned) ? $total/$math*$radio_rate: 0;
                    @endphp

                    Your songs have been played for a total of:  {{ $total }} seconds.

                    <br>
                    You've earned {{ $total/60*48}} kroner.
                </h1>

                </div>

                <div class="links">
                    <a href="{{url('/')}}">Home!!!</a>
                </div>  
            </div>
        </div>
@endsection
