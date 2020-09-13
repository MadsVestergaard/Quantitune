@extends('layouts.layout')

@section('content')
<div class="wrapper song-details">
    <h1> Songs you are tracking {{ $song->songname }} </h1>
    <p class="artist"> Artist - {{ $song->artist}} </h1>
    <p class="station"> Radiostation - {{ $song->radiostation }}</p>

    <form action="/songs/{{ $song->id }}" method="POST">
        @csrf
        @method('DELETE')
        <button> Delete Song </button>
    </form>
</div>

<a href="{{url('/songs')}}" class="back"> Back To songs</a>
@endsection
