<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Test;

class TestController extends Controller
{
    public function index(Request $request) {
        
        //$testsongs = Test::all();
        //$testsongs = Song::orderBy('songName', 'desc')-> get();
        $testsongs = Test::where('artist', 'Lana Del Rey')-> get();
        //$testsongs = Song::latest();
        
        return view('test.index', [
            'testsongs' => $testsongs,
            ]);
            
    }

}
