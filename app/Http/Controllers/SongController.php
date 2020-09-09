<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Song;

class SongController extends Controller
{
    public function index() {
        $songs = Song::all()
   
        return view('songs', [
            'songs' => $songs,
        ]);
    }

    public function show($id) {
        return view('details', ['id' => $id]);
    }
}



    
