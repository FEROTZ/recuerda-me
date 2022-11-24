<?php

use App\Http\Controllers\Auth\LoginController;
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
// use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PedidosController;
use App\Http\Controllers\QrCodeController;



// Auth::routes();

// Route::get('/admin', [LoginController::class, 'showAdminLoginForm'])->name('admin.login-view');
// Route::post('/admin', [LoginController::class, 'adminLogin'])->name('admin.login');

// Route::get('/admin/register', [RegisterController::class, 'showAdminRegisterForm'])->name('admin.register-view');
// Route::post('/admin/register', [RegisterController::class, 'createAdmin'])->name('admin.register');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/admin/dashboard', function () {
//     return view('admin');
// })->middleware('auth:admin');

/*
|--------------------------------------------------------------------------
| A PARTIR DE AQUÍ EMPIEZAN MIS RUTAS ANTIGUAS
|--------------------------------------------------------------------------
|
| Todo el código o las rutas que se encuentran en la parte superior
| de este archivo, fueron añadidas con el fin de crear un login
| para los usuarios administradores de esta aplicación :)
|
*/
//Ruta para el buscador
Route::get('search/servicios', 'SearchCroller@Servicios')->name('search.servicios');

Route::get('/', function () {
    return view('landingpage.index');
})->name('home');

Route::get('/servicios', [ServiciosController::class, 'index'])->name('servicios');

Route::get('/quienes-somos', function () {
    return view('landingpage.empresa.quiensomos');
})->name('nosotros');

Route::get('/misión', function () {
    return view('landingpage.empresa.mision');
})->name('misión');

Route::get('/contacto', function () {
    return view('landingpage.servicio.contacto');
})->name('contacto');

//? Que función cumple esta ruta?
Route::get('/administradores', function () {
    return view('admin.index');
})->name('admin.index');

//! No se que funcion cumple
Route::get('/planPremiun', function () {
    return view('client.index');
})->name('client');

//* Dashboard usuario
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
    //TODO: Eliminar ruta o agregarla con el middleware de auth
    Route::get('/planPremiun', function () {
        return view('client.planPremiun');
    })->name('planPremiun');

    Route::get('/tusPlanes', function () {
        return view('client.tablaPlanes');
    })->name('tablaPlanes');
    
    //? No entiendo que función cumple esta ruta
    Route::get('/tablaProducto', [PedidosController::class, 'index'])->name('tablaPlanes');

    Route::get('/paypal/pay/{id}', [PaymentController::class, 'payWithPayPal']
    )->name('paypal.pay');
    Route::get('/paypal/status/{id}', [PaymentController::class, 'payPalStatus']
    )->name('paypal.status');

    
    //ruta de codigo QR
    Route::get('/qrcode', [QrCodeController::class, 'index']);
});



// Route::post('login', LoginController::class, 'login');

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('landingpage.index');
// })->name('inicio');
