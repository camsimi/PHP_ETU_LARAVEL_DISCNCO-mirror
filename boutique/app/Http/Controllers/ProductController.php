<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Products;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use function GuzzleHttp\Promise\all;


class ProductController extends Controller {

//    Afficher tous les produits du catalogue
    public function index() {
//        $products = Products::get();
//        $products = Products::orderBy('price', 'asc')->get();
        
        $products = Products::orderBy('name', 'asc')->get();
        return view ('products.catalog', ['products' => $products]);
    }

//    Afficher un produit
    public function show($id) {
        $product = Products::where('id', $id)->get();

//        S'il l'id ne correspond à aucun produit, affiche le message d'erreur 404
        if(empty($product)) {
            abort(404);
        }
//        Sinon, affiche la vue product et retourne l'index 0 du tableau d'objet $product
        else {
            return view('products.product', ['product' => $product[0]]);
        }
    }
}
