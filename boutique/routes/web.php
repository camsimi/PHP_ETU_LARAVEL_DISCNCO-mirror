<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', 'ProductController@index_home');

Route::get('/catalog', function () {
    return view('products.catalog');
});

Route::get('/product', function () {
    return view('products.product');
});

Route::get('/cart', function () {
    return view('cart.cart');
});

Route::get('/test', 'ProductController@raw_catalog');

Route::get('products/1', 'ProductController@raw_product');

