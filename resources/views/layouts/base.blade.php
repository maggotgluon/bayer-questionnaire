<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @hasSection('title')

            <title>@yield('title') - {{ config('app.name') }}</title>
        @else
            <title>{{ config('app.name') }}</title>
        @endif

        <!-- Favicon -->
		<link rel="shortcut icon" href="{{ url(asset('favicon.ico')) }}">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.4/lottie.min.js"></script>

        @wireUiScripts

        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        @livewireStyles
        @livewireScripts

        @livewireChartsScripts

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>

    <body>
        @yield('body')
    </body>
</html>
