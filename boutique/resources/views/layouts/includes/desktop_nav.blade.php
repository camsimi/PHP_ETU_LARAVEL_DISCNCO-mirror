<nav class="desktop">
    <div class="row member_nav">
        <div class="col left">
            <a>Newsletter</a>
            <span class="separator">|</span>
            <a href="">Blog</a>
            {{-- @if () --}}
                <span class="separator">|</span>
                <a href="/products/create">Add an article</a>
                <span class="separator">|</span>
                <a href="/products/manage">Manage articles</a>
            {{-- @endif --}}
        </div>
        <div class="col right">
            <a><img class="member icon" src="{{ asset('media/icons/member.svg') }}" alt="member button">Connexion</a>
            <span class="separator">|</span>
            <a href="/cart"><img class="cart icon" src="{{ asset('media/icons/cart.svg') }}" alt="cart button">Cart</a>
        </div>
    </div>

    <div class="row main_nav">
        <div class="left col">
            <div class="row">
                <a href="/"><img class="home" src="{{ asset('media/icons/logo.svg') }}" alt="home button"></a>
                <a href=""><img class="icon" src="{{ asset('media/icons/search_icon.svg') }}" alt=""></a>

                <input class="searchbar" type="text" placeholder="Search by artist, album, genre...."/>

            </div>
        </div>
        <div class="right col">

            <a>New Releases</a>
            <span class="separator">|</span>
            <a href="/products">Catalog</a>
            <span class="separator">|</span>
            <a>Turntables</a>
            <span class="separator">|</span>
            <a>Accessories</a>

        </div>


    </div>
</nav>
