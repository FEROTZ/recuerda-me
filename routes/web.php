<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Landing Page recuerda.me
Route::get('/', function () {
    return view('landingpage.index');
})->name('home');
Route::get('/servicios', function () {
    return view('landingpage.servicio.servicios');
})->name('servicios');
Route::get('/quienes-somos', function () {
    return view('landingpage.empresa.quiensomos');
})->name('nosotros');
Route::get('/misión', function () {
    return view('landingpage.empresa.mision');
})->name('misión');
Route::get('/contacto', function () {
    return view('landingpage.servicio.contacto');
})->name('contacto');

Route::get('/prueba', function () {
    return view('dashboard');
})->name('prueba');

Route::get('/planPremiun', function () {
    return view('client.index');
})->name('client');

Route::get('/tablaProducto', function () {
    return view('client.tablaPlanes');
})->name('tablaPlanes');


// Dashboard usuario
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/planEconomico', function () {
        return view('client.planEconomico');
    })->name('planEconomico');
    Route::get('/planBasico', function () {
        return view('client.planBasico');
    })->name('planBasico');
    Route::get('/planPremiun', function () {
        return view('client.planPremiun');
    })->name('planPremiun');
});
