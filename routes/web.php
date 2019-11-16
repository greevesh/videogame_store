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

<<<<<<< HEAD
Route::view('/', 'welcome');
Route::view('/cart', 'cart');
Route::view('/playstation', 'playstation');
Route::view('/xbox', 'xbox');
Route::view('/nintendo', 'nintendo');
Route::view('/pc', 'pc');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/playstation', 'GameController@index'); 
Route::get('playstation/{game}', 'GameController@show'); 
=======
// connects to the controller to enable the retrieval of the games for each category
Route::get('/playstation', 'PlaystationController@index')->name('playstation'); 
Route::get('/xbox', 'XboxController@index')->name('xbox');
Route::get('/nintendo', 'NintendoController@index')->name('nintendo');
Route::get('/pc', 'PCController@index')->name('pc');
Route::get('/pre-order', 'PreOrderController@index')->name('pre-order');

// provides the pages for each individual product
Route::get('/playstation/{slug}', 'PlaystationController@show'); 
Route::get('/xbox/{slug}', 'XboxController@show');
Route::get('/nintendo/{slug}', 'NintendoController@show');
Route::get('/pc/{slug}', 'PCController@show');

// simply returns the pages for these views
Route::view('/', 'landingpage')->name('landingpage');
Route::view('/cart', 'cart')->name('cart');

// login and register
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
>>>>>>> 1b6610b198eb303d8d38d9c5b6ce37af0fd7cae3
