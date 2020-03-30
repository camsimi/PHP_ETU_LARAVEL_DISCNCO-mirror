@extends('../layouts.app')

@section('page_title', 'CART')
@section('css')
    <link href="{{ asset('css/style_cart.css') }}" rel="stylesheet">
@endsection
@section('content')
<div class="container">
    <div>
        <div>Article:</div>
        <div>Prix</div>
    </div>
    <div class="flex-row d-inline-flex">
        <div>
            <img src="{{ asset('media/images/turntable.png')}}" alt="turntable" height="90rem">

        </div>
        <div>
            <div>
                <p>Prix unitaire: 75 €</p>
            </div>
            <div>
                <form>
                    <input type="number">
                </form>
            </div>
            <div>
                <p>Prix Total: 75 €</p>
            </div>
            <form>
                <button>Supprimer</button>
            </form>

        </div>
    </div>
</div>
@endsection
