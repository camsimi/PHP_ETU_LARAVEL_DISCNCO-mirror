@extends('../layouts.app')
@section('css')
    <link href="{{ asset('css/style_products.css') }}" rel="stylesheet">

@endsection
@section('content')
    <div class="container d-lg-inline-flex justify-content-lg-around">
        <div>
            <img src="{{ asset('media/images/turntable.png')}}" alt="turntable">
        </div>
        <div>
            <h3>Titre de la musique</h3>
            <div class="container flex-row d-flex justify-content-around">
                <p class="p-2">genre</p>
                <p class="p-2">Date</p>
                <p class="p-2">classement</p>

            </div>
            <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci architecto earum, facilis itaque
                    labore magnam, magni nostrum provident quae qui vero voluptas. Architecto blanditiis esse in, ipsa
                    maxime qui recusandae?</p>
            </div>
            <div class="container d-flex flex-row justify-content-around">
                <p>Prix unitaire : 75 € </p>
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
