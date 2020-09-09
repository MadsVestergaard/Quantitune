<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    //get data from db

     $songs = [
         ['duration' => '300', 'artist' => 'ACDC'],
         ['duration' => '298', 'artist' => 'Deep Purple'],
         ['duration' => '180', 'artist' => 'Queen'],
         ['duration' => '148', 'artist' => 'Kidd']
     ];

     return view('songs', [
         'songs' => $songs,
     ]);
});

Route::get('/radiopromotion', function () {
    return view('radiopromotion');
});

Route::get('/test/{id}', function ($id) {
    // use $id variable to query the db for a record
    return view('details', ['id' => $id]);
});