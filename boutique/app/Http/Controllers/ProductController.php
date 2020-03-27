<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    // public function index()
    // {
    //     $catalog = \App\Product::all();

    //     return view('product.catalog', compact('catalog'));
    // }

    public function index_home()
    {
        $catalog = \App\Product::all()->take(12);
        $newreleases =\App\Product::orderBy('created_at', 'DESC')->get()->take(10);
        return view('home', compact('catalog'), compact('newreleases'));
    }
}
