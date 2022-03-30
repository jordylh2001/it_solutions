<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AnunciosController;
use App\Http\Controllers\BasesDatosController;
use App\Http\Controllers\ComentariosController;
use App\Http\Controllers\ContactosController;
use App\Http\Controllers\ContratosController;
use App\Http\Controllers\DepartamentosController;
use App\Http\Controllers\EmpleadosController;
use App\Http\Controllers\EventosController;
use App\Http\Controllers\ModelosController;
use App\Http\Controllers\PreguntasController;
use App\Http\Controllers\ProyectosController;
use App\Http\Controllers\RiesgosController;

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

Route::get('/', function () {
    return view('index');
});

<<<<<<< Updated upstream
Route::get('/users',[UserController::class,'index']);

Route::resource('anuncios', AnunciosController::class);
Route::resource('bd', BasesDatosController::class);
Route::resource('comentarios', ComentariosController::class);
Route::resource('contactos', ContactosController::class);
Route::resource('contratos', ContratosController::class);
Route::resource('departamentos', DepartamentosController::class);
Route::resource('eventos', EventosController::class);
Route::resource('empleados', EmpleadosController::class);
Route::resource('modelos', ModelosController::class);
Route::resource('preguntas', PreguntasController::class);
Route::resource('proyectos', ProyectosController::class);
Route::resource('riesgos', RiesgosController::class);

Route::get('/configuracion', function () {
    return view('Configuracion.index');
});
=======

Route::get('/Contacts', function () {
    return view('contacts');
});

Route::get('/users',[UserController::class,'index']);
>>>>>>> Stashed changes
