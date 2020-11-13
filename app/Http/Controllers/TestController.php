<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Test;

class TestController extends Controller
{
    public function index(Request $request) {
        
        //$testsongs = Test::all();
        //$testsongs = Song::orderBy('songName', 'desc')-> get();
        $testsongs = Test::where('artist', 'The Minds Of 99')-> get();
        //$testsongs = Song::latest();
        
        return view('test.index', [
            'testsongs' => $testsongs,
            ]);
            
    }

    public function test() {
        $some_data = ["pass", "data", "view", "to", "controller"];

        return view('test.index', compact('some_data'));
    }

    public function getData(Request $request) {
        return $request->all();
    }

}
