@extends('../layouts.app')

@section('page_title', 'Add a Product')

@section('css')
    <link href="{{ asset('css/style_products.css') }}" rel="stylesheet">
@endsection

@section('content')

    <div class="row">
        <div class="mx-auto">
            <h4>Modifier le produit</h4>
            <form method="post" action="/product/{{$product->id}}" enctype="multipart/form-data">
                @method('put');
                {{ csrf_field() }}
                <input type="text" name="name" value=" {{ $product->name }}" placeholder="Modifier le nom"/>
                <strong class="text-danger"></strong>
                <br> <br>
                <input type="text" name="price" value=" {{ $product->price }}" placeholder="Modifier le prix"/><strong
                    class="text-danger"></strong> <br>
                <br>
                <input type="file" name="image" value=" {{ $product->image }}"/> <strong
                    class="text-danger"></strong> <br> <br>
                <button type="submit" value="submit">Envoyer les modifications</button>
                <br>
            </form>
        </div>
    </div>

    <br>

    <div class="row">
        <div class="mx-auto">
            <form method="post" action="/product/{{$product->id}}" enctype="multipart/form-data">
                @method('delete')
                {{ csrf_field() }}
                <button type="submit" value="submit">Supprimer le produit</button>
                <br>
            </form>
        </div>
    </div>
@endsection
