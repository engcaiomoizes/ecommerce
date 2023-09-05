<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @yield('head')
</head>
<body>
    <header>
        <menu>
        <ul>
            <li><a href="#">Start</a></li>
            <li><a href="#">O nas</a></li>
            <li class="drop" id="drop"><a href="#">Oferta</a>
                <ul class="dropdown">
                    <li><a href="#">Oferta 01</a></li>
                    <li><a href="#">Oferta 02</a></li>
                    <li><a href="#">Oferta 03</a></li>
                </ul>
            </li>
            <li><a href="#">Aktualności</a></li>
            <li><a href="#">Kontakt</a></li>
        </ul>
        </menu>
    </header>
    @yield('content')
    <footer></footer>
    <script type="text/javascript">
        var drop = document.getElementById('drop');

        drop.addEventListener('mouseover', function() {
            $(".dropdown").show(300);
        });
        drop.addEventListener('mouseleave', function() {
            $(".dropdown").hide(300);
        });
    </script>
</body>
</html>