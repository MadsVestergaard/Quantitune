@extends('layouts.layout')

@section('content')
<div class="content"> 
    <div class="title m-b-md">
        <p> Dav {{ auth()->user()->name }} </p>

    </div>
</div>

@endsection