@extends('../layouts.app')
@section('css')
    <link href="{{ asset('css/style_products.css') }}" rel="stylesheet">

@endsection
@section('content')
    <div class="container d-lg-inline-flex justify-content-lg-around">

        <h2>The product has been modified in the database</h2>
        <div>
            <img src="../{{$product->image}}" alt="turntable">
        </div>
        <div>
            <h3>{{$product->name}}</h3>
            <div class="container flex-row d-flex justify-content-around">
                <p class="p-2">{{$product->artist}}</p>
                <p class="p-2">{{$product->genre_id}}</p>
                <p class="p-2">Date - Classement</p>

            </div>
            <div>
                <p>{{$product->description}}</p>
            </div>
            <div class="container d-flex flex-row justify-content-around">
                <p>Prix unitaire : {{$product->price}} € </p>
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
