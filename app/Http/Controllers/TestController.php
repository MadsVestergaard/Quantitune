<?php

namespace App\Http\Controllers;

use App\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index() {
        
        //$tests = Test::all();
        //$songs = Song::orderBy('songName', 'desc')-> get();
        $songs = Song::where('artist', 'one direction')-> get();
        //$songs = Song::latest();
        return view('test.index', [
            'songs' => $songs,
        ]);
}
