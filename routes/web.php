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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('playstation', function () {
    return view('playstation');
});

Route::get('xbox', function () {
    return view('xbox');
});

Route::get('nintendo', function () {
    return view('nintendo');
});

Route::get('pc', function () {
    return view('pc');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
