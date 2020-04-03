<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
// use App\Genre;
// use App\Cart;

class HomeController extends Controller
{

    public function index()
    {
        $catalog = Product::all();
        $newreleases = $catalog->sortByDesc('created_at');

        return view('home', ['catalog' => $catalog,'newreleases' => $newreleases]);
    }

    public function store(Request $request)
    {
        //
    }

    public function update(Request $request, $id)
    {
        // $cart = Cart::updateOrCreate()

        // $cart = Cart::findOrFail($id);
        // $products = $cart->products;
        // foreach($products as $product)
        // {
        //     $new_quantity = $request['quantity'][$product->id];
        //     $cart->products()->updateExistingPivot($product->id, ['quantity' => $new_quantity]);
        //     $product->pivot->quantity = $new_quantity;
        // }
    }

}
