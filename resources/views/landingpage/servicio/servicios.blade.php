@extends('layouts.landing')
@section('content')
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <h6 class="text-primary text-uppercase font-weight-bold">Nuestros Servicios</h6>
                <h1 class="mb-4">Elige uno de nuestros paquetes </h1>
            </div>
            <div class="row">
                <div class="col-md-4 mb-5">
                    <div class="bg-gray-200 rounded-md">
                        <div class="text-center p-4">
                            <h1 class="display-4 mb-0">
                                <small class="align-top text-muted font-weight-medium"
                                    style="font-size: 22px; line-height: 45px;">$</small>1,200
                            </h1>
                        </div>
                        <div class="bg-zinc-900 text-center p-4">
                            <h3 class="m-0">Económico</h3>
                        </div>
                        <div class="d-flex flex-column align-items-center py-4">
                            <p>Biografía del difunto</p>
                            <p>Una Fotografía</p>
                            <p>Un único código QR</p>
                            <p>Pensamos en tu economía</p>
                            <x-jet-button class="py-2 px-4 my-2 text-lg text-lg">
                                {{ __('Contratar ahora') }}
                            </x-jet-button>
                            {{-- <a href="" class="btn btn-primary py-2 px-4 my-2 text-lg text-lg">Contratar Ahora</a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="bg-gray-200 rounded-md">
                        <div class="text-center p-4">
                            <h1 class="display-4 mb-0">
                                <small class="align-top text-muted font-weight-medium"
                                    style="font-size: 22px; line-height: 45px;">$</small>2,000
                            </h1>
                        </div>
                        <div class="bg-zinc-900 text-center p-4">
                            <h3 class="m-0">Básico</h3>
                        </div>
                        <div class="d-flex flex-column align-items-center py-4">
                            <p>Biografía del difunto</p>
                            <p>Una Fotografía</p>
                            <p>Un único código QR</p>
                            <p>Un vídeo de un minuto </p>
                            <x-jet-button class="py-2 px-4 my-2 text-lg text-lg">
                                {{ __('Contratar ahora') }}
                            </x-jet-button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="bg-gray-200 rounded-md">
                        <div class="text-center p-4">
                            <h1 class="display-4 mb-0">
                                <small class="align-top text-muted font-weight-medium"
                                    style="font-size: 22px; line-height: 45px;">$</small>3,000
                            </h1>
                        </div>
                        <div class="bg-zinc-900 text-center p-4">
                            <h3 class="m-0">Medium</h3>
                        </div>
                        <div class="d-flex flex-column align-items-center py-4">
                            <p>Biografía del difunto</p>
                            <p>Una Fotografía</p>
                            <p>Un único código QR</p>
                            <p>Un vídeo de 3 minutos </p>
                            <x-jet-button class="py-2 px-4 my-2 text-lg text-lg">
                                {{ __('Contratar ahora') }}
                            </x-jet-button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-5">
                    <div class="bg-gray-200 rounded-md">
                        <div class="text-center p-4">
                            <h1 class="display-4 mb-0">
                                <small class="align-top text-muted font-weight-medium"
                                    style="font-size: 22px; line-height: 45px;">$</small>5,000
                            </h1>
                        </div>
                        <div class="bg-zinc-900 text-center p-4">
                            <h3 class="m-0">Pro</h3>
                        </div>
                        <div class="d-flex flex-column align-items-center py-4">
                            <p>Biografía del difunto</p>
                            <p>3 Fotografías</p>
                            <p>2 códigos QR</p>
                            <p>Un vídeo de 10 minutos </p>
                            <x-jet-button class="py-2 px-4 my-2 text-lg text-lg">
                                {{ __('Contratar ahora') }}
                            </x-jet-button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="bg-gray-200 rounded-md">
                        <div class="text-center p-4">
                            <h1 class="display-4 mb-0">
                                <small class="align-top text-muted font-weight-medium"
                                    style="font-size: 22px; line-height: 45px;">$</small>10,000
                            </h1>
                        </div>
                        <div class="bg-zinc-900 text-center p-4">
                            <h3 class="m-0">Premium</h3>
                        </div>
                        <div class="d-flex flex-column align-items-center py-4">
                            <p>Paquete personalizado</p>
                            <p>Un vídeo no tiene límite de tiempo</p>
                            <p>El cliente elige el número de secciones </p>
                            <p>Genera hasta 5 códigos QR</p>
                            <x-jet-button class="py-2 px-4 my-2 text-lg text-lg">
                                {{ __('Contratar ahora') }}
                            </x-jet-button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="bg-gray-200 rounded-md">
                        <div class="text-center p-4">
                            <h1 class="display-4 mb-0">
                                <small class="align-top text-muted font-weight-medium"
                                    style="font-size: 22px; line-height: 45px;"></small>$$$
                            </h1>
                        </div>
                        <div class="bg-zinc-900 text-center p-4">
                            <h3 class="m-0">Extras</h3>
                        </div>
                        <div class="d-flex flex-column align-items-center py-4">
                            <p>Generar código QR Extra</p>
                            <p>Agregar minutos a tu vídeo</p>
                            <p>Agregar fotografías</p>
                            <p>Agregar canciones extra</p>
                            <x-jet-button class="py-2 px-4 my-2 text-lg text-lg">
                                {{ __('Contratar ahora') }}
                            </x-jet-button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
