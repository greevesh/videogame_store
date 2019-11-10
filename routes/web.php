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

// connecting to model
use App\Game;

// retrieving games from db
Route::get('/playstation', function() {
    $playstationGames = Game::find([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12]);

    return view('products.playstation')->with([
        'playstationGames' => $playstationGames
    ]);
})->name('playstation');

Route::get('/xbox', function() {
    $xboxGames = Game::find([13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24]);

    return view('products.xbox')->with([
        'xboxGames' => $xboxGames
    ]);
})->name('xbox');

Route::get('/nintendo', function() {
    $nintendoGames = Game::find([25, 26, 27, 28, 29, 30, 31, 32, 33, 35, 36]);

    return view('products.nintendo')->with([
        'nintendoGames' => $nintendoGames
    ]);
})->name('nintendo');

Route::get('/pc', function() {
    $pcGames = Game::find([37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48]);

    return view('products.pc')->with([
        'pcGames' => $pcGames
    ]);
})->name('pc');

Route::view('/', 'landingpage')->name('landingpage');
Route::view('/cart', 'cart')->name('cart');

// login and register
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
