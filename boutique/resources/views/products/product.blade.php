@extends('../layouts.app')
@section('page_title', $product->name)
@section('css')
    <link href="{{ asset('css/style_products.css') }}" rel="stylesheet">
@endsection
@section('content')
<div class="container product-page-container">
    <div class="container d-lg-inline-flex justify-content-lg-around">
        <img  class ="col" src="{{asset($product->image)}}" alt="turntable">
        <div class ="col">
            <h3>{{$product->name}}</h3>
            <div class="container flex-row d-flex justify-content-around">
                <p class="p-2">{{$product->artist}}</p>
                <p class="p-2">{{$product->genre_id}}</p>
                <p class="p-2">Date - Classement</p>

            </div>
            <div>
                <p>{{$product->description}}</p>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <p>Prix unitaire : {{$product->price}} € </p>
                    </div>
                    <form>
                    <div class="col">
                        <input type="number" value="0" max="99">
                    </div>

                <div class="row">
                    <button class="btn btn-primary">Order</button>
                </div>
                </form>

            </div>
            </div>
        </div>
    </div>
</div>
    @endsection

@section('header')
@endsection
