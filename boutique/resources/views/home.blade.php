@extends('../layouts.app')

@section('page_title', 'Home')
@section('css')
<link href="{{ asset('css/style_home.css') }}" rel="stylesheet">
@endsection

@section('content')

<div class="releases category">
    <h2>NEW RELEASES</h2>
    <div class ="row carrousel">
        <button class="col-2"><img class="arrow " src="{{ asset('media/icons/left_arrow.svg')}}" alt="left arrow"></button>
        <img class ="cover col-6" src="{{ asset('media/covers/vacuum.jpg')}}" alt="album cover">
        <button class="col-2"><img class="arrow" src="{{ asset('media/icons/right_arrow.svg')}}" alt="right arrow"></button>
    </div>
    <div class="row buttons">
        <button type="submit"><img class="play" src="{{ asset('media/buttons/play_black.svg')}}" alt="play button"></button>
        <button type="submit"><img class="cart" src="{{ asset('media/buttons/cart_button.svg')}}" alt="add into cart button"></button>
    </div>
</div>

<div class="pergenre category">
    <div class="row carrousel">
        <button class="col"><img class="arrow" src="{{ asset('media/icons/left_arrow.svg')}}" alt="left arrow"></button>
        <h2 class="col-6">GENRES</h2>
        <button class="col"><img class="arrow" src="{{ asset('media/icons/right_arrow.svg')}}" alt="right arrow"></button>
    </div>

    <div class="row week_selection">
        <div class="col-6 week_album">
            <section><img class ="cover" src="{{ asset('media/covers/kindofblue.jpg')}}" alt="Album of the week cover"></section>
            <h3>Album of the week</h3>
        </div>

        <div class="col-6 week_single">
            <section><img class ="cover" src="{{ asset('media/covers/lovesupreme.jpg')}}" alt="Single of the week cover"></section>
            <h3>Single of the week</h3>
        </div>
    </div>
    <div class="row">
            <button class="col" type="submit"><img src="{{ asset('media/buttons/see_more.svg')}}"></button>
    </div>
</div>

<div class="turntables category">
    <h2>TURNTABLES</h2>
    <div class="product_box">
        <img src="{{ asset('media/images/turntable.png')}}" alt="turntable photo">
        <img class="button" src="{{ asset('media/buttons/see_more.svg')}}">
    </div>
</div>

<div class="accessories category">
    <h2>ACCESSORIES</h2>
    <div class="product_box">
        <img src="{{ asset('media/images/accessories.jpg')}}" alt="accessories photo">
        <img class="button" src="{{ asset('media/buttons/see_more.svg')}}">
    </div>
</div>

<div class="newsletter category">
    <h2>NEWSLETTER</h2>
    <form action="post">
        <div class="row">
            <input class="col textbox" type="text" placeholder="sign in for the newsletter ...">
            <button type="col submit"><img src="{{ asset('media/buttons/mail.svg')}}" alt="mail button"></button>
        </div>
    </form>
</div>

@endsection

