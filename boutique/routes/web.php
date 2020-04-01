<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/cart', function () {
    return view('cart.cart');
});

Route::get('/products', 'ProductController@index');

Route::get('product/create', 'ProductController@create');

Route::get('/product/{id}', 'ProductController@show');

Route::post('product/', 'ProductController@store');

Route::get('product/{id}/edit', 'ProductController@edit');

Route::put('product/{id}', 'ProductController@update');

Route::delete('product/{id}', 'ProductController@destroy');
