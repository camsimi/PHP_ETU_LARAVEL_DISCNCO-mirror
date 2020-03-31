@extends('layouts.app')
@section('page_title', 'create')

@section('content')

<div class="container">
    <h1>Add a product</h1>
    <form action="/products" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <div class="row">
                <label for="name">Album</label>
                <input type="text" name="name" id="">
                <label for="artist">Artist</label>
                <input type="text" name="artist" id="">
            </div>
        </div>

        <div class="row">
            <label for="price">Prix</label>
            <input type="number" name="price" id="">
        </div>

        <input type="submit" value="submit">
    </form>
</div>
@endsection
