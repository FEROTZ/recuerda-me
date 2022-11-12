@extends('layouts.landing')
@section('content')

    <div class="font-sans antialiased">
        <div class="flex flex-col items-center min-h-screen pt-6 sm:justify-center sm:pt-0">

            <div class="w-full px-16 py-20 my-6 overflow-hidden bg-gray-100 rounded-lg lg:max-w-4xl">

                <div class="mb-4">
                    <h1 class="font-serif text-3xl font-bold">Crear Admin</h1>
                </div>

                {{-- <div class="w-full px-6 py-4 bg-gray-100 rounded shadow-md ring-1 ring-gray-900/10"> --}}
                    <form method="POST" action="">
                        @csrf
                        <!-- Nombre -->
                        <div>
                            <x-jet-label for="name" value="{{ __('Nombre completo') }}" />
                            <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        </div>

                        <!-- correo -->
                        <div class="mt-4">
                            <x-jet-label for="email" value="{{ __('Correo electrónico') }}" />
                            <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                        </div>
                        <!-- Contraseña -->
                        <div class="mt-4">
                            <x-jet-label for="password" value="{{ __('Contraseña') }}" />
                            <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                        </div>


                        <div class="flex items-center justify-start mt-4">
                            <x-jet-button class="ml-4">
                                {{ __('Guardar') }}
                            </x-jet-button>
                        </div>
                    </form>
                {{-- </div> --}}
            </div>
        </div>
    </div>
@endsection