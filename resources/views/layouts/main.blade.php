<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> {{env('APP_NAME', 'DC Comics')}}</title>

    @vite('resources/js/app.js')
</head>

<body>

    {{-- HEADER --}}
    <header>
        <div class="container">
            <img  src="{{ asset('images/dc-logo.png') }}"   alt="Logo dc">

            <ul>
                <li><a href="{{ route('characters') }}">Characters</a></li>
                <li><a href="{{ route('comics') }}">Comics</a></li>
                <li><a href="#">Movies</a></li>
                <li><a href="#">TV</a></li>
                <li><a href="#">Games</a></li>
                <li><a href="#">Collectibles</a></li>
                <li><a href="#">Videos</a></li>
                <li><a href="#">Fans</a></li>
                <li><a href="#">News</a></li>
                <li><a href="#">Shop</a></li>
            </ul>
        </div>
    </header>

    {{-- MAIN --}}
    @yield('main-content')

    {{-- FOOTER --}}
    <footer>

        {{-- FOOTER TOP --}}
        <section id="footer-top">        
        <div class="container">
            <div class="links">
                <div>
                    <h4>DC COMICS</h4>
                    <ul>
                        <li><a href="#">Characters</a></li>
                        <li><a href="#">Comics</a></li>
                        <li><a href="#">Movies</a></li>
                        <li><a href="#">TV</a></li>
                        <li><a href="#">Games</a></li>
                        <li><a href="#">Videos</a></li>
                        <li><a href="#">News</a></li>
                    </ul>

                    <h4>SHOP</h4>
                    <ul>
                        <li><a href="#">Shop DC</a></li>
                        <li><a href="#">Shop DC Collectibles</a></li>
                    </ul>

                </div>
                <div>
                    <h4>DC</h4>
                    <ul>
                        <li><a href="#">Terms Of Use</a></li>
                        <li><a href="#">Privacy policy (New)</a></li>
                        <li><a href="#">Ad Choices</a></li>
                        <li><a href="#">Advertising</a></li>
                        <li><a href="#">Jobs</a></li>
                        <li><a href="#">Subscriptions</a></li>
                        <li><a href="#">Talent Workshops</a></li>
                        <li><a href="#">CPSC Certificates</a></li>
                        <li><a href="#">Ratings</a></li>
                        <li><a href="#">Shop Help</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
                <div>
                    <h4>SITES</h4>
                    <ul>
                        <li><a href="#">DC</a></li>
                        <li><a href="#">MAD Magazine</a></li>
                        <li><a href="#">DC Kids</a></li>
                        <li><a href="#">DC Universe</a></li>
                        <li><a href="#">DC Power Visa</a></li>
                    </ul>
                </div>

            </div>

            <div class="logo">
                <img src="@/assets/img/dc-logo-bg.png" alt="Logo DC">
            </div>
        </div>
        </section>

        {{-- FOOTER BOT --}}
        <section id="footer-bot">
            <div class="footer-bot">
                <button>SIGN-UP NOW!</button>

                <div class="footer-social">
                    <span>FOLLOW US</span>
                    <ul>
                        <li><a href="#"><img src="@/assets/img/footer-facebook.png" alt=""></a></li>
                        <li><a href="#"><img src="@/assets/img/footer-twitter.png" alt=""></a></li>
                        <li><a href="#"><img src="@/assets/img/footer-youtube.png" alt=""></a></li>
                        <li><a href="#"><img src="@/assets/img/footer-pinterest.png" alt=""></a></li>
                        <li><a href="#"><img src="@/assets/img/footer-periscope.png" alt=""></a></li>
                    </ul>
                </div>
            </div>
        </section>
    </footer>
</body>

</html>