@extends('layouts.landing')

@section('content')
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
    <header id="home" class="header-area pt-100">
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
@endsection