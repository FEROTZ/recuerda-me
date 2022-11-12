@extends('layouts.landing')
@section('content')

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
@endsection