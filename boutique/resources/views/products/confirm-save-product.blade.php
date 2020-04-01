@extends('../layouts.app')

@section('page_title', 'Confirmation ajout du produit')

@section('css')
    <link href="{{ asset('css/style_products.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div>
        <p>Nom: {{ $product['name'] }}</p>
        <p>Prix: {{ $product['price'] }} </p>
        <img src=" {{ $product['image'] }}" alt="">
    </div>
    
@endsection
