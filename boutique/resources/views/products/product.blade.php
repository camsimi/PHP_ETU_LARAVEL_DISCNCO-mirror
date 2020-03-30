@extends('../layouts.app')

@section('page_title', 'Product')

@section('css')
    <link href="{{ asset('css/style_products.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="product d-lg-inline-flex justify-content-lg-around">
        <div>
            <img src="../{{ $product->image }}" alt="turntable">
        </div>
        <div>
            <h3> {{ $product->name }}</h3>
            <div class="container flex-row d-flex justify-content-around">
                <p class="p-2"> {{ $product->genre_id }}</p>
                <p class="p-2">{{ $product->created_at }}</p>
                <p class="p-2">classement</p>

            </div>
            <div>
                <p>{{ $product->description }}</p>
            </div>
            <div class="container d-flex flex-row justify-content-around">
                <p>Prix unitaire : {{ $product->price }} € </p>
                <br>
                <form>
                    <input type="number" value="0">
                    <input type="button">
                </form>
            </div>
        </div>
    </div>

@endsection

@section('header')
@endsection
