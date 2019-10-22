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

Route::view('/', 'welcome');
Route::view('/cart', 'cart');
Route::view('/playstation', 'playstation');
Route::view('/xbox', 'xbox');
Route::view('/nintendo', 'nintendo');
Route::view('/pc', 'pc');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/playstation', 'GameController@index'); 


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
