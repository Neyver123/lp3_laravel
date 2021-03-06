<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\MatriculaController;
use App\Http\Controllers\NotaController;
use App\Http\Controllers\CursoController;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::resource('estudiante', EstudianteController::class)->middleware('auth');
Route::resource('curso', CursoController::class)->middleware('auth');
Route::get('matricula/mostrar', [MatriculaController::class, 'mostrar'])->middleware('auth');
Route::get('notas/{id}', [NotaController::class, 'notaPorId'])->middleware('auth');
