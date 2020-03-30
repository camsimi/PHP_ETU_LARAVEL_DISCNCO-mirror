<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    public function index()
    {
        $catalog = Product::orderBy('name', 'ASC')->get();

        return view('products.catalog', ['catalog' => $catalog]);
    }

    public function index_prix()
    {
        $catalog = Product::orderBy('price', 'ASC')->get();

        return view('products.catalog', ['catalog' => $catalog]);
    }

    public function show(Product $product)
    {
        
        return view('products.product' , ['product' => $product]);
    }

    public function index_home()
    {
        $catalog = Product::all()->take(12);
        $newreleases = Product::orderBy('created_at', 'DESC')->get()->take(10);
        return view('home', ['catalog' => $catalog,'newreleases' => $newreleases]);
    }

}
