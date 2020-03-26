@extends('../layouts.app')

@section('page_title', 'CATALOG')
@section('css')
<link href="{{ asset('css/style_products.css') }}" rel="stylesheet">
@endsection

@section('content')

    @section('header')
        @parent

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

    <div class="week col-12">

        <div class="week_bloc">
            <div class="bloc_pochette">
                <h3 class="week_title">Single de la semaine</h3>
                <img src="http://localhost:8000/media/covers/single.jpg" alt="single de la semaine" class="pochette">
            </div>
            <div class="infos">
                <h2 class="">Title</h2>
                <p class="description">C’est une super description de la mort qui tue sur un single de la semaine qui a bien était vendu et écouté !</p>
                <span>12 euros</span>
                <img src="http://localhost:8000/media/buttons/play_black.svg" alt="écouter un extrait" class="">
                <img src="http://localhost:8000/media/buttons/cart_button.svg" alt="ajouter au panier" class="">
            </div>
        </div>

        <div class="week_bloc">
            <div class="bloc_pochette">
                <h3 class="week_title">Album de la semaine</h3>
                <img src="http://localhost:8000/media/covers/album.jpg" alt="album de la semaine" class="pochette">
            </div>

        </div>

    </div>


{{--    <div>--}}
{{--        <div class="genres_line genre1">--}}

{{--        </div>--}}

{{--        <div class="genres_line genre2">--}}

{{--        </div>--}}

{{--        <div class="genres_line genre3">--}}

{{--        </div>--}}
{{--    </div>--}}

@endsection
