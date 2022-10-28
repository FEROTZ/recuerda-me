<?php

use App\Http\Controllers\Auth\LoginController;
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

Route::get('/administradores', function () {
    return view('admin.index');
})->name('admin.index');

// Dashboard usuario
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/admin', function () {
        return view('Admin.index');
    })->name('Admin');
    Route::get('/crear', function () {
        return view('Admin.CrearAdmin');
    })->name('Crear');
    Route::get('/mostrar', function () {
        return view('Admin.MostrarAdmin');
    })->name('Mostrar');
    Route::get('/clientes', function () {
        return view('client.index');
    })->name('Admin');
    Route::get('/planEconomico', function () {
        return view('client.planEconomico');
    })->name('planEconomico');
    Route::get('/planBasico', function () {
        return view('client.planBasico');
    })->name('planBasico');
    Route::get('/planPremiun', function () {
        return view('client.planPremiun');
    })->name('planPremiun');
    Route::get('/tablaProducto', function () {
        return view('client.tablaPlanes');
    })->name('tablaPlanes');
});

// Route::post('login', LoginController::class, 'login');

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('landingpage.index');
// })->name('inicio');
