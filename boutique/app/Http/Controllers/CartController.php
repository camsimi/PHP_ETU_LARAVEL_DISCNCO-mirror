<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;

class CartController extends Controller
{

    public function index()
    {
        $carts = Cart::all();

        return view(
            'cart.carts', ['carts' => $carts]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function edit($id)
    {
        $cart = Cart::findOrFail($id);
        return view('cart.edit-cart', ['cart' => Cart::find($id), 'products' => $cart->products]);
    }

    public function update(Request $request, $id) // UPDATE EXISTING CART //
    {
        // dd(request()->all());
        $cart = Cart::findOrFail($id);
        $products = $cart->products;
        if($request->action == 'edit') {
            foreach($products as $product)
                {
                    $new_quantity = $request['quantity'][$product->id];
                    $cart->products()->updateExistingPivot($product->id, ['quantity' => $new_quantity]);
                    $product->pivot->quantity = $new_quantity;
                }
        } else {
            $cart->products()->detach($request->delete);
            $cart->refresh();
            $products = $cart->products;
        }
            return view('cart.edit-cart', ['cart' => $cart, 'products' => $products]);
    }

    public function destroy($id)
    {
        //
    }
}
