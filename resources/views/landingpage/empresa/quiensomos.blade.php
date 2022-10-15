<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuerda.me | Quienes somos</title>


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
    <!--====== Default css ======-->
    <link rel="stylesheet" href="{{ asset('resources/landing-assets/css/default.css')}}">
    <!--====== Style css ======-->
    <link rel="stylesheet" href="{{ asset('resources/landing-assets/css/style.css')}}">
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
    <header id="home" class="header-area pt-100"></header>

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
                        </nav>
                    <!-- navbar -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- navigation bar desktop version --->

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
                                    <input type="text" class="form-control " placeholder="Realizar una busqueda...">
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
                                </ul>
                                 <!-- navbar nav -->
                        </div>
                        <!-- <div class="navbar-btn ml-20 d-none d-sm-block">
                                <a class="main-btn" href="login.html"><i class="lni lni-user"></i> Iniciar sesión</a>
                            </div> -->
                    </nav> <!-- navbar -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- navigation bar mobile version -->
    <!---====== TEAM PART START ======-->
    <section id="team" class="team-area pt-125 pb-130 gray-bg">
        <div class="container">
            <div class="row justify-content-center ma-to5">
                <div class="col-lg-6">
                    <div class="section-title text-center pb-20">
                        <h5 class="sub-title mb-15">¿Quien somos?</h5>
                        <!-- <br> -->
                        <p>
                            Recuerda.me es una empresa digital 100% mexicana e innovadora.
                            Ofrecemos un servicio digital fácil de usar para que las familias puedan subir,
                            almacenar y compartir fotos, videos, audios y textos en un solo lugar. Todo a traves de la
                            opción de escanear un código QR que te permite acceder a los recuerdos en cualquier momento.
                            <!-- encargada de recobrar y almacenar momentos y recuerdos a las familias que han perdido a un
                            ser querido o quieren dejar una parte de ellos a través del uso de la tecnología. -->
                        </p>
                        <!-- <br> -->
                        <h2 class="title mt-5">los expertos diseñadores</h2>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-team text-center mt-30 wow fadeInUp" data-wow-duration="1.5s"
                        data-wow-delay="0.4s">
                        <div class="team-image">
                            <img src="../assets/images/team/Fernando.png" alt="Team">
                        </div>
                        <div class="team-content">
                            <h4 class="team-name"><a href="#">Luis Fernando Cortés Guerrero</a></h4>
                            <span class="sub-title">Scrum master</span>
                            <ul class="social mt-25">
                                <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                                <li><a href="#"><i class="lni-linkedin-original"></i></a></li>
                            </ul>
                        </div>
                    </div> <!-- single team -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-team text-center mt-30 wow fadeInUp" data-wow-duration="1.5s"
                        data-wow-delay="0.8s">
                        <div class="team-image">
                            <img src="../assets/images/team/RG.jpg" alt="Team">
                        </div>
                        <div class="team-content">
                            <h4 class="team-name"><a href="#">Ricardo Gama Salgado</a></h4>
                            <span class="sub-title">Tester</span>
                            <ul class="social mt-25">
                                <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                                <li><a href="#"><i class="lni-linkedin-original"></i></a></li>
                            </ul>
                        </div>
                    </div> <!-- single team -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-team text-center mt-30 wow fadeInUp" data-wow-duration="1.5s"
                        data-wow-delay="1.2s">
                        <div class="team-image">
                            <img src="../assets/images/team/jess.jpeg" alt="Team">
                        </div>
                        <div class="team-content">
                            <h4 class="team-name"><a href="#">Jessica Mariel Martinez Altamirano</a></h4>
                            <span class="sub-title">Analista</span>
                            <ul class="social mt-25">
                                <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                                <li><a href="#"><i class="lni-linkedin-original"></i></a></li>
                            </ul>
                        </div>
                    </div> <!-- single team -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-team text-center mt-30 wow fadeInUp" data-wow-duration="1.5s"
                        data-wow-delay="1.6s">
                        <div class="team-image">
                            <img src="../assets/images/team/kev.jpeg" alt="Team">
                        </div>
                        <div class="team-content">
                            <h4 class="team-name"><a href="#">Kevin Brayan Gutierrez Vargas</a></h4>
                            <span class="sub-title">Programador</span>
                            <ul class="social mt-25">
                                <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                                <li><a href="#"><i class="lni-linkedin-original"></i></a></li>
                            </ul>
                        </div>
                    </div> <!-- single team -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    <!--====== TEAM PART ENDS ======-->
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
    <!--====== jquery js ======-->
    <script src="{{ asset('resources/landing-assets/js/vendor/modernizr-3.6.0.min.js')}}"></script>
    <script src="{{ asset('resources/landing-assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script>
        jQuery(document).ready(function($) {
            var alterClass = function() {
                var ww = document.body.clientWidth;
                if (ww <= 991) {
                    $('.desktop').addClass('display-none');
                    $('.mobile').removeClass('display-none');
                } else if (ww > 991) {
                    $('.desktop').removeClass('display-none');
                    $('.mobile').addClass('display-none');
                };
            };
            $(window).resize(function(){
                alterClass();
            });
            //Fire it when the page first loads:
            alterClass();
        });
    </script>
    <!---====== Bootstrap js ======-->
    <script src="{{ asset('resources/landing-assets/js/bootstrap.min.js')}}"></script>
    <!---====== WOW js ======-->
    <script src="{{ asset('resources/landing-assets/js/wow.min.js')}}"></script>
    <!---====== Slick js ======-->
    <script src="{{ asset('resources/landing-assets/js/slick.min.js')}}"></script>
    <!---====== Scrolling Nav js ======-->
    <script src="{{ asset('resources/landing-assets/js/scrolling-nav.js')}}"></script>
    <script src="{{ asset('resources/landing-assets/js/jquery.easing.min.js')}}"></script>
    <!---====== Aos js ======-->
    <script src="{{ asset('resources/landing-assets/js/aos.js')}}"></script>
    <!--====== Main js ======-->
    <script src="{{ asset('resources/landing-assets/js/main.js')}}"></script>
</body>

</html>