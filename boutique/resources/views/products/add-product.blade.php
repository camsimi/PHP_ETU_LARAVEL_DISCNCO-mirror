@extends('../layouts.app')

@section('page_title', 'Add a Product')

@section('css')
    <link href="{{ asset('css/style_products.css') }}" rel="stylesheet">
@endsection

@section('content')

        <div class="row">
            <div class="mx-auto">
                <form method="POST" action="/product" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="text" name="name" value="{{ old('name') }}" placeholder="Nom du nouvel article"/>
                    @if ($errors->has('name'))
                        <p>{{ $errors->first('name') }}</p>
                    @endif
                    <br> <br>
                    <input type="text" name="price" value="{{ old('price') }}" placeholder="Prix en euros"/>
                    @if ($errors->has('price'))
                        <p>{{ $errors->first('price') }}</p>
                    @endif
                    <br>
                    <br>
                    <input type="file" name="image"/>
                        <br> <br>
                    <button type="submit" value="submit">Valider</button>
                    <br>
                </form>
            </div>
        </div>
@endsection
