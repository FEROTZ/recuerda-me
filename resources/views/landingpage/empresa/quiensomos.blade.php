@extends('layouts.landing')
@section('content')
    <section id="team" class="team-area pt-125">
        <div class="container">
            <div class="row justify-content-center ma-to5">
                <div class="col-lg-6">
                    <div class="section-title text-center pb-20">
                        <h6 class="text-primary text-uppercase font-weight-bold">Conócenos</h6>
                        <h1 class="mb-4">¿Quiénes somos?</h1>
                        <p>
                            Recuerda.me es una empresa digital 100% mexicana e innovadora.
                            Ofrecemos un servicio digital fácil de usar para que las familias puedan subir,
                            almacenar y compartir fotos, vídeos, audios y textos en un solo lugar. Todo a través de la
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
            <img src="{{ asset('resources/landing-assets/img/quienessomos-img/abuelita.jpg')}}" alt="Abuela">
            <img src="{{ asset('resources/landing-assets/img/quienessomos-img/extremo.jpg')}}" alt="Extremo">
            <img src="{{ asset('resources/landing-assets/img/quienessomos-img/familia.jpg')}}" alt="Familia">
            <img src="{{ asset('resources/landing-assets/img/quienessomos-img/fotoantigua.jpg')}}" alt="Foto antigua">
            <img src="{{ asset('resources/landing-assets/img/quienessomos-img/carta.jpg')}}" alt="Carta">
            <img src="{{ asset('resources/landing-assets/img/quienessomos-img/foto.jpg')}}" alt="Foto">
            <img src="{{ asset('resources/landing-assets/img/quienessomos-img/abuelitos.jpg')}}" alt="Abuelitos">
        </div>
    </section>
@endsection