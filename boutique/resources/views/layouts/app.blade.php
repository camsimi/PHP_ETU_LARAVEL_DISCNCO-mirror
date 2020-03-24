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

        @include('layouts.includes.member_nav')

        @include('layouts.includes.main_nav')

        @include('layouts.includes.mobile_nav')

        </header>


        <div class="container">
        @yield('content')
        </div>

    <footer>
        @include('layouts.includes.footer')
    </footer>

</body>


</html>
