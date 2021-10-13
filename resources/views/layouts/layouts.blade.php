<!doctype html>
<html lang="ru" class="scroll-behavior">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="email=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>MediaShop24 - @yield('title')</title>
    <link rel="manifest" href="{{ asset('manifest.webmanifest') }}">
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <link rel="icon" href="{{ asset('icon.svg') }}" type="image/svg+xml">
    <link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="preload" href="{{ asset('fonts/ttnorms-medium.woff2') }}" as="font" type="font/woff2" crossorigin="anonymous">

    <script defer src="{{ asset('js/app.js') }}"></script>
    <script defer src="{{ asset('js/common.js') }}"></script>
    @yield('head-js')
    <link href="{{ asset('css/common.css') }}" rel="stylesheet">
    @yield('head-css')
</head>
<body @yield('style-body')>
<div id="app">
    @yield('content')
</div>
</body>
</html>
