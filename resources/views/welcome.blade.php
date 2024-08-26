<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Gestionale Museo Pietro Leonardi</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            html {
    line-height: 1.5;
    -webkit-text-size-adjust: 100%;
    font-family: Figtree, sans-serif;
    height: 100%; /* Assicurati che l'html occupi l'intera altezza */
}

html, body {
    margin: 0;
    padding: 0;
    height: 100%;
    overflow-x: hidden;
    box-sizing: border-box;
}

body {
    margin: 0;
    line-height: inherit;
    height: 100%; /* Assicurati che il body occupi l'intera altezza */
}

.container {
    min-height: 100vh;
    height: 100%; /* Assicurati che il container prenda l'intera altezza della viewport */
    box-sizing: border-box;
}

.relative {
    position: relative;
    height: 100%; /* Assicurati che l'elemento prenda l'intera altezza del genitore */
}

.sm\:flex {
    display: flex;
    height: 100%; /* Assicurati che l'elemento prenda l'intera altezza del genitore */
}

.sm\:justify-center {
    justify-content: center;
}

.sm\:items-center {
    align-items: center;
}

h1 {
    font-size: 1.25rem;
    line-height: 1.75rem;
    font-weight: bold;
}

a {
    color: inherit;
    text-decoration: inherit;
}

img {
    display: block;
    max-width: 100%;
    height: auto;
}

button, input {
    margin: 0;
    padding: 0;
    font-family: inherit;
    font-size: 100%;
}

.mx-auto {
    margin-left: auto;
    margin-right: auto;
}

.p-6 {
    padding: 1.5rem;
}

.lg\:p-8 {
    padding: 2rem;
}

.flex {
    display: flex;
}

.justify-center {
    justify-content: center;
}

.mb-8 {
    margin-bottom: 2rem;
}

.mt-6 {
    margin-top: 1.5rem;
}

.ml-4 {
    margin-left: 1rem;
}

.font-semibold {
    font-weight: 600;
}

.text-xl {
    font-size: 1.25rem;
    line-height: 1.75rem;
}

.text-4xl {
    font-size: 4rem;
    line-height: 6.5rem;
}

.text-2xl {
    font-size: 2.5rem;
    line-height: 3.5rem;
}

.text-center {
    text-align: center;
}

.text-gray-600 {
    --tw-text-opacity: 1;
    color: rgb(75 85 99 / var(--tw-text-opacity));
}

.text-gray-900 {
    --tw-text-opacity: 1;
    color: rgb(17 24 39 / var(--tw-text-opacity));
}

.text-white {
    --tw-text-opacity: 1;
    color: rgb(255 255 255 / var(--tw-text-opacity));
}

.hover\:text-gray-900:hover {
    --tw-text-opacity: 1;
    color: rgb(17 24 39 / var(--tw-text-opacity));
}

.dark\:text-gray-400 {
    --tw-text-opacity: 1;
    color: rgb(156 163 175 / var(--tw-text-opacity));
}

.dark\:text-white {
    --tw-text-opacity: 1;
    color: rgb(255 255 255 / var(--tw-text-opacity));
}

.dark\:hover\:text-white:hover {
    --tw-text-opacity: 1;
    color: rgb(255 255 255 / var(--tw-text-opacity));
}

.rounded-md {
    border-radius: 0.375rem;
}

.bg-gray-100 {
    --tw-bg-opacity: 1;
    background-color: rgb(243 244 246 / var(--tw-bg-opacity));
}

.dark\:bg-gray-900 {
    --tw-bg-opacity: 1;
    background-color: rgb(17 24 39 / var(--tw-bg-opacity));
}

.selection\:bg-red-500 *::selection {
    --tw-bg-opacity: 1;
    background-color: rgb(239 68 68 / var(--tw-bg-opacity));
}

.selection\:text-white *::selection {
    --tw-text-opacity: 1;
    color: rgb(255 255 255 / var(--tw-text-opacity));
}

.dark\:bg-dots-lighter {
    background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E");
}

.focus\:outline:focus {
    outline-style: solid;
}

.focus\:outline-2:focus {
    outline-width: 2px;
}

.focus\:rounded-sm:focus {
    border-radius: 0.125rem;
}

.focus\:outline-red-500:focus {
    outline-color: #ef4444;
}

@media (min-width: 640px) {
    .sm\:flex {
        display: flex;
    }

    .sm\:justify-center {
        justify-content: center;
    }

    .sm\:justify-between {
        justify-content: space-between;
    }
}

@media (prefers-color-scheme: dark) {
    .dark\:bg-gray-900 {
        --tw-bg-opacity: 1;
        background-color: rgb(17 24 39 / var(--tw-bg-opacity));
    }

    .dark\:text-white {
        --tw-text-opacity: 1;
        color: rgb(255 255 255 / var(--tw-text-opacity));
    }

    .dark\:hover\:text-white:hover {
        --tw-text-opacity: 1;
        color: rgb(255 255 255 / var(--tw-text-opacity));
    }
}

        </style>

    </head>
    <body class="antialiased">

        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">


            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <!-- Testo grande sopra il logo -->
                <div class="flex justify-center mb-8">
                    <h1 class="text-4xl font-bold text-white text-center">Gestionale Museo Pietro Leonardi</h1>
                </div>

                <div class="flex justify-center">
                    <img src="images/logoBG.png" alt="Logo" class="w-32 h-auto">
                </div>
                <br><br>

                <div class="flex justify-center mb-8">
                    @if (Route::has('login'))
                        <div class="text-center">
                            @auth
                                <a href="{{ url('/dashboard') }}" class="font-semibold text-2xl text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="font-semibold text-2xl text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="ml-4 font-semibold text-2xl text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif
                </div>

            </div>
        </div>
    </body>
    </html>
