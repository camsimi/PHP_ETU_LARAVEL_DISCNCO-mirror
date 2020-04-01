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
                    <input type="text" name="name" placeholder="Nom du nouvel article" required/>
                    <strong class="text-danger"></strong>
                    <br> <br>
                    <input type="text" name="price" placeholder="Prix en euros" required/><strong
                        class="text-danger"></strong> <br>
                    <br>
                    <input type="file" name="monfichier"/> <strong
                        class="text-danger"></strong> <br> <br>
                    <button type="submit" value="submit">Valider</button>
                    <br>
                </form>
            </div>
        </div>
@endsection
