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

        @include('includes.member_nav')

        @include('includes.main_nav')

        @include('includes.mobile_nav')

        </header>


        <div class="container">
        @yield('content')
        </div>

    <footer>
        @include('includes.footer')
    </footer>

</body>


</html>
