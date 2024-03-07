<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> @yield('title')</title>

    @vite('resources/js/app.js')
</head>

<body>

    {{-- HEADER --}}
    <header>
        <div class="container">
            <img  src="{{ asset('images/dc-logo.png') }}"   alt="Logo dc">

            <ul>
                <li><a href="{{ url('/characters') }}">Characters</a></li>
                <li><a href="{{ url('/comics') }}">Comics</a></li>
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
    </footer>
</body>

</html>