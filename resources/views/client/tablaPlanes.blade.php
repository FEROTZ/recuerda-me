@extends('layouts.landing')
@section('content')
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
