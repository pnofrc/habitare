<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', 'App\Http\Controllers\PostsController@posts');

Route::get('/festival', 'App\Http\Controllers\PostsController@index');

// Route::get('/piadagram', 'App\Http\Controllers\PostsController@posts');

Route::post('/piadina', 'App\Http\Controllers\PostsController@postFromInterface');
Route::get('/crescione/{id}', 'App\Http\Controllers\PostsController@acceptPost');

// Route::get('/info', 'App\Http\Controllers\PostsController@info');

// Route::get('/programma', 'App\Http\Controllers\PostsController@program');

Route::get('/map', function () {return view('map');});

// Route::get('/call', function () {return view('call');});

// Route::get('/promo', function () {return view('promo');});

Route::get('/radio', function () {return view('radio');});

// Route::get('/laura', function () {return view('laura');});

// Route::get('/passeggiata', function () {return view('passeggiata');});