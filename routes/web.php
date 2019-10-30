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
Route::view('/example1', 'products/example1')->name('example1');
Route::view('/example2', 'products/example2')->name('example2');
Route::view('/example3', 'products/example3')->name('example3');
Route::view('/example4', 'products/example4')->name('example4');
Route::view('/cart', 'cart')->name('cart');

// login and register
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');