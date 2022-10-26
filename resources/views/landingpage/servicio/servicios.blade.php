<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuerda.me | Servicios</title>

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

    <link rel="stylesheet" href="{{ asset('resources/landing-asset/css/style servicios.css')}}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel='stylesheet'>

    <script src="https://kit.fontawesome.com/e65f2cf6ae.js" crossorigin="anonymous"></script>
</head>

<body>
    <header class="header" id="inicio">
        
        <div class="search-bar">
            <div class="inputs">
                <i class="fa fa-search"></i>
                <input type="text" class="form-control " placeholder="Realizar una búsqueda...">
            </div>
        <img src="icons/Hamburguesa.svg" alt=""  class="hamburguer">
        <nav class="menu-navegacion " >
            <a href="{{ route('home')}}">Inicio</a>
            <a href=="{{ route('servicios')}}">servicio</a>
            <a href="{{ route('nosotros')}}">¿Quienes somos?</a>
            <a href="{{ route('misión')}}">Misión y vision</a>
            <a href="{{ route('contacto')}}">Contacto</a>
        </nav>
    <!--====== SERVICES PART START ======-->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <h6 class="text-primary text-uppercase font-weight-bold">Nuestros Servicios</h6>
                <h1 class="mb-4">Elige uno de nuestros paquetes </h1>
            </div>
            <div class="row">
                <div class="col-md-4 mb-5">
                    <div class="bg-secondary">
                        <div class="text-center p-4">
                            <h1 class="display-4 mb-0">
                                <small class="align-top text-muted font-weight-medium" style="font-size: 22px; line-height: 45px;">$</small>1200
                            </h1>
                        </div>
                        <div class="bg-primary text-center p-4">
                            <h3 class="m-0">Económico</h3>
                        </div>
                        <div class="d-flex flex-column align-items-center py-4">
                            <p>Biografia del difunto</p>
                            <p>1 Fotografia</p>
                            <p>Un unico codigo QR</p>
                            <p>Pensamos en tu economia</p>
                            <a href="" class="btn btn-primary py-2 px-4 my-2">Contratar Ahora</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="bg-secondary">
                        <div class="text-center p-4">
                            <h1 class="display-4 mb-0">
                                <small class="align-top text-muted font-weight-medium" style="font-size: 22px; line-height: 45px;">$</small>2000
                            </h1>
                        </div>
                        <div class="bg-primary text-center p-4">
                            <h3 class="m-0">Basico</h3>
                        </div>
                        <div class="d-flex flex-column align-items-center py-4">
                            <p>Biografia del difunto</p>
                            <p>1 Fotografia</p>
                            <p>Un unico codigo QR</p>
                            <p>1 video de un minuto </p>
                            <a href="" class="btn btn-primary py-2 px-4 my-2">Contratar Ahora</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="bg-secondary">
                        <div class="text-center p-4">
                            <h1 class="display-4 mb-0">
                                <small class="align-top text-muted font-weight-medium" style="font-size: 22px; line-height: 45px;">$</small>3000
                            </h1>
                        </div>
                        <div class="bg-primary text-center p-4">
                            <h3 class="m-0">Medium</h3>
                        </div>
                        <div class="d-flex flex-column align-items-center py-4">
                            <p>Biografia del difunto</p>
                            <p>1 Fotografia</p>
                            <p>Un unico codigo QR</p>
                            <p>1 video de 3 minutos  </p>
                            <a href="" class="btn btn-primary py-2 px-4 my-2">Contrata Ahora</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-5">
                    <div class="bg-secondary">
                        <div class="text-center p-4">
                            <h1 class="display-4 mb-0">
                                <small class="align-top text-muted font-weight-medium" style="font-size: 22px; line-height: 45px;">$</small>5000
                            </h1>
                        </div>
                        <div class="bg-primary text-center p-4">
                            <h3 class="m-0">Pro</h3>
                        </div>
                        <div class="d-flex flex-column align-items-center py-4">
                            <p>Biografia del difunto</p>
                            <p>3 Fotografias</p>
                            <p>2 codigos QR</p>
                            <p>Un video de 10 minutos </p>
                            <a href="" class="btn btn-primary py-2 px-4 my-2">Contrata Ahora</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="bg-secondary">
                        <div class="text-center p-4">
                            <h1 class="display-4 mb-0">
                                <small class="align-top text-muted font-weight-medium" style="font-size: 22px; line-height: 45px;">$</small>10,000
                            </h1>
                        </div>
                        <div class="bg-primary text-center p-4">
                            <h3 class="m-0">Premium</h3>
                        </div>
                        <div class="d-flex flex-column align-items-center py-4">
                            <p>paquete personalizado</p>
                            <p>Un video no tiene limite de tiempo</p>
                            <p>El cliente elige el numero de secciones </p>
                            <p>Genera hasta 5 codigos QR</p>
                            <a href="" class="btn btn-primary py-2 px-4 my-2">Contrata Ahora</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="bg-secondary">
                        <div class="text-center p-4">
                            <h1 class="display-4 mb-0">
                                <small class="align-top text-muted font-weight-medium" style="font-size: 22px; line-height: 45px;"></small>$$$
                            </h1>
                        </div>
                        <div class="bg-primary text-center p-4">
                            <h3 class="m-0">Extras</h3>
                        </div>
                        <div class="d-flex flex-column align-items-center py-4">
                            <p>Generar codigo QR Extra</p>
                            <p>Agregar minutos a tu video</p>
                            <p>Agregar fotografias</p>
                            <p>Agregar canciones extra</p>
                            <a href="" class="btn btn-primary py-2 px-4 my-2">Contrata Ahora</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pricing Plan End -->
    <!--====== SERVICES PART ENDS ======-->

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

    <script src="{{ asset('resources/landing-assets/js/js/menu.js')}}"></script>

</body>

</html>