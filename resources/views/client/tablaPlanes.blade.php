@extends('layouts.landing')
@section('content')
    @if (session('status'))
    <div class="bg-green-700 text-center py-4 lg:px-4 alerta">
        <div class="p-2 bg-green-600 items-center text-zinc-100 leading-none lg:rounded-full flex lg:inline-flex"
            role="alert">
            <span class="flex rounded-full bg-green-500 uppercase px-2 py-1 text-xs font-bold mr-3">Cool!</span>
            <span class="font-semibold mr-2 text-left flex-auto">Tu compra se realizó con éxito!</span>
            <svg class="fill-current h-6 w-6 text-red-500 close-btn" role="button" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 20 20">
                <title>Cerrar</title>
                <path
                    d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
            </svg>
        </div>
    </div>
    @endif

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-2xl sm:rounded-lg my-8">
                <table class="min-w-full">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Nombre</th>
                            <th>Correo Electronico</th>
                            <th>Plan</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>kevin</td>
                            <td>kevinbrayan33o@gmail.com</td>
                            <td>Plan Premiun</td>
                            <td class="text-sm font-medium leading-5 whitespace-no-wrap border-b border-gray-200 ">
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="_token" value="">
                                <button type="submit" class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="w-6 h-6 text-red-600 hover:text-red-800 cursor-pointer" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Ricardo</td>
                            <td>ricardoGama@gmail.com</td>
                            <td>Plan Basico</td>
                            <td class="text-sm font-medium leading-5 whitespace-no-wrap border-b border-gray-200 ">

                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="_token" value="">
                                <button type="submit" class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="w-6 h-6 text-red-600 hover:text-red-800 cursor-pointer" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Fernando</td>
                            <td>fernando@gmail.com</td>
                            <td>Plan economico</td>
                            <td class="text-sm font-medium leading-5 whitespace-no-wrap border-b border-gray-200 ">

                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="_token" value="">
                                <button type="submit" class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="w-6 h-6 text-red-600 hover:text-red-800 cursor-pointer" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                            </td>
                        </tr>
                    </tbody>
                </table>
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