<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

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

    public function raw_catalog()
    {
        $products_raw = DB::select('select * from products');

        return view ('test', ['products' => $products_raw]);
    }

    public function raw_product()
    {
        $product_raw = DB::select('select * from products where id=?', [1]);

        return view ('products/1', ['product' => $product_raw]);
    }
}
