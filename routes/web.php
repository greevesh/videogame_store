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






Route::get('/playstation', 'PlaystationController@index')->name('playstation'); 
Route::get('/xbox', 'XboxController@index')->name('xbox');
Route::get('/nintendo', 'NintendoController@index')->name('nintendo');
Route::get('/pc', 'PCController@index')->name('pc');

Route::get('/playstation/{slug}', 'PlaystationController@show'); 

Route::view('/', 'landingpage')->name('landingpage');
Route::view('/cart', 'cart')->name('cart');

// login and register
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
