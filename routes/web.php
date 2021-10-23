<?php

use App\Http\Controllers\CategorieController;
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

Route::get('/', function () {
    return view('welcome');
});

/*     Lista de URLs      */ 

// Mostrar Pagina.
Route::get('/categories', [CategorieController::class, 'index'])->name('categories.index');
//Cargar DataTable mediante AJAX.
Route::get('/categories/cargarDatos', [CategorieController::class, 'cargarDatos']);
//Guardar Datos
Route::post('/categories/store', [CategorieController::class, 'store'])->name('categories.store');
//Eliminar Datos
Route::get('/categories/delete/{id}', [CategorieController::class, 'destroy']);
//Cargar Datos a Editar
Route::get('/categories/edit/{id}', [CategorieController::class, 'edit']);
//Actualizando Datos
Route::put('/categories/update', [CategorieController::class, 'update'])->name('categories.update');
