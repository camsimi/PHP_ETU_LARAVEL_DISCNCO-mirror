@extends('../layouts.app')

@section('page_title', 'Home')
@section('css')
<link href="{{ asset('css/style_home.css') }}" rel="stylesheet">
@endsection

@section('header')
@endsection

@section('content')

<div class="releases category">
    <h2>NEW RELEASES</h2>
    <div class ="row carrousel">
        <button class="col-2 col-lg-1"><img class="arrow " src="{{ asset('media/icons/left_arrow.svg')}}" alt="left arrow"></button>
        <div class="cover-div col-6 col-lg-4 offset-sm-1">
            <img class ="cover" src="{{ asset('media/covers/vacuum.jpg')}}" alt="album cover">
            <section class="mouse_over">
                <button type="submit"><img class="play" src="{{ asset('media/buttons/play_black.svg')}}"
                    alt="play button"></button>
                <button type="submit"><img class="cart" src="{{ asset('media/buttons/cart_button.svg')}}"
                    alt="add into cart button"></button>
            </section>
        </div>


        <section class="col-lg-4 d-none d-sm-block infos">
            <p class="album">Nom de l'album</p>
            <p class="artist">Nom de l'artiste</p>
            <p class="description">Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression.
                 Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme
                assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait
                que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en
            </p>
            <div class="row">
                <p class="col prix">Prix</p>
                <button class="col" type="submit"><img class="see_more" src="{{ asset('media/buttons/see_more.svg')}}"></button>
            </div>

        </section>
        <button class="col-2 col-lg-1 offset-lg-1"><img class="arrow" src="{{ asset('media/icons/right_arrow.svg')}}" alt="right arrow"></button>
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
                <button class="col" type="submit"><img src="{{ asset('media/buttons/see_more.svg')}}"></button>
        </div>
    </div>
</div>

    <div class="desktop pergenre category">
        <div class="filter-div">
            <div class="row filter genre">
                <div class="col-8 offset-2">
                    <p>Genre</p>
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

        <div class="container">
            <div class="selection">
                <div class="row">
                    <div class="col-2">
                        <section>
                            <img class ="cover" src="{{ asset('media/covers/lovesupreme.jpg')}}"
                            alt="Single of the week cover">
                        </section>
                    </div>
                </div>
                <div class="row">
                    <div class="col-2">
                        <section>
                            <img class ="cover" src="{{ asset('media/covers/lovesupreme.jpg')}}"
                            alt="Single of the week cover">
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="container">


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

