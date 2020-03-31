<?php

use App\Http\Controllers\ProductController;
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

Route::resource('products', 'ProductController');

// Route::get('/catalog', 'ProductController@index');
// Route::get('/products/create', 'ProductController@create');
// Route::post('products', 'ProductController@store');
// Route::get('/products/{id}', 'ProductController@show');

Route::get('/cart', function () {
    return view('cart.cart');
});

