<!DOCTYPE html>
<html lang="es">

<head>
    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>Recuerda.me | Inicio</title>
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{ asset('resources/logo/favicon.png')}}" type="image/png">
    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{ asset('resources/landing-assets/css/bootstrap.min.css')}}">
    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="{{ asset('resources/landing-assets/css/font-awesome.min.css')}}">
    <!--====== Line Icons css ======-->
    <link rel="stylesheet" href="{{ asset('resources/landing-assets/css/LineIcons.css')}}">
    <!--====== Animate css ======-->
    <link rel="stylesheet" href="{{ asset('resources/landing-assets/css/animate.css')}}">
    <!--====== Aos css ======-->
    <link rel="stylesheet" href="{{ asset('resources/landing-assets/css/aos.css')}}">
    <!--====== Slick css ======-->
    <link rel="stylesheet" href="{{ asset('resources/landing-assets/css/slick.css')}}">
    <!--====== Flickity css ======-->
    <link rel="stylesheet" href="{{ asset('resources/landing-assets/css/flickity.min.css')}}">
    <!--====== Flickity js ======-->
    <script src="{{ asset('resources/landing-assets/js/flickity.pkgd.min.js')}}"></script>
    <!--====== Default css ======-->
    <link rel="stylesheet" href="{{ asset('resources/landing-assets/css/default.css')}}">
    <!--====== Style css ======-->
    <link rel="stylesheet" href="{{ asset('resources/landing-assets/css/style.css')}}">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/e65f2cf6ae.js" crossorigin="anonymous"></script>
</head>

<body>
    <!--====== PRELOADER PART START ======-->
    <div class="preloader">
        <div class="loader_34">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====== PRELOADER ENDS START ======-->
    <!--====== HEADER PART START ======--->
    <header class="header" id="inicio">
        <img src="icons/Hamburguesa.svg" alt=""  class="hamburguer">

    <!--Create bar navigation desktop-->
    <div class="navigation-bar desktop">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand mr-5" href="{{ route('home')}}">
                            <img src="{{ asset('resources/logo/recuerdame-logo.png') }}" alt="Logo">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>
                        <!-- Search bar START -->
                        <div class="search-bar">
                            <div class="inputs">
                                <i class="fa fa-search"></i>
                                <input type="text" class="form-control " placeholder="Realizar una búsqueda...">
                            </div>
                        </div>
                        <!-- Search bar ENDS -->
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul id="nav" class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="page-scroll" href="{{ route('home')}}">Inicio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="{{ route('servicios')}}">Servicios</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="page-scroll dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Conócenos
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('nosotros')}}">¿Quiénes somos?</a>
                                        <a class="dropdown-item" href="{{ route('misión')}}">Misión y visión </a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="{{ route('contacto')}}">Contacto</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll login" href="{{ route('login') }}"><i class="lni lni-user"></i></a>
                                </li>
                            </ul> <!-- navbar nav -->
                        </div>
                    </nav> <!-- navbar -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div>
    <!-- navigation bar desktop version --->

    <!--Create bar mobile version-->
    <div class="navigation-bar mobile display-none">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="{{ route('home')}}">
                            <img src="{{ asset('resources/logo/recuerdame-logo.png')}}" alt="Logo">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <!-- Search bar START -->
                            <div class="search-bar">
                                <div class="inputs">
                                    <i class="fa fa-search"></i>
                                    <input type="text" class="form-control " placeholder="Realizar una búsqueda...">
                                </div>
                            </div>
                            <!-- Search bar ENDS -->
                            <ul id="nav" class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="page-scroll" href="{{ route('home')}}">Inicio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="{{ route('servicios')}}">Servicios</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="{{ route('nosotros')}}">¿Quiénes somos?</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="{{ route('misión')}}">Misión y visión </a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="{{ route('contacto')}}">Contacto</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll login" href="{{ route('login')}}"><i class="lni lni-user"></i> Iniciar sesión</a>
                                </li>
                            </ul> <!-- navbar nav -->
                        </div>
                    </nav> <!-- navbar -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div>
    <!-- navigation bar mobile version -->
    <!--Header Banner-->
    <div class="header-banner d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-9 col-sm-10">
                    <div class="banner-content">
                        <h1 class="banner-title mt-10 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="2s">
                            <span>"Recordar es vivir"</span><br>Atesora un recuerdo para tus seres queridos.
                        </h1>
                        <a class="banner-contact mt-25 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="2.3s"
                            href="{{ route('servicios')}}">Saber más</a>
                    </div> <!-- banner content -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
        <div class="banner-image bg_cover hero-image">
        </div>
    </div>
    </header>
    <!--====== HEADER PART ENDS ======-->
    <!--====== ABOUT PART START ======-->
    <section id="about" class="about-area pt-80 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-image mt-50 clearfix">
                        <div class="single-image float-left">
                            <img src="{{ asset('resources/landing-assets/img/night-memories.jpg')}}" alt="Recuerdos de noches">
                        </div>
                        <div data-aos="fade-right" class="about-btn">
                            <a class="main-btn no-pointer" href="{{ route('servicios')}}"><span>24</span> Horas del día</a>
                        </div>
                        <div class="single-image image-tow float-right">
                            <img src="{{ asset('resources/landing-assets/img/old-pictures.jpg')}}" alt="Fotos viejas">
                        </div>
                    </div> <!-- about image -->
                </div>
                <div class="col-lg-6" id="conoce-mas">
                    <div class="about-content mt-45">
                        <h4 class="about-welcome">Generamos QR</h4>
                        <h3 class="about-title mt-10">Escaneándolos podrás ver Información</h3>
                            <p class="mt-25">
                                <li>Genera un código QR que direcciones al contenido multimedia de la preferencia de ustedes en
                                el cual puedan dejar grabado un último mensaje para uno o más seres queridos.<br><br></li>
                                <li>Para que eternamente permanezca vivo el recuerdo de nuestro ser querido...<br><br></li>
                                <li>Su funcionamiento es muy sencillo, escaneamos desde un dispositivo inteligente:(teléfono, tableta, PC, etc.), el  código QR, y este inmediatamente lo lee y abre directamente nuestro sistema en el cual podrá ver fotos, videos y textos de su ser queridos.<br><br></li>
                                <li>Disponible nuestros servicios las 24 hrs del día.
                            </p>
                        <a class="main-btn mt-25" href="{{ route('servicios')}}">Conocer paquetes</a>
                    </div> <!-- about content -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    <!--====== ABOUT PART ENDS ======-->

    <!--====== SERVICES PART START ======-->
    <section id="service" class="services-area pt-125 pb-130 gray-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center pb-20">
                        <h5 class="sub-title mb-15">Nuestros servicios</h5>
                        <h2 class="title">¿Qué hacemos?</h2>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="single-services text-center mt-30 wow fadeInUp border-radius-10" data-wow-duration="1.5s"
                        data-wow-delay="0.4s">
                        <div class="services-icon">
                            <i class="fa-solid fa-qrcode"></i>
                        </div>
                        <div class="services-content mt-15">
                            <h4 class="services-title">Generar código QR</h4>
                            <p class="mt-20">Almacenará los recuerdos multimedia del usuario.</p>
                        </div>
                    </div> <!-- single services -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="single-services text-center mt-30 wow fadeInUp border-radius-10" data-wow-duration="1.5s"
                        data-wow-delay="0.8s">
                        <div class="services-icon">
                            <i class="lni lni-folder"></i>
                        </div>
                        <div class="services-content mt-15">
                            <h4 class="services-title">Servicios</h4>
                            <p class="mt-20">Selecciona el paquete que se adecué a tus necesidades</p>
                        </div>
                    </div> <!-- single services -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="single-services text-center mt-30 wow fadeInUp border-radius-10" data-wow-duration="1.5s"
                        data-wow-delay="1.2s">
                        <div class="services-icon">
                            <i class="fa-solid fa-cross"></i>
                        </div>
                        <div class="services-content mt-15">
                            <h4 class="services-title">Lapida virtual</h4>
                            <p class="mt-20">Mostrará el código QR que almacenará tus recuerdos.</p>
                        </div>
                    </div> <!-- single services -->
    </section>
    <!--====== SERVICES PART ENDS ======-->

    <!--====== PROJECT PART START ======-->
    <section id="project" class="project-area pt-125 pb-130">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center pb-50">
                        <!-- <h5 class="sub-title mb-15">Featured Works</h5> -->
                        <h2 class="title">El baúl de tus recuerdos</h2>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
        </div>
        <!-- Flickity HTML init -->
        <div class="carousel"
        data-flickity='{ "imagesLoaded": true, "percentPosition": false, "autoPlay": true,
        "freeScroll": true, "wrapAround": true }'>
            <img src="{{ asset('resources/landing-assets/img/baul-fotos.jpg')}}" alt="Baúl de fotos">
            <img src="{{ asset('resources/landing-assets/img/grandma-photos.jpg')}}" alt="Abuela con fotos">
            <img src="{{ asset('resources/landing-assets/img/militares.jpg')}}" alt="Baúl de fotos">
            <img src="{{ asset('resources/landing-assets/img/carta-mano.jpg')}}" alt="Carta escrita a mano">
            <img src="{{ asset('resources/landing-assets/img/climb-mountain.jpg')}}" alt="Mujer escalando montaña">
            <img src="{{ asset('resources/landing-assets/img/cancer-mama.jpg')}}" alt="Cinta cancer de mama">
            <img src="{{ asset('resources/landing-assets/img/fotos-viejas.jpg')}}" alt="Fotos antiguas">
        </div>
    </section>
    <!--====== PROJECT PART ENDS ======--->

    <!--====== FOOTER PART START ======-->
    <footer id="footer" class="footer-area">
        <div class="footer-widget pt-80 pb-130">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-5 col-sm-8">
                        <div class="footer-logo mt-20">
                            <a href="{{ route('home')}}">
                                <img src="{{ asset('resources/logo/recuerdame-logo.png')}}" alt="Logo">
                            </a>
                            <ul class="footer-info">
                                <li>
                                    <div class="single-info">
                                        <div class="info-icon">
                                            <i class="lni-phone-handset"></i>
                                        </div>
                                        <div class="info-content">
                                            <p>+55-24-54-38-96</p>
                                        </div>
                                    </div> <!-- single info -->
                                </li>
                                <li>
                                    <div class="single-info">
                                        <div class="info-icon">
                                            <i class="lni-envelope"></i>
                                        </div>
                                        <div class="info-content">
                                            <p>empgalioso@gmail.com</p>
                                        </div>
                                        <div class="info-content">
                                            <p>emprecuerda.me@gmail.com</p>
                                        </div>
                                    </div> <!-- single info -->
                                </li>
                            </ul>
                            <ul class="footer-social mt-20">
                                <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                                <li><a href="#"><i class="lni-google"></i></a></li>
                                <li><a href="#"><i class="lni-instagram"></i></a></li>
                            </ul>
                        </div> <!-- footer logo -->
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="footer-link mt-45">
                            <div class="f-title">
                                <h4 class="title">Contacto</h4>
                            </div>
                            <ul class="mt-15">
                                <li><a href="{{ route('home')}}">Inicio</a></li>
                                <li><a href="{{ route('servicios')}}">Servicios</a></li>
                                <li><a href="{{ route('nosotros')}}">¿Quiénes somos?</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="footer-link mt-45">
                            <div class="f-title">
                                <h4 class="title">Acerca de la empresa</h4>
                            </div>
                            <ul class="mt-15">
                                <li><a href="{{ route('misión')}}">Misión</a></li>
                                <li><a href="{{ route('misión')}}">Visión</a></li>
                                <li><a href="{{ route('contacto')}}">Contacto</a></li>
                            </ul>
                        </div>
                    </div>

                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer widget -->
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright text-center">
                            <p>@Copyright 2022-Galioso</p>
                        </div> <!-- copyright -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- copyright-area -->
    </footer>
    <!---====== FOOTER PART ENDS ======-->

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
            //Fire it when the page first loads:
            // alterClass();
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
  <!--====== Menu js ======-->
    <script src="{{ asset('resources/landing-assets/js/menu.js')}}"></script>

</body>

</html>