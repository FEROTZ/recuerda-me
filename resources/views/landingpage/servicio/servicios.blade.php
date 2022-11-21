@extends('layouts.landing')
@section('content')
    @if (session('status'))
        <div class="bg-zinc-900 text-center py-4 lg:px-4 alerta">
            <div class="p-2 bg-zinc-800 items-center text-zinc-100 leading-none lg:rounded-full flex lg:inline-flex"
                role="alert">
                <span class="flex rounded-full bg-zinc-500 uppercase px-2 py-1 text-xs font-bold mr-3">Oops!</span>
                <span class="font-semibold mr-2 text-left flex-auto">{{ session('status') }}</span>
                <svg class="fill-current h-6 w-6 text-red-500" id="close-btn" role="button" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20">
                    <title>Cerrar</title>
                    <path
                        d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                </svg>
            </div>
        </div>
    @endif
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
                            <p>Biografia del difunto</p>
                            <p>1 Fotografia</p>
                            <p>Un unico codigo QR</p>
                            <p>Pensamos en tu economia</p>
                            @auth
                                <x-paypal-button href="{{ route('paypal.pay') }}" class="py-2 px-4 my-2 text-lg text-lg">
                                </x-paypal-button>
                            @else
                                <x-link-button href="{{ route('planBasico') }}" class="py-2 px-4 my-2 text-lg text-lg">
                                    {{ __('Contratar ahora') }}
                                </x-link-button>
                            @endauth
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

                            <p>Biografia del difunto</p>
                            <p>1 Fotografia</p>
                            <p>Un unico codigo QR</p>
                            <p>1 video de un minuto </p>
                            @auth
                                <x-paypal-button href="{{ route('paypal.pay') }}" class="py-2 px-4 my-2 text-lg text-lg">
                                </x-paypal-button>
                            @else
                                <x-link-button href="{{ route('planBasico') }}" class="py-2 px-4 my-2 text-lg text-lg">
                                    {{ __('Contratar ahora') }}
                                </x-link-button>
                            @endauth
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

                            <p>Biografia del difunto</p>
                            <p>1 Fotografia</p>
                            <p>Un unico codigo QR</p>
                            <p>1 video de 3 minutos </p>
                            @auth
                                <x-paypal-button href="{{ route('paypal.pay') }}" class="py-2 px-4 my-2 text-lg text-lg">
                                </x-paypal-button>
                            @else
                                <x-link-button href="{{ route('planPremiun') }}" class="py-2 px-4 my-2 text-lg text-lg">
                                    {{ __('Contratar ahora') }}
                                </x-link-button>
                            @endauth
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
                            @auth
                                <x-paypal-button href="{{ route('paypal.pay') }}" class="py-2 px-4 my-2 text-lg text-lg">
                                </x-paypal-button>
                            @else
                                <x-link-button href="#" class="py-2 px-4 my-2 text-lg text-lg">
                                    {{ __('Contratar ahora') }}
                                </x-link-button>
                            @endauth
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
                            @auth
                                <x-paypal-button href="{{ route('paypal.pay') }}" class="py-2 px-4 my-2 text-lg text-lg">
                                </x-paypal-button>
                            @else
                                <x-link-button href="#" class="py-2 px-4 my-2 text-lg text-lg">
                                    {{ __('Contratar ahora') }}
                                </x-link-button>
                            @endauth
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
                            @auth
                                <x-paypal-button href="{{ route('paypal.pay') }}" class="py-2 px-4 my-2 text-lg text-lg">
                                </x-paypal-button>
                            @else
                                <x-link-button href="#" class="py-2 px-4 my-2 text-lg text-lg">
                                    {{ __('Contratar ahora') }}
                                </x-link-button>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    @if (Route::is('servicios'))
        <script>
            let alerta = document.querySelector('.alerta');
            let closeBtn = document.querySelector('#close-btn');
            closeBtn.addEventListener('click', function() {
                closeAlert();
            });

            function closeAlert() {
                alerta.style.opacity = '0'
            }

            setTimeout(() => {
                console.log('hola');
                closeAlert();
            }, 4500);
            alerta.addEventListener('transitionend', () => alerta.remove());
        </script>
    @endif
@endsection
