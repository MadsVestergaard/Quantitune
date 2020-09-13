<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Song;

class SongController extends Controller
{
    public function index() {
        
        $songs = Song::all();
        //$songs = Song::orderBy('songName', 'desc')-> get();
        //$songs = Song::where('radiostation', 'p4')-> get();
        //$songs = Song::latest();
        return view('songs.index', [
            'songs' => $songs,
        ]);
    }

    public function show($id) {

        $song = Song::findOrfail($id);

        return view('songs.show', ['song' => $song]);
    }

    public function create() {
        return view('songs.create');
    }

    public function store(Request $request) {
       
        //used for debugging

        //echo dd($request->all()); 
        //return;


        $song = new Song();
            
        $song->songname = $request->songname;
        $song->artist = $request->artist;
        $song->radiostation = $request->radiostation;
        $song->songlength = $request->songlength;

        $song->save();

        return redirect('/songs');
    }

    public function destroy($id) {
        $song = Song::findOrFail($id);
        $song->delete();

        return redirect('/songs');
    }

    
}



    
