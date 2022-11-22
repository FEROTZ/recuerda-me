@extends('layouts.landing')
@section('content')
  @if (session('status'))
    <div class="bg-green-700 text-center py-4 lg:px-4 alerta">
        <div class="p-2 bg-green-600 items-center text-slate-50 leading-none lg:rounded-full flex lg:inline-flex"
            role="alert">
            <span class="flex rounded-full bg-green-500 uppercase px-2 py-1 text-xs font-bold mr-3">Cool!</span>
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
    <div class="flex flex-col py-12">
        <div class="overflow-x-auto max-w-7xl">
            <div class="py-4 inline-block min-w-full sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                    <table class="min-w-full text-center">
                        <thead class="border-b bg-gray-800">
                            <tr>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                    Id
                                </th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                    Producto
                                </th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                    Destinatario
                                </th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                    Compras de Servicio
                                </th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                    Descripción
                                </th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                    Precio
                                </th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                    Opciones
                                </th>
                            </tr>
                        </thead class="border-b">
                        <tbody>
                            <tr class="bg-white border-b">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">1</td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    Plan Economico
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    kevinbrayan33o@gmail.com
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    1
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    Se compro una Nota
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    $1200
                                </td>
                                <td class="py-4 px-6">
                                    <a href="#"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Eliminar</a>
                                    <a href="#"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Editar</a>
                                </td>
                            </tr class="bg-white border-b">
                            <tr class="bg-white border-b">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">2</td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    Plan Basico
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    kevinBaby@gmail.com
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    2
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    Se compro una Nota,imagenes y Video
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    $1600
                                </td>
                                <td class="py-4 px-6">
                                    <a href="#"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Eliminar</a>
                                    <a href="#"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Editar</a>
                                </td>
                            </tr class="bg-white border-b">
                            <tr class="bg-white border-b">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">2</td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    Plan Premiun
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    kevinBaby@gmail.com
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    2
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    Se compro una Nota y un Video
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    $1600
                                </td>
                                <td class="py-4 px-6">
                                    <a href="#"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Eliminar</a>
                                    <a href="#"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Editar</a>
                                </td>
                            </tr class="bg-white border-b">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    @if (Route::is('tablaPlanes'))
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
            }, 4500);
            alerta.addEventListener('transitionend', () => alerta.remove());
        </script>
    @endif
@endsection