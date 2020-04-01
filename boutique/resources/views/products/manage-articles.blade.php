@extends('../layouts.app')

@section('page_title', 'Manage')
@section('css')
<link href="{{ asset('css/style_products.css') }}" rel="stylesheet">
@endsection

@section('header')
    @parent
@endsection

@section('content')


<div class="container manage-container">
    <div class="catalog">
        <div class="row record_cards">
            @foreach ($catalog as $product)
            <div class="card" style="width: 20rem;">
                <img class="cover_catalog" src="{{asset($product->image)}}" alt="vinyl spectacular">
                <div class="card-body">
                    <h3 class="h_catalogue">{{$product->name}}</h3>
                    <h2 class="h_catalogue">{{$product->artist}}</h2>
                    <a href="/products/{{$product->id}}/edit" class="edit btn btn-primary">Edit</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
