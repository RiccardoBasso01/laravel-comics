@php
    $imgNames = config('shops_links');
    $comics = config('comics');
    
@endphp

<main>

    <link rel="stylesheet" href="./main_content">
    <div class="jumbotron">
        <div class="container-xl">
            <div class="jumbo-content">
                <h2 class="jumbo-title">The Flash</h2>
            </div>
        </div>
    </div>

    <div class="comics-list">
        <div class="container-xl">
            <div class="comics-title">
                <h3>LATEST COMICS & GRAPHIC NOVELS</h3>
            </div>

            <div class="comics">
                <ul>
                    @foreach ($comics as $comic)
                        <li>
                            <a href="#">
                                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}"
                                    title="{{ $comic['series'] }}">
                                <div class="comic-subtitle">{{ Str::of($comic['type'])->upper() }} </div>
                                <div class="comic-title">
                                    {{ Str::of($comic['series'])->upper() }}</div>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

    <div class="main-nav">
        <div class="container-xl">
            <ul>
                @foreach ($imgNames as $imgName)
                    <li>
                        <a href="#"><img src="{{ asset('img/' . $imgName['url']) }}"
                                alt="{{ $imgName['text'] }}"></a>
                        <a href="#">{{ $imgName['text'] }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

</main>
