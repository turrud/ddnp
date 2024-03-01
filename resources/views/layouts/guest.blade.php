<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="shortcut icon" href="https://res.cloudinary.com/djzee3t99/image/upload/v1709273130/ddn/img/logo/logo_ase2ly.png" type="image/x-icon">

        <!-- Fonts -->

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
            body {
                font-family: 'Times New Roman';
            }
        </style>
    </head>
    <body>
        <div class="f text-gray-900 antialiased">
            {{ $slot }}
        </div>
    </body>
</html>
