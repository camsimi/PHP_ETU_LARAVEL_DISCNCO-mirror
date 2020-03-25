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
            <select name="genres" id="select-genre">
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


{{--    <div>--}}
{{--        <div class="genres_line genre1">--}}

{{--        </div>--}}

{{--        <div class="genres_line genre2">--}}

{{--        </div>--}}

{{--        <div class="genres_line genre3">--}}

{{--        </div>--}}
{{--    </div>--}}

@endsection
