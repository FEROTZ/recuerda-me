
@extends('layouts.landing')
@section('content')

    <!--====== CONTACT PART START ======-->
    <section id="contact" class="contact-area pt-125 pb-130 bg-neutral-50">
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
                                        <x-jet-label for="nombre" value="{{ __('Nombre') }}" />
                                        <x-jet-input id="nombre" class="block mt-1 w-full" type="text"
                                            name="nombre" :value="old('nombre')" required autofocus />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form form-group">
                                        <x-jet-label for="email" value="{{ __('Correo electrónico') }}" />
                                        <x-jet-input id="email" class="block mt-1 w-full" type="text"
                                            name="email" :value="old('email')" required autofocus />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single-form form-group">
                                        <x-jet-label for="mensaje" value="{{ __('Mensaje') }}" />
                                        <x-text-area name="message" data-error="Por favor escriba su mensaje" required="required"></x-text-area>
                                    </div>
                                </div>
                                <p class="form-message"></p>
                                <div class="col-md-12">
                                    <div class="single-form form-group text-center">
                                        <x-jet-button class="ml-4">
                                            {{ __('Enviar mensaje') }}
                                        </x-jet-button>
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
@endsection