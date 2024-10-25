<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gestionale Museo Piero Leonardi</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/standard.css') }}">
</head>
<body class="antialiased">

<div class="landing-page-container">

    <!-- Logo -->
    <div class="logo-container">
        <img src="{{ asset('images/sma.png') }}" alt="Logo">
    </div>

    <!-- Testo grande sopra il logo -->
    <h1 class="landing-page-header">Gestionale Museo Piero Leonardi</h1>

    <!-- Pulsanti di autenticazione -->
    <div class="auth-buttons text-center">
        @if (Route::has('login'))
            @auth
                <a href="{{ url('/dashboard') }}">Dashboard</a>
            @else
                <a href="{{ route('login') }}">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        @endif
    </div>
</div>

</body>
</html>
