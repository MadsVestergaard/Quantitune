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
     $user = [
         'type' => 'songwriter',
         'membership' => 'paying'
     ];

    return view('test', $user);

    Route::get('/radiopromotion', function () {
        return view('radiopromotion');
    });

});
