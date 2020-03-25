@extends('../layouts.app')
@section('css')
    <link href="{{ asset('css/style_products.css') }}" rel="stylesheet">

@endsection
@section('content')
    <div>
        <div>
            <img src="{{ asset('media/images/turntable.png')}}" alt="turntable">
        </div>
        <div>
            <div class="container flex-wrap">
                <h3>Titre de la musique</h3>
                <p>genre</p>
                <p>Date</p>
                <p>classement</p>

            </div>
            <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci architecto earum, facilis itaque
                    labore magnam, magni nostrum provident quae qui vero voluptas. Architecto blanditiis esse in, ipsa
                    maxime qui recusandae?</p>
            </div>
            <div>
                <form>
                    <input type="button">
                </form>
            </div>
        </div>
    </div>
@endsection
