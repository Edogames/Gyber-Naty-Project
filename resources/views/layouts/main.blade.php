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
                        <a href="{{ asset('pdf/Philosophy.pdf') }}" target="_blank">
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
                    <button onclick="toggleMap()" class="btn">Close</button>
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
                <div id="road-map">
                    <h1 style="width: 100%; text-align: center; font-family: 'Grape Nuts'; color: #90AADB; font-size: 50px; font-weight: 200;">Road map</h1>
                    <div class="rm-container">
                        <div class="d-flex space-between">
                            <h3 class="square-text">
                                <div class="card-container">
                                    <div class="text-box">
                                        Сreating private<br>
                                        repositories
                                    </div>
                                    <div class="text-box">
                                        Creating <span>Gyber</span><br>
                                        Token Contract
                                    </div>
                                    <div class="text-box">
                                        Organization of the<br>
                                        main functions of <br>
                                        the experiment
                                    </div>
                                    <div class="text-box">
                                        Privat sale of <span>Gyber</span> <br>
                                        utility token
                                    </div>
                                    <div class="text-box">
                                        Development of the <br>
                                        functional part of the <br>
                                        distributed creative <br>
                                        platform.
                                    </div>
                                </div> <br>
                                <div class="date">
                                    2022-2023
                                    <div></div>
                                </div>
                            </h3>
                            <h3 class="square-text">
                                <div class="card-container">
                                    <div class="text-box">
                                        Public sale of <span>Gyber</span> <br>
                                        utility token
                                    </div>
                                    <div class="text-box">
                                        Сreating public <br>
                                        repositories
                                    </div>
                                    <div class="text-box">
                                        Starting Test net of <br>
                                        <span>Gyber</span> BlockChain
                                    </div>
                                    <div class="text-box">
                                        Publication the <br>
                                        "Basic Theory of <br>
                                        Cybersociety"
                                    </div>
                                    <div class="text-box">
                                        Сreating a cyber-social <br>
                                        corporation using existing <br>
                                        experiment resources
                                    </div> 
                                </div>
                                    <br>
                                <div class="date">
                                    2024-2025
                                    <div></div>
                                </div>
                            </h3>
                            <h3 class="square-text">
                                <div class="card-container">
                                    <div class="text-box">
                                        Сreation of a new global <br>
                                        economic model - <br>
                                        macroeconomic dao
                                    </div>
                                    <div class="text-box">
                                        Сreating a decentalzed <br>
                                        storage based on mobile <br>
                                        and stationary nodes
                                    </div>
                                    <div class="text-box">
                                        Сreating virtual machine <br>
                                        based on mobile and <br>
                                        stationary nodes
                                    </div>
                                    <div class="text-box">
                                        Publication  external api, <br>
                                        for interaction within the <br>
                                        extensible platform
                                    </div>
                                </div>
                                <br>
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
            <img src="{{ asset('LOGO_1.svg') }}" alt="" srcset="">
            <li></li>
            <img src="{{ asset('LOGO_1.svg') }}" alt="" srcset="">
            <img src="{{ asset('LOGO_1.svg') }}" alt="" srcset="">
            <li></li>
            <li></li>
            <img src="{{ asset('LOGO_1.svg') }}" alt="" srcset="">
        </ul>
        <div class='light x2'></div>
        <div class='light x3'></div>
        <div class='light x4'></div>
        <div class='light x7'></div>
    </div>
</html>
