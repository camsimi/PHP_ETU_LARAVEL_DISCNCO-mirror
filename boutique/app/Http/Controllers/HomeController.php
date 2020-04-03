<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
// use App\Genre;
use App\Cart;
use Carbon\Traits\Timestamp;
use Illuminate\Support\Facades\Cookie;

class HomeController extends Controller
{

    public function index()
    {
        $catalog = Product::all();
        $newreleases = $catalog->sortByDesc('created_at');

        if(Cookie::get('cartId') == null) {
            $cart = Cart::create();
            $cartId = Cookie::queue('cartId', $cart->id, 200 );
        } else {
            $cartId = Cookie::get('cartId');
            $cart = Cart::find($cartId);
            if($cart == null)
            {
                $cart = Cart::create();
                Cookie::queue('cartId', $cart->id, 200);
            }
        }

        $cartId = Cookie::get('cartId');
        return view('home', ['catalog' => $catalog,'newreleases' => $newreleases, 'cartId' => $cartId]);
    }

    public function store(Request $request)
    {
        //
    }

    public function addToCart(Request $request, $id)
    {

        // dd($request->all());
        $cart = Cart::findOrFail($id);
        $product_id = $request->product_id;
        $cart->products()->attach($id, ['product_id'=>$product_id, 'quantity' => 1]);

        return redirect()->action('HomeController@index');
    }

}
