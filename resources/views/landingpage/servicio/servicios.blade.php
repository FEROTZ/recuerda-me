@extends('layouts.landing')
@section('content')
    @if (session('status'))
        <div class="bg-zinc-900 text-center py-4 lg:px-4 alerta">
            <div class="p-2 bg-zinc-800 items-center text-zinc-100 leading-none lg:rounded-full flex lg:inline-flex"
                role="alert">
                <span class="flex rounded-full bg-zinc-500 uppercase px-2 py-1 text-xs font-bold mr-3">Oops!</span>
                <span class="font-semibold mr-2 text-left flex-auto">{{ session('status') }}</span>
                <svg class="fill-current h-6 w-6 text-red-500 close-btn" role="button" xmlns="http://www.w3.org/2000/svg"
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
            <div class="section-title text-center pb-4">
                <h5 class="sub-title mb-15">Elige uno de nuestros paquetes</h5>
                <h2 class="title text-uppercase ">Nuestros Servicios</h2>
            </div>
            <div class="row">
                @foreach ($servicios as $servicio)
                <div class="col-md-4 mb-5">
                    <div
                        class="w-full max-w-sm p-4 bg-gray-200 border rounded-lg shadow-md sm:p-8">
                        <h5 class="mb-4 text-xl font-medium text-zinc-900">{{ $servicio->name }}</h5>
                        <div class="flex items-baseline text-zinc-900">
                            <span class="text-3xl font-semibold">$</span>
                            <span class="text-5xl font-extrabold tracking-tight">{{ $servicio->price }}</span>
                            <span class="ml-1 text-xl font-normal text-zinc-500">/mes</span>
                        </div>
                        <!-- List -->
                        <ul role="list" class="space-y-5 my-7">
                            <li class="flex space-x-3">
                                <!-- Icon -->
                                <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-blue-800"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <title>Check icon</title>
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-base font-normal leading-tight text-zinc-600">Biografía del difunto</span>
                            </li>
                            @if($servicio->num_images != 0)
                                <li class="flex space-x-3">
                                    <!-- Icon -->
                                    <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-blue-800"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <title>Check icon</title>
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="text-base font-normal leading-tight text-zinc-600">{{ $servicio->num_images }} fotografía(s)</span>
                                </li>
                            @else
                                <li class="flex space-x-3 line-through decoration-zinc-600">
                                    <!-- Icon -->
                                    <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-zinc-400"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <title>Check icon</title>
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="text-base font-normal leading-tight text-zinc-600">{{ $servicio->num_videos }} fotografía(s)</span>
                                </li>
                            @endif
                            @if($servicio->num_videos != 0)
                                <li class="flex space-x-3">
                                    <!-- Icon -->
                                    <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-blue-800"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <title>Check icon</title>
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="text-base font-normal leading-tight text-zinc-600">{{ $servicio->num_videos }} video(s)</span>
                                </li>
                            @else
                                <li class="flex space-x-3 line-through decoration-zinc-600">
                                    <!-- Icon -->
                                    <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-zinc-400"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <title>Check icon</title>
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="text-base font-normal leading-tight text-zinc-600">{{ $servicio->num_videos }} video(s)</span>
                                </li>
                            @endif
                            <li class="flex space-x-3">
                                <!-- Icon -->
                                <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-blue-800"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <title>Check icon</title>
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span
                                    class="text-base font-normal leading-tight text-zinc-600">{{ $servicio->num_recipients }} Destinatario(s)</span>
                            </li>
                        </ul>
                        @auth
                            <x-paypal-button href="{{ route('paypal.pay', $servicio->id) }}" class="py-2.5 px-5 my-2 text-lg text-lg   inline-flex justify-center w-full text-center">
                            </x-paypal-button>
                        @else
                            <x-link-button href="{{ route('planBasico') }}" class="py-2.5 px-5 my-2 text-lg text-lg     inline-flex justify-center w-full text-center">
                                {{ __('Contratar ahora') }}
                            </x-link-button>
                        @endauth
                    </div>
                </div>
                @endforeach
            </div> <!-- DINÁMICOS -->
        </div>
    </div>
@endsection
@section('scripts')
    @if (Route::is('servicios'))
        <script>
            let alerta = document.querySelector('.alerta');
            let closeBtn = document.querySelector('.close-btn');
            closeBtn.addEventListener('click', function() {
                closeAlert();
            });

            function closeAlert() {
                alerta.style.opacity = '0'
            }

            setTimeout(() => {
                closeAlert();
            }, 2500);
            alerta.addEventListener('transitionend', () => alerta.remove());
        </script>
    @endif
@endsection
