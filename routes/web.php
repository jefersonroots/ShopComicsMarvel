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

Route::get('/apiController', 'App\Http\Controllers\apiController@index')->name('comics');

Route::get('/comics', function(){
    return view('comics');
});
Route::get('/index', 'App\Http\Controllers\apiController@index')->name('index')->where('offset', '[0-9]+');
