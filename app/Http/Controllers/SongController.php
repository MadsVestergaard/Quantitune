<?php

namespace App\Http\Controllers;

class SongController extends Controller

{
    public function index() {
        $songs = [
            ['duration' => '300', 'artist' => 'ACDC'],
            ['duration' => '298', 'artist' => 'Deep Purple'],
            ['duration' => '180', 'artist' => 'Queen'],
            ['duration' => '148', 'artist' => 'Kidd']
        ];
   
        return view('songs', [
            'songs' => $songs,
        ]);
    }

    public function show($id) {
        return view('details', ['id' => $id]);
    }
}