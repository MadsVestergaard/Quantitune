@extends('layouts.layout')

@section('content')

<div class="wrapper create-song">
    <h1> Create a New Song </h1>
    <form action="/songs" method="POST">
        @csrf
        <label for="songname"> Name of the song: </label>
        <input type ="text" id="songname" name="songname"> <br>
      
        <label for="artist"> Enter artist name: </label>
        <input type ="text" id="artist" name="artist"> <br>
       
        <label for="songlength"> Enter songlength in seconds: </label>
        <input type ="text" id="songlength" name="songlength"> <br>
        
        
        <label for ="radiostation"> Choose radiostation: </label>
        <select name="radiostation" id="radiostation">
            <option value="P3"> P3 </option>
            <option value="P4"> P4 </option>
        </select> <br>
        
        <input type="submit" value="Submit Song">
        </form>
</div>

@endsection