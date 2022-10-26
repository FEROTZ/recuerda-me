@extends('layouts.landing')
@section('content')
    <section id="team" class="team-area pt-125">
        <div class="container">
            <div class="row justify-content-center ma-to5">
                <div class="col-lg-6">
                    <div class="section-title text-center pb-20">
                        <h6 class="text-primary text-uppercase font-weight-bold">Conócenos</h6>
                        <h1 class="mb-4">¿Quien somos?</h1>
                        <p>
                            Recuerda.me es una empresa digital 100% mexicana e innovadora.
                            Ofrecemos un servicio digital fácil de usar para que las familias puedan subir,
                            almacenar y compartir fotos, videos, audios y textos en un solo lugar. Todo a traves de la
                            opción de escanear un código QR que te permite acceder a los recuerdos en cualquier momento.
                        </p>
                    </div>
                </div>
            </div>
        </div> <!-- container -->
    </section>
    <section id="project" class="project-area pt-125 pb-130">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center pb-50">
                        <!-- <h5 class="sub-title mb-15">Featured Works</h5> -->
                        <h2 class="title">Conoce nuestro trabajo</h2>
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
@endsection