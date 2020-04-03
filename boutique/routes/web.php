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

//HOME//
Route::get('/', 'HomeController@index');
Route::post('/', 'HomeController@update');


//PRODUCTS//
Route::get('/products/manage', 'ProductController@manage');
Route::resource('products', 'ProductController');

//CART//
Route::get('/carts', 'CartController@index');
Route::get('/carts/{id}', 'CartController@edit');
Route::patch('/carts/{id}', 'CartController@update');

//TEST//
Route::get('/test', 'ClientController@index');


