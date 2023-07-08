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


Route::get('/', 'App\Http\Controllers\PostsController@index');

Route::get('/bartolacciogram', 'App\Http\Controllers\PostsController@posts');


Route::get('/info', 'App\Http\Controllers\PostsController@info');

Route::get('/programma', 'App\Http\Controllers\PostsController@program');

Route::get('/map', function () {return view('map');});

Route::get('/call', function () {return view('call');});

// Route::post('/posting', 'App\Http\Controllers\PostsController@postFromInterface');
Route::post('/pippo', 'App\Http\Controllers\PostsController@postFromInterface');