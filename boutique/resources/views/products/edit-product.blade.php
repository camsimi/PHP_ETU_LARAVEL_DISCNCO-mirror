@extends('layouts.app')
@section('page_title', 'Editing')
@section('css')
    <link href="{{ asset('css/style_products.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container edit-product">
    <h2>Update an article</h2>

    <form action="{{url('products', [$product->id])}}" method="POST">
        {{method_field('PATCH')}}
        {{ csrf_field() }}
            <div class="row product-container">
                <img class="col-sm-4 offset-sm-2" src="{{asset($product->image)}}" alt="turntable">
                <div class="col col-sm infos offset-1">
                    <div class="row">
                        <input type="text" name="name" id="" value="{{$product->name}}">
                    </div>
                    <div class="row">
                        <p class="p-2">{{$product->artist}}</p>

                    <select name="genre_id" id="">
                        @foreach ($genres as $genre)
                            <option {{$product->genre_id === $genre->id ? "selected" : ""}} value="{{$genre->id}}">
                                {{$genre->name}}
                            </option>
                        @endforeach
                    </select>

                    <select name="subgenre_id" id="">
                        @foreach ($subgenres as $subgenre)
                            <option {{$product->subgenre_id === $subgenre->id ? "selected" : ""}} value="{{$subgenre->id}}">
                                {{$subgenre->name}}
                            </option>
                        @endforeach
                    </select>

                        <p class="p-2">Date - Classement</p>
                    </div>
                    <div class="row">
                        <p>{{$product->description}}</p>
                    </div>
                    <div class="row">
                        <p>Prix unitaire :
                        <input type="number" name="price" id="" value="{{$product->price}}">
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <button class="btn btn-primary" type="submit" value="submit">Submit changes </button>
                        </div>
                    </div>
                </div>
            </div>

    </form>


    <form action="{{ url('products' , $product->id) }}" method="POST">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <button class="btn btn-danger"type="submit">Delete</button>
    </form>

</div>

@endsection
