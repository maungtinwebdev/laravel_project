<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
      <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">

    <style>
        .style {
            max-height: 80%;
            overflow-y: scroll;
            scroll-behavior: smooth;
            stroke-opacity: 0.5;
            scrollbar-face-color: gold
        }
        ::-webkit-scrollbar {
            display: none;
        }






        /* label {
            display: block;
            position: absolute;
            top: 50%;
            left: 50%;
            width: 280px;
            height: 350px;
            perspective: 1000px;
            transform-style: preserve-3d;
            transform: translate(-50%, -50%);
            cursor: pointer;
        }

        .flip-card {
            position: relative;
            width: 100%;
            height: 100%;
            transform-style: preserve-3d;
            transition: all 0.5s ease-in-out;
            z-index: 1;
        }

        .flip-card .front,
        .flip-card .back {
            position: absolute;
            width: 100%;
            height: 100%;
            text-align: center;
            background: #fff;
            backface-visibility: hidden;
            border-radius: 0 20px 0 20px;
            box-shadow: 0 20px 20px rgba(50, 60, 60, 0.2);
        }

        .flip-card .back {
            transform: rotateY(180deg);
            color: #000;
            background: #fff;
            box-shadow: 0 20px 20px rgba(50, 60, 60, 0.2);
        } */

        /* label:hover .flip-card {
            transform: rotateY(2deg);
            box-shadow: 0 20px 20px rgba(50, 60, 60, 0.2);
        } */

        /* input {
            display: none;
        } */

        :checked + .flip-card {
            transform: rotateY(-180deg);
        }
        label:hover :checked + .flip-card {
            transform: rotateY(-180deg);
            box-shadow: 0 20px 20px rgba(255, 255, 255, 0.2);
        }

        /* .front img {
            width: 110px;
            height: 110px;
            margin: 30px 0 20px 0;
            border-radius: 50%;
        } */

        /* .front h1 {
            font-size: 30px;
            color: #499bef;
            margin: 0;
        }
        .front h2 {
            font-size: 18px;
            color: #4e699d;
            margin: 12px 0 12px 0;
        }

        .front b {
            font-size: 14px;
            color: #424752;
            margin: 0 0 35px 0;
            display: block;
        }

        .front p,
        .back .click {
            font-size: 18px;
            font-weight: 600;
        }

        .back h1 {
            color: #424752;
            margin: 30px 0 0 0;
        }

        hr {
            width: 180px;
            margin: 15px auto 10px auto;
        }

        .back p {
            font-size: 16px;
            color: #000;
            padding: 0 18px;
            line-height: 30px;
            text-align: center;
            margin: 0 auto;
        } */




        .marquee-w {
            position: relative;
            display: block;
            width: 300px;
            height: 140px;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            overflow: hidden;
        }
        .marquee {
            position: absolute;
            display: block;
            margin: auto auto;
            white-space: nowrap;
            overflow: hidden;
            min-width: 100%;
            height: 100%;
        }
        .marquee span {
            display: inline-block;
            padding-left: 100%;
            font-family: 'poppinsbold';
            text-align: center;
            -webkit-text-stroke: 1px rgb(101, 206, 233);
            white-space: nowrap;
            min-width: 100%;
            margin-top: 50px;
            height: 100%;
            line-height: 95px;
            font-size: 23px;
            animation: marquee 10s linear infinite;
        }
        .marquee2 span {
            animation-delay: 5s;
        }
        @keyframes marquee {
            0% {
                transform: translate(0, 0);
            }
            100% {
                transform: translate(-100%, 0);
            }
        }
    </style>
</head>
<body class="bg-success" style="background-image: url(https://static.vecteezy.com/system/resources/previews/003/098/572/original/stadium-football-background-at-night-free-vector.jpg);>
    <div id="app">
        <nav class="navbar navbar-dark navbar-expand-md navbar-light bg-primary shadow-sm">
            <div class="container">
                <a class="navbar-brand text-warning ms-2" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <h2 class="text-white"><a class="text-white navbar-brand" href="{{route('matchcreateshow')}}">+ Add Match </a></h2>
                <button class="navbar-toggler text-warning" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon nav-toggler-warning"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link text-warning" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-warning" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu w-25 dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
