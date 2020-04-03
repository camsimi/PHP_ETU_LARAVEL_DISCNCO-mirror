@extends('layouts.app')

@section('page_title', 'Home')
@section('css')
<link href="{{ asset('css/style_home.css') }}" rel="stylesheet">
@endsection


@section('content')

<div class="container">
    <div class="releases category">
        <h2>NEW RELEASES</h2>

        <div id="carouselExampleControls" class="carousel slide carrousel" data-ride="carousel">
            <div class="carousel-inner">

            @foreach ($newreleases as $key=>$product)
                <div class="{{$key !== 0 ? "carousel-item" : "carousel-item active"}}">
                    <div class="row">
                        <a class="col-6 offset-3 col-sm-4 offset-sm-2" href="{{url('products', [$product->id])}}"><img class ="cover" src="{{asset($product->image)}}" alt="album cover"></a>
                        <section class="col-lg-4 d-none d-sm-block infos">
                            <p class="album">{{$product->name}}</p>
                            <p class="artist">{{$product->artist}}</p>
                            <p class="description">
                                {{$product->description}}
                            </p>
                            <div class="row">
                                <p class="col prix">{{$product->price}} $</p>
                                <a href="{{url('products', [$product->id])}}""><img class="see_more" src="{{ asset('media/buttons/see_more.svg')}}"></a>
                            </div>
                        </section>
                    </div>
                </div>
            @endforeach

            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true">
                <img class="arrow " src="{{ asset('media/icons/left_arrow.svg')}}" alt="left arrow">
            </span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true">
                <img class="arrow" src="{{ asset('media/icons/right_arrow.svg')}}" alt="right arrow">
            </span>
            <span class="sr-only">Next</span>
            </a>
        </div>

    </div>

        <div class="mobile pergenre category">
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
                    <a class="col-2 offset-6" href=""><img src="{{ asset('media/buttons/see_more.svg')}}"></a>
            </div>
        </div>
    </div>
</div>

    <div class="desktop filter-div">
        <div class="row filter genre">
            <div class="col-8 offset-2 d-flex">
                        @foreach ($genres as $key => $item)
                            <p class="col-1">{{$item}}</p>

                         @endforeach
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

<div class="container home-container">
    <form action="#" method="POST">
        <div class="selection desktop">
            <div class="row">
                @foreach ($catalog as $product)
                    <div class="col-2">
                        <section class="cover-card">
                            <a href="{{url('products', [$product->id])}}"">
                                <img class ="cover" src="{{asset($product->image) }}"
                                alt="Single of the week cover">
                            </a>
                            <div class="overlay d-flex">
                                <button>
                                    <img class="button play_button" src="{{asset('media/buttons/play_black.svg')}}" alt="écouter un extrait">
                                </button>
                                <button type="submit">
                                    <img class="button cart_button" src="{{asset('media/buttons/cart_button.svg')}}" alt="add to cart">
                                </button>
                            </div>
                        </section>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <a href="/products" class="col offset-10" type="submit">
                    <img class="see_more" src="{{ asset('media/buttons/see_more.svg')}}">
                </a>
            </div>
         </div>
    </form>

    <div class="turntables category">
        <h2>TURNTABLES</h2>
        <div class="row">
            <div class="product_box col">
                <img class="mobile" src="{{ asset('media/images/turntable.png')}}" alt="turntable photo">
                <img class="desktop" src="{{ asset('media/images/turntable_desktop.jpg')}}" alt="turntable photo">
                <img class="button mobile" src="{{ asset('media/buttons/see_more.svg')}}">
            </div>
        </div>
    </div>

    <div class="accessories category">
        <h2>ACCESSORIES</h2>
        <div class="product_box col">
            <img class="mobile" src="{{ asset('media/images/accessories.jpg')}}" alt="accessories photo">
            <img class="desktop" src="{{ asset('media/images/accessories_desktop.jpg')}}" alt="turntable photo">
            <img class="button mobile" src="{{ asset('media/buttons/see_more.svg')}}">
        </div>
    </div>

    <div class="newsletter category">
        <h2>NEWSLETTER</h2>
        <form action="post">
            <div class="row">
                <input class="col col-sm-5 textbox" type="text" placeholder="sign in for the newsletter ...">
                <button type="col col-sm-1 submit"><img src="{{ asset('media/buttons/mail.svg')}}" alt="mail button"></button>
            </div>
        </form>
    </div>
</div>

@endsection

