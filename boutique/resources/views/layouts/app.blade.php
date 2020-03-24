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

<body>

    @section('member_nav')
        <nav class="member_nav">
            <h2>member_navbar</h2>
        </nav>
    @show

    @section('main_nav')
        <nav class="main_nav">
            <h2>main_navbar</h2>
        </nav>
    @show

    @section('mobile_nav')
        <nav class="mobile_nav">
            <h2>main_navbar</h2>
        </nav>
    @show

    <div class="container">
        @yield('content')
</div>

    @section('footer')
        <footer>
            <h2>footer</h2>
        </footer>
    @show

</body>


</html>
