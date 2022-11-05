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
                    <div class="head-btn">
                        @yield('btn')
                    </div>
                    @if (Route::current()->getName() != 'sale')
                        <a href="{{ URL::route('sale') }}" class="btn">Private Sale</a>
                    @else
                        <a href="{{ URL::route('home') }}" class="btn">Home</a>
                    @endif
                    <div id="menu-btn" onclick="toggleMenu()">
                        <div class="stick"></div>
                        <div class="stick middle"></div>
                        <div class="stick last"></div>
                    </div>
                    <div class="menu">
                        <a href="{{ URL::route('home') }}">
                            <h2 id="home">Home</h2>
                        </a>
                        <a href="{{ URL::route('philosophy') }}">
                            <h2 id="paper">Philosophy</h2>
                        </a>
                        <a href="{{ asset('pdf/info.pdf') }}" target="_blank">
                            <h2 id="paper">Lite Paper</h2>
                        </a>
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
                    <button onclick="toggleMap()" class="btn">Road map</a>
                    <br>
                </div>
                <hr>
                <div id="road-map">
                    <div class="d-flex space-between">
                        <h3 class="square-text">
                            <div class="text-box">
                                Сreating private
                                repositories
                            </div>
                            <div class="text-box">
                                Creating <span>Gyber</span>
                                Token Contract
                            </div>
                            <div class="text-box">
                                Organization of the
                                main functions of
                                the experiment
                            </div>
                            <div class="text-box">
                                Privat sale of <span>Gyber</span>
                                utility token
                            </div>
                            <div class="text-box">
                                Development of the
                                functional part of the
                                distributed creative
                                platform.
                            </div>
                            <div class="date">
                                2022-2023
                                <div></div>
                            </div>
                        </h3>
                        <h3 class="square-text">
                            <div class="text-box">
                                Public sale of <span>Gyber</span>
                                utility token
                            </div>
                            <div class="text-box">
                                Сreating public
                                repositories
                            </div>
                            <div class="text-box">
                                Starting Test net of
                                <span>Gyber</span> BlockChain
                            </div>
                            <div class="text-box">
                                Publication the
                                "Basic Theory of
                                Cybersociety"
                            </div>
                            <div class="text-box">
                                Сreating a cyber-social
                                corporation using existing
                                experiment resources
                            </div>
                            <div class="date">
                                2024-2025
                                <div></div>
                            </div>
                        </h3>
                        <h3 class="square-text">
                            <div class="text-box">
                                Сreation of a new global
                                economic model -
                                macroeconomic dao
                            </div>
                            <div class="text-box">
                                Сreating a decentalzed
                                storage based on mobile
                                and stationary nodes
                            </div>
                            <div class="text-box">
                                Сreating virtual machine
                                based on mobile and
                                stationary nodes
                            </div>
                            <div class="text-box">
                                Publication  external api,
                                for interaction within the
                                extensible platform
                            </div>
                            <div class="date">
                                2026-2027
                                <div></div>
                            </div>
                        </h3>
                    </div>
                    <div class="bottom-border">
                        <div></div>
                    </div>
                </div>
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
