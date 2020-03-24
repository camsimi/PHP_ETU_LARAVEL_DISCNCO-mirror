<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page_title') - Discn'co</title>
</head>
<body>

    @section('member_navbar')
        <h2>member_navbar</h2>
        <nav>

        </nav>
    @show

    @section('main_navbar')
        <h2>main_navbar</h2>
        <nav>

        </nav>
    @show

    @section('mobile_navbar')
        <h2>main_navbar</h2>
        <nav>

        </nav>
    @endsection

    <div class="container">

        @yield('content')

    </div>

    @section('footer')
        <h2>footer</h2>
        <footer>

        </footer>
    @show

</body>
</html>
