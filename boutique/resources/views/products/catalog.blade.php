@extends('../layouts.app')

@section('page_title', 'CATALOG')
@section('css')
<link href="{{ asset('css/style_products.css') }}" rel="stylesheet">
@endsection

@section('header')
    @parent
@endsection

@section('content')

    <div class="select-container">
        <label for="select-genre"></label>
        <div class="row col-sm-6 select-genre-bloc">
            <select name="genres" id="select-genre" class="select-case">
                <option value="">Genre</option>
                <option value="rock">Rock</option>
                <option value="jazz">Jazz</option>
                <option value="rap">Rap</option>
                <option value="soul">Soul</option>
                <option value="funk">Funk</option>
                <option value="hiphop">Hip Hop</option>
                <option value="chanson">Chanson</option>
                <option value="pop">Pop</option>
                <option value="classic">Classic</option>
            </select>
        </div>
    </div>

    <div class="desktop_genre">
        <div class="filter genre">
            <div class="canard_square">
                <p>Genre</p>
            </div>
        </div>
        <div class="filter subgenre">
            <div class="canard_square">
                <p>Subgenre</p>
            </div>
        </div>
        <div class="filter most">
            <div class="canard_square">
                <p>Most</p>
            </div>
        </div>
    </div>

{{--    SELECT GENRE A INTEGRER AVEC GRID--}}
{{--    <div class="filter-div">--}}
{{--        <div class="row filter genre">--}}
{{--            <div class="col-8 offset-2">--}}
{{--                <p>Genre</p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="row filter subgenre">--}}
{{--            <div class="col-8 offset-2">--}}
{{--                <p>Genre</p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="row filter most">--}}
{{--            <div class="col-8 offset-2">--}}
{{--                <p>Genre</p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}


    <div class="week">
        <div class="week_bloc row">
            <div class="bloc_pochette blocw col-8">
                <h3 class="week_title">Single de la semaine</h3>
                <img src="http://localhost:8000/media/covers/single.jpg" alt="single de la semaine" class="pochette">
            </div>
            <div class="infos blocw col-4">
                    <h2>Title</h2>
                <p>C’est une super description de la mort qui tue sur un single de la semaine qui a bien était vendu et écouté !</p>
                <span><strong>10 euros</strong></span>
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
            <div class="bloc_pochette blocw col-8">
                <h3 class="week_title">Album de la semaine</h3>
                <img src="http://localhost:8000/media/covers/album.jpg" alt="album de la semaine" class="pochette">
            </div>
            <div class="infos blocw col-4">
                <h2 class="">Title</h2>
                <p class="description">C’est une super description de la mort qui tue sur un single de la semaine qui a bien était vendu et écouté !</p>
                <span><strong>25 euros</strong></span>
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
            @foreach ($products as $product)
                <div class="cover col">
                    <img class="cover_catalog" src="..{{ $product->image }}" alt="cover image">
                    <div class="details">
                        <h3 class="h_catalogue">{{ $product->name }}</h3>
                        <h2 class="h_catalogue">{{ $product->artist }}</h2>
                        <p class="prix">{{ $product->price }} euros</p>
                    </div>
                </div>
            @endforeach

{{--            <div class="cover col">--}}
{{--                <img class="cover_catalog" src="http://localhost:8000/media/covers/voyage.jpg" alt="vinyl voyage">--}}
{{--                <div class="details">--}}
{{--                    <h3 class="h_catalogue">Spectacular</h3>--}}
{{--                    <h2 class="h_catalogue">Jah Rise</h2>--}}
{{--                    <p class="prix">64 euros</p>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="cover col">--}}
{{--                <img class="cover_catalog" src="http://localhost:8000/media/covers/spectacular.png" alt="vinyl spectacular">--}}
{{--                <div class="details">--}}
{{--                    <h3 class="h_catalogue">Spectacular</h3>--}}
{{--                    <h2 class="h_catalogue">Jah Rise</h2>--}}
{{--                    <p class="prix">64 euros</p>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="cover col">--}}
{{--                <img class="cover_catalog" src="http://localhost:8000/media/covers/voyage.jpg" alt="vinyl voyage">--}}
{{--                <div class="details">--}}
{{--                    <h3 class="h_catalogue">Spectacular</h3>--}}
{{--                    <h2 class="h_catalogue">Jah Rise</h2>--}}
{{--                    <p class="prix">64 euros</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="cover col">--}}
{{--                <img class="cover_catalog" src="http://localhost:8000/media/covers/spectacular.png" alt="vinyl spectacular">--}}
{{--                <div class="details">--}}
{{--                    <h3 class="h_catalogue">Spectacular</h3>--}}
{{--                    <h2 class="h_catalogue">Jah Rise</h2>--}}
{{--                    <p class="prix">64 euros</p>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="cover col">--}}
{{--                <img class="cover_catalog" src="http://localhost:8000/media/covers/voyage.jpg" alt="vinyl voyage">--}}
{{--                <div class="details">--}}
{{--                    <h3 class="h_catalogue">Spectacular</h3>--}}
{{--                    <h2 class="h_catalogue">Jah Rise</h2>--}}
{{--                    <p class="prix">64 euros</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--    </div>--}}

{{--    <div>--}}
{{--        <div class="genres_line genre1">--}}

{{--        </div>--}}

{{--        <div class="genres_line genre2">--}}

{{--        </div>--}}

{{--        <div class="genres_line genre3">--}}

{{--        </div>--}}
{{--    </div>--}}

@endsection
