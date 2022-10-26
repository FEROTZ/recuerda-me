@extends('layouts.landing')
@section('content')
    <section id="about" class="about-area pt-80 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-image mt-50 clearfix">
                        <div class="single-image float-left">
                            <img src="{{ asset('resources/landing-assets/images/banner/shape/banner 1.png')}}" alt="About">
                        </div>
                        <div data-aos="fade-right" class="about-btn ">
                            <a class="main-btn cursor-normal" href="{{ route('servicios')}}"><span>QR</span> una experiencia unica</a>
                        </div>
                        <div class="single-image image-tow float-right">
                        <img src="{{ asset('resources/landing-assets/images/banner/shape/banner 2.png')}}" alt="About">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content mt-45">
                        <h4 class="about-welcome">Misión</h4>
                        <p class="mt-25">Proporcionar a las personas una forma de conectarse con sus seres queridos después de que hayan fallecido accediendo a los archivos multimedia.<br>
                            <br>
                        <h4 class="about-welcome">Visión </h4>
                        <p class="mt-25">Ser una empresa reconocida nacionalmente por el hecho de recobrar las memorias de las personas y mascotas ya fallecidas con un servicio de primera y con calidez humana.
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection