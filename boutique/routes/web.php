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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/accueil', function () {
    return view('accueil');
});

Route::get('/catalogue', function () {
    return view('catalogue');
});

Route::get('/produit', function () {
    return view('produit');
});

Route::get('/panier', function () {
    return view('panier');
});
