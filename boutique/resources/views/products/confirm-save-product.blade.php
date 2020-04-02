@extends('../layouts.app')

@section('page_title', 'Confirmation ajout du produit')

@section('css')
    <link href="{{ asset('css/style_products.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div>
        <h4>Votre produit a bien été ajouté au catalogue!</h4>
        <p>Nom: <strong>{{ $product->name }} </strong></p>
        <p>Prix: <strong>{{ $product->price }} </strong> </p>
        <img src=" {{ $product->image }}" alt="">
    </div>

@endsection
