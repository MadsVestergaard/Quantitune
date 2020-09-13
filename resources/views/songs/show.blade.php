@extends('layouts.layout')

@section('content')
<div class="wrapper song-details">
    <h1> Songs you are tracking {{ $song->songname }} </h1>
    <p class="artist"> Artist - {{ $song->artist}} </h1>
    <p class="station"> Radiostation - {{ $song->radiostation }}</p>
</div>

<a href="/songs" class="back"> Back To songs</a>
@endsection
