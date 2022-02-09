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


Route::get('/apiController', 'App\Http\Controllers\apiController@index');

Route::get('/comics',[App\Http\Controllers\apiController::class, 'comics'])->name('comics');
Route::get('/',[App\Http\Controllers\apiController::class, 'comics'])->name('comics');
// Route::get('/cart/{id}','App\Http\Controllers\apiController@addToCart')->name('addCart');
Route::get('/cart/{id}', "App\Http\Controllers\CartController@getId");


Auth::routes();

Route::get('/cart', function () {
    return view('cart');
});
