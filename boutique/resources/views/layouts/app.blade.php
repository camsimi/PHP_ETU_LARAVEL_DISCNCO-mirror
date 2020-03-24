<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page_title') - Discn'Co</title>

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    {{-- <script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script> --}}
</head>
<body>
    <header>

    @section('member_nav')
        @include('navbars.member_nav')
    @show

    @section('main_nav')
        @include('navbars.main_nav')
    @show

    @section('mobile_nav')
        @include('navbars.mobile_nav')
    @show
        </header>


        <div class="container">
        @yield('content')
        </div>

    <footer>
    @section('footer')
        <footer>
            @include('footer.footer')
        </footer>
    @show
    </footer>

</body>


</html>
