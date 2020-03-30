<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    public function index()
    {
        $catalog = \App\Product::orderBy('name', 'ASC')->get();

        return view('products.catalog', ['catalog' => $catalog]);
    }

    public function index_prix()
    {
        $catalog = \App\Product::orderBy('price', 'ASC')->get();

        return view('products.catalog', ['catalog' => $catalog]);
    }

    public function show($id)
    {
        $product = \App\Product::find($id);

        return view('products.product' , ['product' => $product]);
    }

    public function index_home()
    {
        $catalog = \App\Product::all()->take(12);
        $newreleases =\App\Product::orderBy('created_at', 'DESC')->get()->take(10);
        return view('home', compact('catalog'), compact('newreleases'));
    }

}
