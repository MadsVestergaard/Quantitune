<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Quantitune @yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="/css/main.css" rel="stylesheet">

    </head>
    <body>
    <div class="navbar">
        <ul>
            <li class="nav-item">
                <a class="nav-link" href="/songs"> Songs </>
            
            @if( auth()->check() )
                <li class="nav-item">
                    <a class="nav-link" href="#">Hi {{ auth()->user()->name }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/logout">Log Out</a>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="/login">Log In</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/register">Register</a>
                </li>
            @endif

        </ul>
        </div>
        
        @yield('content')
        

        <footer>
            Copyright 2020 Quantitune
        </footer>
    </body>
</html>