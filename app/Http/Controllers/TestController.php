<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Test;

class TestController extends Controller
{
    public function index(Request $request) {
        
        $testsongs = Test::all();
        //$songs = Song::orderBy('songName', 'desc')-> get();
        //$testsongs = Test::where('artist', 'one direction')-> get();
        //$songs = Song::latest();
        
        
        //echo dd($request->all());
        //return;


        return view('test.index', [
            'testsongs' => $testsongs,
        ]);
    }

}
