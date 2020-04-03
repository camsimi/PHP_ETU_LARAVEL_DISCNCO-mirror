@extends('layouts.app')
@section('page_title', 'create')

@section('content')

<div class="container">
    <h1>Add a product</h1>
    <form action="/products" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="name">Album</label>
                    <input type="text" name="name" id="" value="{{ old('name') }}" placeholder="Nom de l'album">
                    @if ($errors->has('name'))
                        <p>{{ $errors->first('name') }}</p>
                    @endif
                    <label for="artist">Artist</label>
                    <input type="text" name="artist" id="" value="{{ old('artist') }}" placeholder="Nom de l'artiste">
                    @if ($errors->has('artist'))
                        <p>{{ $errors->first('artist') }}</p>
                    @endif
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col">
                    <p>Choose Genre:</p>
                    <select name="genre" id="">
                        @foreach($genres as $id => $genre)
                            <option value="{{$genre->name}}">{{$genre->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col">
                    <p>Choose Subgenre:</p>
                    <select name="subgenre" id="">
                        @foreach($subgenres as $id => $subgenre)
                            <option value="${{$subgenre->name}}">{{$subgenre->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col">
                <label for="description">Description</label>
                <textarea name="description" id="" cols="30" rows="4"></textarea>
            </div>
        </div>

        <div class="row">
            <div class="col-2 offset-3">
                <label for="weight">Weight</label>
                <input type="number" name="weight" id="">
            </div>
            <div class="col-2">
                <label for="quantity">Quantity</label>
                <input type="number" name="quantity" id="">
            </div>
            <div class="col-2">
                <label for="price">Prix</label>
                <input type="number" name="price" id="" placeholder="Prix < à 2000 euros">
                @if ($errors->has('price'))
                    <p>{{ $errors->first('price') }}</p>
                @endif
            </div>
        </div>

        <div class="row">
            <div class="col">
                <label for="image">Image path</label>
                <input type="text" name="image" id="" size="50">
            </div>
        </div>

        <div class="row">

        </div>

        <button class="btn btn-primary" type="submit" value="submit">Submit</button>
    </form>
</div>
@endsection
