<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocumentoController;

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
Route::get('/', [DocumentoController::class,'home'])
    ->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/documentos',[DocumentoController::class,'index'])
    ->name('documentos.index');
    //Documentos
    //Listado
    Route::get('/dashboard', [DocumentoController::class,'index'])
    ->name('documentos.index');
    //Route::get('/admin/documentos',[DocumentoController::class,'index'])->name('documentos.index');
    //Creacion
    Route::get('/admin/documentos/create',[DocumentoController::class,'create'])->name('documentos.create');
    //Almacenado
    Route::post('/admin/documentos',[DocumentoController::class,'store'])->name('documentos.store');
    //Edicion
    Route::get('/admin/documentos/{id}/edit',[DocumentoController::class,'edit'])->name('documentos.edit');
    //Actualizacion
    Route::put('/admin/documentos/{id}',[DocumentoController::class,'update'])->name('documentos.update');
    //Eliminacion
    Route::delete('/admin/documentos/{id}',[DocumentoController::class,'destroy'])->name('documentos.destroy');
    //Visualizacion
    Route::get('/admin/documentos/{id}',[DocumentoController::class,'show'])->name('documentos.show');
});


require __DIR__.'/auth.php';
