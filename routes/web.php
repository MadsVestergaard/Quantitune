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

Route::get('/songs', 'SongController@index');
    //get data from db

Route::get('/songs/{id}', 'SongController@show'); 
    // use $id variable to query the db for a record

Route::get('/radiopromotion', function () {
    return view('radiopromotion');
});