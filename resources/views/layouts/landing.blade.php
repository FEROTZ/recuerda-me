<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{ asset('resources/logo/favicon.png') }}" type="image/png">
    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{ asset('resources/landing-assets/css/bootstrap.min.css') }}">
    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="{{ asset('resources/landing-assets/css/font-awesome.min.css') }}">
    <!--====== Line Icons css ======-->
    <link rel="stylesheet" href="{{ asset('resources/landing-assets/css/LineIcons.css') }}">
    <!--====== Animate css ======-->
    <link rel="stylesheet" href="{{ asset('resources/landing-assets/css/animate.css') }}">
    <!--====== Aos css ======-->
    <link rel="stylesheet" href="{{ asset('resources/landing-assets/css/aos.css') }}">
    <!--====== Flickity css ======-->
    <link rel="stylesheet" href="{{ asset('resources/landing-assets/css/flickity.min.css') }}">
    <!--====== Flickity js ======-->
    <script src="{{ asset('resources/landing-assets/js/flickity.pkgd.min.js') }}"></script>
    <!--====== Font awesome ======-->
    <script src="https://kit.fontawesome.com/e65f2cf6ae.js" crossorigin="anonymous"></script>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('resources/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('resources/landing-assets/css/style.css') }}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <header id="home" class="py-4 grid grid-cols-6 gap-4">
        <div class="search-bar col-start-2 col-span-4">
            <div class="inputs">
                <i class="fa fa-search ml-1 text-zinc-600"></i>
                <x-jet-input id="search" class="block w-full indent-7 search text-zinc-900 placeholder:text-zinc-600"
                    type="text" name="search" placeholder="Realizar una búsqueda..." autofocus />
            </div>
        </div>
        @extends('layouts.navbar')
    </header>
    @yield('content')
    @extends('layouts.footer')
    
    <!---====== jquery js ======-->
    <script src="{{ asset('resources/landing-assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
    <script src="{{ asset('resources/landing-assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <!--====== Bootstrap js ======-->
    <script src="{{ asset('resources/landing-assets/js/bootstrap.min.js') }}"></script>
    <!--====== WOW js ======-->
    <script src="{{ asset('resources/landing-assets/js/wow.min.js') }}"></script>
    <!--====== Slick js ======-->
    <script src="{{ asset('resources/landing-assets/js/slick.min.js') }}"></script>
    <!--====== Scrolling Nav js ======-->
    <script src="{{ asset('resources/landing-assets/js/scrolling-nav.js') }}"></script>
    <script src="{{ asset('resources/landing-assets/js/jquery.easing.min.js') }}"></script>
    <!--====== Aos js ======-->
    <script src="{{ asset('resources/landing-assets/js/aos.js') }}"></script>
    <!--====== Main js ======-->
    <script src="{{ asset('resources/landing-assets/js/main.js') }}"></script>
    @yield('scripts')
    {{-- <script src="{{ asset('resources/landing-assets/js/menu.js')}}"></script> --}}
</body>

</html>
