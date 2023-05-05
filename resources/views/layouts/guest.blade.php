<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="icon" href=" {{ url('img/log.png') }} " type="image/icon type">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <style>
            .banner-image {
                background-image: url('img/fondo.png');
                background-size: cover;
            }
        </style>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans">
            <!-- Banner Image  -->
    <div class="banner-image w-80 vh-100 d-flex justify-content-center align-items-center">
        <div class="container text-center">
            <div class="row">
                <div class="col-sm-12 col-md-3">
                <a href="/">
                        <img src="{{ url('img/logo.png') }}" alt="YNv@XYZ" width="200" height="200">
                    </a>
                </div>

                <div class="col-sm-12 col-md-6">
                {{ $slot }}
                </div>

            </div>
        </div>
    </div>
    <!-- Banner Image  -->

    </body>
</html>
