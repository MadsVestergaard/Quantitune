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

Route::get('/songs/create', 'SongController@create');

Route::post('/songs', 'SongController@store');

Route::get('/songs/{id}', 'SongController@show'); 

Route::delete('/songs/{id}', 'SongController@destroy');

Route::get('/radiopromotion', function () {
    return view('radiopromotion');
});

Route::get('/profile', function () {
    return view('profile');
});


Route::get('/register', 'RegistrationController@create');
Route::post('register', 'RegistrationController@store');
 
Route::get('/login', 'SessionsController@create');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');

Route::get('/test'), 'TestController@index');

