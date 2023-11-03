<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FacultadesController;
use App\Http\Controllers\DocentesController;
use App\Http\Controllers\EstudiantesController;
use App\Http\Controllers\MateriasController;
use App\Http\Controllers\ProgramasController;



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

Route::get('/dashboard', [HomeController::class,'index']
)->middleware(['auth', 'verified'])->name('dashboard');

//rutas
Route::get('/facultades/listado', [FacultadesController::class,'index']
)->middleware(['auth', 'verified'])->name('listado_facultades');

Route::get('/facultades/registrar', [FacultadesController::class, 'form_registro']
)->middleware(['auth', 'verified'])->name('form_registro_fac');

Route::post('/facultades/registrar', [FacultadesController::class, 'registrar']
)->middleware(['auth', 'verified'])->name('registrar_fac');

Route::get('/programas/listado', [ProgramasController::class,'index']
)->middleware(['auth', 'verified'])->name('listado_programas');

Route::get('/estudiantes/listado', [EstudiantesController::class,'index']
)->middleware(['auth', 'verified'])->name('listado_estudiantes');

Route::get('/materias/listado', [MateriasController::class,'index']
)->middleware(['auth', 'verified'])->name('listado_materias');

Route::get('/docentes/listado', [DocentesController::class,'index']
)->middleware(['auth', 'verified'])->name('listado_docentes');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__.'/auth.php';
