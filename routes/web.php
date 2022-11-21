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

use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;



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
//? Que función cumple esta ruta?
Route::get('/administradores', function () {
    return view('admin.index');
})->name('admin.index');

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
    //? No entiendo que función cumple esta ruta
    Route::get('/tablaProducto', function () {
        return view('client.tablaPlanes');
    })->name('tablaPlanes');

    Route::get('/paypal/pay', [PaymentController::class, 'payWithPayPal']
    )->name('paypal.pay');
    Route::get('/paypal/status', [PaymentController::class, 'payPalStatus']
    )->name('paypal.status');
});

// Route::post('login', LoginController::class, 'login');

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('landingpage.index');
// })->name('inicio');
