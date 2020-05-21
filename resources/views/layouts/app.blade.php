<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    {{-- Styles --}}
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">


    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Jost&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

</head>

<body>

    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">

            <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon">teste</span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                    @endif
                    @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
    <header class="header-bg">
        <div class="menu">
            <div class="logo">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
            </div>
            <div class="nav">
                <ul>
                    <li><a href="">Produtos</a></li>
                    <li><a href="">Equipamentos</a></li>
                    <li><a href="">Entre em contato</a></li>
                </ul>
            </div>
            <div class="menu-option">
                <a  class="material-icons" href="{{ route('login') }}">account_circle</a>
                <a  class="material-icons" href="{{ route('equipamentos') }}">local_grocery_store</a>
            </div>


        </div>

    </header>


    <div>
        <main class="py-4">
            @yield('content')
        </main>
    </div>

    {{-- <footer class="footer">
        <div class="footer-container">
            <div class="footer-item logo">
                <p> PI 3 - SEMESTRE</p>
            </div>
            <div class="footer-item medias">
                <ul>
                    <i class="fa fa-camera-retro"></i> fa-camera-retro
                    <li><i class="fab fa-instagram"></i></li>
                </ul>
            </div>
            <div class="footer-item about">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore reiciendis, perferendis nobis nisi
                ipsam sint ad magnam quo incidunt eius. Quibusdam veritatis sed, repellat voluptas deserunt non
                exercitationem nemo facere!
            </div>
        </div>
        <div class="footer-copright">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa iusto vitae optio temporibus.
        </div>
    </footer> --}}


</body>

</html>
