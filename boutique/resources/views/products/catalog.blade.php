@extends('../layouts.app')

@section('page_title', 'CATALOG')
@section('css')
<link href="{{ asset('css/style_products.css') }}" rel="stylesheet">
@endsection

@section('header')
    @parent
@endsection

@section('content')

<div class="desktop filter-div">
    <div class="row filter genre">
        <div class="col-8 offset-2">
            <p>Genre</p>
        </div>
    </div>
    <div class="row filter subgenre">
        <div class="col-8 offset-2">
            <p>Genre</p>
        </div>
    </div>
    <div class="row filter most">
        <div class="col-8 offset-2">
            <p>Genre</p>
        </div>
    </div>
</div>

<div class="container">
    <div class="selection desktop">
        <div class="cover-card col-4">
            <a href="{{url('products', [$catalog[0]->id])}}"">
                <img class ="cover" src="{{asset($catalog[0]->image) }}"
                alt="Single of the week cover">
            </a>
            <div class="overlay d-flex">
                <button>
                    <img class="button play_button" src="{{asset('media/buttons/play_black.svg')}}" alt="écouter un extrait">
                </button>
                <button>
                    <img class="button cart_button" src="{{asset('media/buttons/cart_button.svg')}}" alt="add to cart">
                </button>
            </div>
        </div>
        <div class="col">
            <div class="row">
                @foreach ($catalog as $key=>$product)
                @if ($key !==0)
                    <div class="cover-card col-2">
                        <a href="{{url('products', [$product->id])}}"">
                            <img class ="cover" src="{{asset($product->image) }}"
                            alt="Single of the week cover">
                        </a>
                        <div class="overlay d-flex">
                            <button>
                                <img class="button play_button" src="{{asset('media/buttons/play_black.svg')}}" alt="écouter un extrait">
                            </button>
                            <button>
                                <img class="button cart_button" src="{{asset('media/buttons/cart_button.svg')}}" alt="add to cart">
                            </button>
                        </div>
                    </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>

    <div class="week">
            <div class="week_bloc row">
                <div class="bloc_pochette blocw col-8 col-sm-4">
                    <h3 class="week_title">Single de la semaine</h3>
                    <img src="{{$catalog[0]->image}}" alt="single de la semaine" class="pochette">
                </div>
                <div class="infos blocw col-4">
                    <h2>{{$catalog[0]->name}}</h2>
                    <p>{{$catalog[0]->description}}</p>
                    <span><strong>{{$catalog[0]->price}} $</strong></span>
                    <br>
                    <br>
                    <div class="buttons_catalog">
                        <a href="">
                            <img class="button play_button" src="http://localhost:8000/media/buttons/play_black.svg" alt="écouter un extrait">
                        </a>
                    </div>
                    <div class="buttons_catalog">
                        <form action="" method="">
                          <input class="button" type="image" id="image" alt="ajout au panier" src="http://localhost:8000/media/buttons/cart_button.svg">
                        </form>
                    </div>
                </div>
        </div>

        <div class="week_bloc row">
            <div class="bloc_pochette blocw col-8 col-sm-4">
                <h3 class="week_title">Album de la semaine</h3>
                <img src="{{$catalog[1]->image}}" alt="album de la semaine" class="pochette">
            </div>
            <div class="infos blocw col-4">
                <h2 class="">{{$catalog[1]->name}}</h2>
                <p class="description">{{$catalog[1]->description}}</p>
                <span><strong>{{$catalog[1]->price}}</strong></span>
                <br>
                <br>
                <div class="buttons_catalog">
                    <a href="">
                        <img class="button" src="http://localhost:8000/media/buttons/play_black.svg" alt="écouter un extrait" class="">
                    </a>
                </div>
                <div class="buttons_catalog">
                    <form action="" method="">
                       <input class="button" type="image" id="image" alt="ajout au panier" src="http://localhost:8000/media/buttons/cart_button.svg">
                    </form>
                </div>
            </div>

        </div>

    </div>

    <div class="catalog">
        <div class="row">
            @foreach ($catalog as $product)
                <div class="cover col-6 col-sm-2">
                    <img class="cover_catalog" src="{{$product->image}}" alt="vinyl spectacular">
                    <div class="details">
                        <a href="/products/{{$product->id}}"><h3 class="h_catalogue">{{$product->name}}</h3></a>
                        <h2 class="h_catalogue">{{$product->artist}}</h2>
                        <p class="prix">{{$product->price}}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
