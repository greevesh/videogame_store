<?php

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

Route::view('/', 'landingpage');
// making use of named helpers in case we want to change the route url and not have to change every instance
Route::view('/playstation', 'products/playstation')->name('playstation');
Route::view('/xbox', 'products/xbox')->name('xbox');
Route::view('/nintendo', 'products/nintendo')->name('nintendo');
Route::view('/pc', 'products/pc')->name('pc');
Route::view('/cart', 'cart')->name('cart');

// login and register
Auth::routes();

Route::get('/Game', 'GameController@index')->name('game'); 

Route::get('/home', 'HomeController@index')->name('home');
