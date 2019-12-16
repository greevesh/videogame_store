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

// connects to the controllers for each platform to enable the retrieval of the games for each category
Route::get('/playstation', 'PlaystationController@index')->name('playstation'); 
Route::get('/xbox', 'XboxController@index')->name('xbox');
Route::get('/nintendo', 'NintendoController@index')->name('nintendo');
Route::get('/pc', 'PCController@index')->name('pc');
Route::get('/pre-order', 'PreOrderController@index')->name('pre-order');

// provides the pages for each individual product
Route::get('/playstation/{game}', 'PlaystationController@show'); 
Route::get('/xbox/{game}', 'XboxController@show');
Route::get('/nintendo/{game}', 'NintendoController@show');
Route::get('/pc/{game}', 'PCController@show');

// CART ROUTES
// updates product quantity
Route::patch('/cart/increase/{rowId}', 'CartController@update')->name('cart.update');
// decreases product quantity
Route::patch('/cart/decrease/{rowId}', 'CartController@decreaseQuantity')->name('cart.decreaseQuantity');
// redirects user to cart page once product is added to cart
Route::post('/cart', 'CartController@store')->name('cart.store');
// removes all cart products
Route::delete('/cart', 'CartController@destroy')->name('cart.destroy');
// removes a specific product item
Route::delete('/cart/{rowId}', 'CartController@removeSingleProduct')->name('cart.removeSingleProduct');
// add shipping price to total price
Route::get('/cart', 'CartController@addShippingToTotal')->name('cart.addShippingToTotal');

Route::post('checkout', 'CheckoutController@store')->name('checkout.store');

// simply returns the pages for these views
Route::view('/', 'landingpage')->name('landingpage');
Route::view('/cart', 'cart')->name('cart');
Route::view('/checkout', 'checkout')->name('checkout');
Route::view('/confirmation', 'confirmation')->name('confirmation');

// login and register
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
