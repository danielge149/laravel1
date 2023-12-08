<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FacultadesController;
use App\Http\Controllers\ProgramasController;
use App\Http\Controllers\DocentesController;
use App\Http\Controllers\EstudiantesController;
use App\Http\Controllers\MateriasController;
use Illuminate\Support\Facades\Route;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [HomeController::class, 'index'] 
)->middleware(['auth', 'verified'])->name('dashboard');

//rutas para las facultades
Route::get('/facultades/listado', [FacultadesController::class, 'index'] 
)->middleware(['auth', 'verified'])->name('listado_facultades');

Route::get('/facultades/registrar', [FacultadesController::class, 'form_registro']
)->middleware(['auth', 'verified'])->name('form_registro_fac');

Route::post('/facultades/registrar', [FacultadesController::class, 'registrar']
)->middleware(['auth', 'verified'])->name('registrar_fac');

Route::get('/facultades/eliminar/{id}', [FacultadesController::class, 'eliminar']
)->middleware(['auth', 'verified'])->name('eliminar_fac');

Route::get('/facultades/editar/{id}', [FacultadesController::class, 'form_edicion']
)->middleware(['auth', 'verified'])->name('editar_fac');

Route::post('/facultades/editar/{id}', [FacultadesController::class, 'editar']
)->middleware(['auth', 'verified'])->name('editar_fac');

//rutas para los programas
Route::get('/programas/listado', [ProgramasController::class, 'index'] 
)->middleware(['auth', 'verified'])->name('listado_programas');

Route::get('/programas/registrar', [ProgramasController::class, 'form_registro']
)->middleware(['auth', 'verified'])->name('form_registro_prg');

Route::post('/programas/registrar', [ProgramasController::class, 'registrar']
)->middleware(['auth', 'verified'])->name('registrar_prg');

Route::post('/programas/editar/{id}', [ProgramasController::class, 'editar']
)->middleware(['auth', 'verified'])->name('editar_programa');

Route::get('/programas/eliminar/{id}', [ProgramasController::class, 'eliminar']
)->middleware(['auth', 'verified'])->name('eliminar_programa');


//rutas para los docentes
Route::get('/docentes/listado', [DocentesController::class, 'index'] 
)->middleware(['auth', 'verified'])->name('listado_docentes');

Route::get('/docentes/registrar', [DocentesController::class, 'form_registro']
)->middleware(['auth', 'verified'])->name('form_registro_doc');

Route::post('/docentes/registrar', [DocentesController::class, 'registrar']
)->middleware(['auth', 'verified'])->name('registrar_doc');


//rutas para los estudiantes
Route::get('/estudiantes/listado', [EstudiantesController::class, 'index'] 
)->middleware(['auth', 'verified'])->name('listado_estudiantes');

Route::get('/estudiantes/registrar', [EstudiantesController::class, 'form_registro']
)->middleware(['auth', 'verified'])->name('form_registro_est');

Route::post('/estudiantes/registrar', [EstudiantesController::class, 'registrar']
)->middleware(['auth', 'verified'])->name('registrar_est');

//rutas para las materias
Route::get('/materias/listado', [MateriasController::class, 'index'] 
)->middleware(['auth', 'verified'])->name('listado_materias');





Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
