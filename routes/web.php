<?php

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
Route::patch('/cart/increase/{rowId}', 'CartController@increaseProductQuantity')
->name('cart.increaseProductQuantity');
// decreases product quantity
Route::patch('/cart/decrease/{rowId}', 'CartController@decreaseProductQuantity')
->name('cart.decreaseProductQuantity');
// redirects user to cart page once product is added to cart
Route::post('/cart', 'CartController@addProduct')->name('cart.addProduct');
// removes all cart products
Route::delete('/cart', 'CartController@empty')->name('cart.empty');
// removes a specific product item
Route::delete('/cart/{rowId}', 'CartController@removeSingleProduct')->name('cart.removeSingleProduct');

Route::post('/checkout', 'CheckoutController@store')->name('checkout.store');

// simply returns the pages for these views
Route::view('/', 'landingpage')->name('landingpage');
Route::view('/cart', 'cart')->name('cart');
Route::view('/checkout', 'checkout')->name('checkout')->middleware('auth');
Route::view('/guest-checkout', 'checkout')->name('guestCheckout'); 
Route::view('/confirmation', 'confirmation')->name('confirmation');

// login and register
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
