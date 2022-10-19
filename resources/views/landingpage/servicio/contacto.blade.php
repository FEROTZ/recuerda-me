<!DOCTYPE html>
<html lang="es">

<head>
    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>Recuerda.me | Contacto</title>
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
    <!--====== Slick css ======-->
    <link rel="stylesheet" href="{{asset('resources/landing-assets/css/slick.css')}}">
    <!--====== Default css ======-->
    <link rel="stylesheet" href="{{asset('resources/landing-assets/css/default.css')}}">
    <!--====== Style css ======-->
    <link rel="stylesheet" href="{{asset('resources/landing-assets/css/style.css')}}">
</head>

<body>
   <!--====== HEADER PART START ======--->
   <header id="home" class="header-area pt-100">
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
    </div> 
    <!-- navigation bar mobile version -->
    <!--Header Banner-->

    <!--====== CONTACT PART START ======-->
    <section id="contact" class="contact-area pt-125 pb-130 gray-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center pb-20">
                        <h5 class="sub-title mb-15">Contáctanos</h5>
                        <h2 class="title">Ponerse en contacto desde:</h2>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-form">
                        <form id="contact-form" action="#" method="post" data-toggle="validator">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="single-form form-group">
                                        <input type="text" name="name" placeholder="Nombre"
                                            data-error="Nombre es requerido" required="required">
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- single form -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form form-group">
                                        <input type="email" name="email" placeholder="Correo electrónico"
                                            data-error="Validar correo electrónico" required="required">
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- single form -->
                                </div>
                                <!-- <div class="col-md-6">
                                    <div class="single-form form-group">
                                        <input type="text" name="phone" placeholder="Numero de teléfono"
                                            data-error="Numero de teléfono es requerido" required="required">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div> -->
                                <div class="col-md-12">
                                    <div class="single-form form-group">
                                        <textarea placeholder="Mensaje" name="message"
                                            data-error="Por favor escriba su mensaje" required="required"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- single form -->
                                </div>
                                <p class="form-message"></p>
                                <div class="col-md-12">
                                    <div class="single-form form-group text-center">
                                        <button type="submit" class="main-btn">Enviar mensaje</button>
                                    </div> <!-- single form -->
                                </div>
                            </div> <!-- row -->
                        </form>
                    </div> <!-- row -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    <!--====== CONTACT PART ENDS ======-->
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