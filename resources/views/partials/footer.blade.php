@php
    $social_links = config('links_social');
    $navbar_links = config('footer_links');
@endphp

<footer>

    <div class="upper-footer">
        <div class="container-xl">
            <div class="footer-nav">
                <div>

                    <h4>DC COMICS</h4>
                    <ul>
                        @foreach ($navbar_links['dc_comics'] as $links)
                            <li><a href="#">{{ $links['title'] }}</a></li>
                        @endforeach

                    </ul>
                    <h4>SHOP</h4>
                    <ul>
                        @foreach ($navbar_links['shop'] as $links)
                            <li><a href="#">{{ $links['title'] }}</a></li>
                        @endforeach
                    </ul>
                </div>

                <div>
                    <h4>DC</h4>
                    <ul>
                        @foreach ($navbar_links['dc'] as $links)
                            <li><a href="#">{{ $links['title'] }}</a></li>
                        @endforeach
                    </ul>

                </div>
                <div>
                    <h4>SITES</h4>
                    <ul>
                        @foreach ($navbar_links['sites'] as $links)
                            <li><a href="#">{{ $links['title'] }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="bottom-footer">
        <div class="container-xl">
            <div class="bottom-nav">
                <button>SIGN-UP NOW!</button>
                <div class="links-social">
                    <h4>FOLLOW US</h4>
                    <ul>
                        @foreach ($social_links as $link)
                            <li>
                                <a href="#"><img src="{{ asset('img/' . $link['url']) }}"
                                        alt="{{ $link['alt'] }}"></a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>

</footer>
