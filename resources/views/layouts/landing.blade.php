<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <!--====== Favicon Icon ======-->
        <link rel="shortcut icon" href="{{ asset('resources/logo/favicon.png')}}" type="image/png">
        <!--====== Bootstrap css ======-->
        <link rel="stylesheet" href="{{asset('resources/landing-assets/css/bootstrap.min.css')}}">
        <!--====== Fontawesome css ======-->
        <link rel="stylesheet" href="{{asset('resources/landing-assets/css/font-awesome.min.css')}}">
        <!--====== Line Icons css ======-->
        <link rel="stylesheet" href="{{asset('resources/landing-assets/css/LineIcons.css')}}">
        <!--====== Animate css ======-->
        <link rel="stylesheet" href="{{asset('resources/landing-assets/css/animate.css')}}">
        <!--====== Aos css ======-->
        <link rel="stylesheet" href="{{asset('resources/landing-assets/css/aos.css')}}">
        <!--====== Flickity css ======-->
        <link rel="stylesheet" href="{{ asset('resources/landing-assets/css/flickity.min.css')}}">
        <!--====== Flickity js ======-->
        <script src="{{ asset('resources/landing-assets/js/flickity.pkgd.min.js')}}"></script>
        <!--====== Style css ======-->
        <link rel="stylesheet" href="{{asset('resources/landing-assets/css/style.css')}}">
        <!--====== Font awesome ======-->
        <script src="https://kit.fontawesome.com/e65f2cf6ae.js" crossorigin="anonymous"></script>
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('resources/css/style.css')}}">
    </head>
    <body>
      <header id="home" class="header-area pt-100">
        @extends('layouts.navbar')
      </header>
      @yield('content')
      @extends('layouts.footer')

      <!---====== jquery js ======-->
      <script src="{{ asset('resources/landing-assets/js/vendor/modernizr-3.6.0.min.js')}}"></script>
      <script src="{{ asset('resources/landing-assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
      <script>
          jQuery(document).ready(function ($) {
              var alterClass = function () {
                  var ww = document.body.clientWidth;
                  if (ww <= 991) {
                      $('.desktop').addClass('display-none');
                      $('.mobile').removeClass('display-none');
                  } else if (ww > 991) {
                      $('.desktop').removeClass('display-none');
                      $('.mobile').addClass('display-none');
                  };
              };
              $(window).resize(function () {
                  alterClass();
              });
          });
      </script>

      <!--====== Bootstrap js ======-->
      <script src="{{ asset('resources/landing-assets/js/bootstrap.min.js')}}"></script>
      <!--====== WOW js ======-->
      <script src="{{ asset('resources/landing-assets/js/wow.min.js')}}"></script>
      <!--====== Slick js ======-->
      <script src="{{ asset('resources/landing-assets/js/slick.min.js')}}"></script>
      <!--====== Scrolling Nav js ======-->
      <script src="{{ asset('resources/landing-assets/js/scrolling-nav.js')}}"></script>
      <script src="{{ asset('resources/landing-assets/js/jquery.easing.min.js')}}"></script>
      <!--====== Aos js ======-->
      <script src="{{ asset('resources/landing-assets/js/aos.js')}}"></script>
      <!--====== Main js ======-->
      <script src="{{ asset('resources/landing-assets/js/main.js')}}"></script>
    </body>
</html>
