<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Test;

class TestController extends Controller
{
    public function index() {
        
        //$tests = Test::all();
        //$songs = Song::orderBy('songName', 'desc')-> get();
        $testsongs = Test::where('artist', 'one direction')-> get();
        //$songs = Song::latest();
        return view('test.index', [
            'testsongs' => $testsongs,
        ]);

        echo dd($index->all());
        return;
}
}
