<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Kuepa Test') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>

<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <header class="masthead mb-auto">
        <div class="inner">
            <h3 class="masthead-brand"></h3>
            <nav class="nav nav-masthead justify-content-center">
                @auth
                    <a class="nav-link active" href="{{ url('/home') }}">Inicio</a>
                @else
                    <a class="nav-link active" href="{{ route('home') }}">Inicio</a>
                    <a class="nav-link" href="{{ route('login') }}">Iniciar Sesión</a>

                    @if (Route::has('register'))
                        <a class="nav-link" href="{{ route('register') }}">Registrarme</a>
                    @endif
                @endauth
            </nav>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img width="500" src="{{ asset('image/bg.jpg') }}" alt="">
            </div>
        </div>
    </div>

    <main role="main" class="inner cover">
        <div id="app">
            <h1 class="cover-heading">Prueba Desarrollador Full Stack JAVASCRIPT</h1>
            <p class="lead">Kuepa ofrece streaming de sus clases virtuales en el
                LMS de la organización, que están disponibles solo para estudiantes.</p>
            <p class="lead">
                <a href="{{ route('register') }}" class="btn btn-lg btn-secondary">Registrarme!!</a>
            </p>
        </div>
    </main>

</div>


<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>

</body>
</html>
