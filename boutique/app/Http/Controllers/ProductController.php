<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Products;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use function GuzzleHttp\Promise\all;
Use Illuminate\Http\Request;


class ProductController extends Controller
{

//    Afficher tous les produits du catalogue
    public function index()
    {
//        $products = Products::get();
//        $products = Products::orderBy('price', 'asc')->get();

        $products = Products::orderBy('name', 'asc')->get();
        return view('products.catalog', ['products' => $products]);
    }

//    Afficher un produit
    public function show($id)
    {
        $product = Products::where('id', $id)->firstOrFail();

//        Sinon, affiche la vue product et retourne l'index 0 du tableau d'objet $product
        return view('products.product', ['product' => $product]);
    }

//    Formulaire de soumission d'un nouveau produit
    public function create()
    {
        return view('products.add-product');
    }

//    Sauvegarder en BDD un nouveau produit
    public function store(Request $request) {
        $request->validate(['name' => 'required', 'price' => 'required']);
        $product = new Products;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->image = $request->price;
        $product->save();

//        Products::create($request->all());
        return view('products.confirm-save-product', ['product' => $product]);
    }

//    Afficher le formulaire de mise à jour d'un produit
    public function edit($id) {
        $product = Products::where('id', $id)->firstOrFail();
        return view('products.edit-product', ['product' => $product]);
    }

    public function update(Request $request, $id) {
        $request->validate(['name' => 'required', 'price' => 'required']);
        $product = Products::find($id);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->save();

        return redirect('/products');
    }

    public function destroy($id) {
        Products::find($id)->delete();
        return redirect('/products');
    }
}
