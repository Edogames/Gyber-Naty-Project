<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" onmousemove="getMousePose(event)">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <link href="{{ asset('styles/style.css') }}" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <header>
            <div class="container">
                <div class="d-flex space-between">
                    <a class="logo" href="{{ URL::route('home') }}">
                        <div class="d-flex">
                            <img style="cursor: pointer;" class="main-logo" src="{{ asset('images/logo.svg') }}" alt="">
                            <h2>Gyber.org</h2>
                        </div>
                    </a>
                    @yield('btn')
                </div>
            </div>
            
        </header>
        <div class="wrapper">
            <div class="container">
                @yield('content')
            </div>
            <footer>
                <hr>
                <div id="footer">
                    <br>
                    <div class="d-flex" id="footer-logo">
                        <img src="{{ asset('images/by.png') }}">
                        <h2>Gybernaty</h2>
                    </div>
                    <div class="icons">
                        <a href="http://" target="_blank" style="width: fit-content; height: fit-content;" rel="noopener noreferrer"><img class="icon" src="{{ asset('images/icons/reddit_icon.png') }}"></a>
                        <a href="http://" target="_blank" style="width: fit-content; height: fit-content;" rel="noopener noreferrer"><img class="icon" src="{{ asset('images/icons/medium_icon.png') }}"></a>
                        <a href="http://" target="_blank" style="width: fit-content; height: fit-content;" rel="noopener noreferrer"><img class="icon" src="{{ asset('images/icons/linked_icon.png') }}"></a>
                        <a href="http://" target="_blank" style="width: fit-content; height: fit-content;" rel="noopener noreferrer"><img class="icon" src="{{ asset('images/icons/github_icon.png') }}"></a>
                        <a href="http://" target="_blank" style="width: fit-content; height: fit-content;" rel="noopener noreferrer"><img class="icon" src="{{ asset('images/icons/twitter_icon.png') }}"></a>
                        <a href="http://" target="_blank" style="width: fit-content; height: fit-content;" rel="noopener noreferrer"><img class="icon" src="{{ asset('images/icons/discord_icon.png') }}"></a>
                    </div>
                    <br>
                </div>
                <hr>
            </footer>
        </div>

        <script src="{{ asset('script.js') }}"></script>
        <script>
            @yield('js')
        </script>
    </body>
    </div>
    <div id="area">
        <ul class="circles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
        <div class='light x2'></div>
        <div class='light x3'></div>
        <div class='light x4'></div>
        <div class='light x7'></div>
    </div>
</html>
