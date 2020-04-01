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
        $catalog_price = $catalog->sortBy('price');

        return view('products.catalog', ['catalog' => $catalog, 'catalog_price' => $catalog_price]);
    }

    public function create()
    {
        return view('products.add-product');
    }

    public function store(Request $request)
    {
        $product = new Product;
        $product->name = $request->name;
        $product->artist = $request->artist;
        $product->price = $request->price;

        $product->save();

        return view('products.confirm-save-product', ['product' => $product]);
    }

    public function show($id)
    {
        return view('products.product' , ['product' => Product::findOrFail($id)]);
    }

    public function edit($id)
    {
        return view('products.edit-product', ['product' => Product::findOrFail($id)]);
    }

    public function update(Request $request, $id)
    {

        $product = Product::find($id);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->save();

        return view('products.confirm-edit-product', ['product' => Product::findOrFail($id)]);
    }


    public function destroy($id)
    {
        Product::destroy($id);

        return view('products.confirm-delete-product');
    }

    public function index_home()
    {
        $catalog = Product::all()->take(12);
        $newreleases = Product::orderBy('created_at', 'DESC')->get()->take(10);
        return view('home', ['catalog' => $catalog,'newreleases' => $newreleases]);
    }

    public function index_manage()
    {
        $catalog = Product::all();
        return view('products.manage-articles', ['catalog' => $catalog]);
    }
}
