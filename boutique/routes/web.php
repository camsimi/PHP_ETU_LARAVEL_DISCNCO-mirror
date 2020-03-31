<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/cart', function () {
    return view('cart.cart');
});


Route::get('/products', 'ProductController@index');

Route::get('/product/{id}', 'ProductController@show');

Route::get('products/create', 'ProductController@create');

Route::post('products/', 'ProductController@store');

Route::get('products/{id}/edit', 'ProductController@edit');
