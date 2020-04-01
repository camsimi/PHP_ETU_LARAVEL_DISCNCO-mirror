@extends('../layouts.app')

@section('page_title', 'Confirmation ajout du produit')

@section('css')
    <link href="{{ asset('css/style_products.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div>
        <p>Nom: <strong>{{ $request['name'] }} </strong></p>
        <p>Prix: <strong>{{ $request['price'] }} </strong> </p>
        <img src=" {{ $request['image'] }}" alt="">
    </div>

@endsection
