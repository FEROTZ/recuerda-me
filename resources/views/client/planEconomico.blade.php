@extends('layouts.landing')
    @section('content')
    
    <div class="p-4 md-8 bg-500">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">      
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <!--<x-jet-welcome />-->
                
                <div class="mt-6 mx-28">
                    <div class="text-center">
                        <div class="text-right">
                            <x-link  href="#" class="my-2 text-lg text-lg">
                                {{ __('Reiniciar') }}
                            </x-link >
                            <x-link  href="{{route('tablaPlanes')}}" class="my-2 text-lg text-lg">
                                {{ __('Guardar') }}
                            </x-link >
                        </div>
                        <h2>Dejar a esta persona</h2>
                    </div>
                    <x-jet-label for="name" value="{{ __('Nombre completo') }}" />
                    <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                </div>
    
                <div class="mt-6 mx-28">
                    <x-jet-label for="email" value="{{ __('Correo electrónico a quien va dirigido') }}" />
                    <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                </div>
                <div class="mt-6 mx-6">
                    <div class="text-center">
                    <form class="flex justify-center space-x-6">
                        <div class="p-8" >
                            <div class=" flex items-center shrink-0 p-8">
                                <img class="w-40" src="{{ asset('resources/landing-assets/images/banner/shape/banner 1.png')}}" alt="About">
                            
                            <label class="block">
                            <span class="sr-only">Cargando Nota</span>
                            <input type="file" class="block w-full text-sm text-slate-500
                            file:mr-4 file:py-2 file:px-4
                            file:rounded-full file:border-0
                            file:text-sm file:font-semibold
                            file:to-zinc-900 file:text-zinc-700
                            hover:file:bg-zink-100"/>
                            </label>
                            <div class="flex items-center space-x-4 p-2">
                                <a href="#victorModal" role="button" class="btn btn-large btn-primary" data-toggle="modal">Cargar Nota</a> 
                                        <!-- Modal / Ventana / Overlay en HTML -->
                                        <div id="victorModal" class="modal fade">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                        <h4 class="modal-title">¿Que deseas hacer?</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>¿Seguro que quieres guardar esta nota?</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                                        <button type="button" class="btn btn-default" data-dismiss="modal" id="guardar">Guardar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                        </div>
                                </div>
                            </div>
                        </div>
                    </form>              
                </div>
            </div>
        </div>
    </div>
@endsection