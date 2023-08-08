@php
    $links = config('navbar_links');
@endphp

<header>
    <div class="container-xl">
        <div class="d-flex">
            {{-- logo --}}
            <div class="logo">
                <a href="#"><img src="{{ Vite::asset('public/img/dc-logo.png') }}" alt="logo"></a>
            </div>

            {{-- navbar --}}
            <ul class="navbar d-none">
                @foreach ($links as $link)
                    <li class="">
                        <a href="#">{{ $link['text'] }}</a>
                    </li>
                @endforeach
            </ul>

        </div>
        <div class="center-Y gap-3">
            {{-- search-bar --}}
            <div class="search-bar">
                <a href="#"><img src="{{ Vite::asset('public/img/search_icon.png') }}" alt="search-icon"></a>
            </div>

            {{-- hamburger menu --}}
            <div class="hamburger-menu">
                <a href="#"><img src="{{ Vite::asset('public/img/hamburger-menu.png') }}" alt="hamburger-menu"
                        title="hamburger-menu"></a>
            </div>

            {{-- navbar log in --}}
            <ul class="navbar d-none">
                <li><a href="#">SIGN UP</a></li>
                <li><a href="#">LOG IN</a></li>
            </ul>
        </div>

    </div>
</header>
