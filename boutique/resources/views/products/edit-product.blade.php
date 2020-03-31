@extends('layouts.app')
@yield('page_title', 'Editing')

@section('content')

    <h2>Update an article</h2>

    <form action="{{url('products', [$product->id])}}" method="POST">
        {{method_field('PATCH')}}
        {{ csrf_field() }}
    <div class="container d-lg-inline-flex justify-content-lg-around">
        <div>
            <img src="{{asset($product->image)}}" height="200px" alt="turntable">
        </div>
        <div>
            <input type="text" name="name" id="" placeholder="{{$product->name}}">
            <div class="container flex-row d-flex justify-content-around">
                <p class="p-2">{{$product->artist}}</p>
                <p class="p-2">{{$product->genre_id}}</p>
                <p class="p-2">Date - Classement</p>

            </div>
            <div>
                <p>{{$product->description}}</p>
            </div>
            <div class="container d-flex flex-row justify-content-around">
                <p>Prix unitaire :
                <input type="number" name="price" id="" placeholder="{{$product->price}}">
                </p>
            </div>
        </div>

        <input type="submit" value="submit">
    </form>

    </div>

@endsection
