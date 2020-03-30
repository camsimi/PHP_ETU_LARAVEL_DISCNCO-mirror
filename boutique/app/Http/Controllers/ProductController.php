<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


class ProductController extends Controller {

//    Afficher tous les produits du catalogue
    public function index() {
        $products = DB::select('select * from products');
        return view ('products.catalog', ['products' => $products]);
    }

//    Afficher un produit
    public function show($id) {
        $product = DB::select('select * from products WHERE id = :id', ['id' => $id]);
//        dd($product);
        return view('products.product', ['product' => $product[0]]);
    }
}
