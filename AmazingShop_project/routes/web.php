<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\reportescontroller;
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//REPORTES 

//MOSTRAR REPORTES
Route::get('admin/reporte', [App\Http\Controllers\reportescontroller::class, 'index'])->name('reporte');
Route::post('/insert-report', [App\Http\Controllers\reportescontroller::class, 'create'])->name('insertarreporte');
Route::get('admin/agregarreporte', [App\Http\Controllers\reportescontroller::class, 'agregarreporte'])->name('agregarreporte');



//MOSTRAR ESTADISTICAS 
Route::get('admin/estadistica', [App\Http\Controllers\estadisticascontroller::class, 'index'])->name('estadistica');
Route::get('admin/agregarestadistica', [App\Http\Controllers\estadisticascontroller::class, 'agregarestadistica'])->name('agregarestadistica');


//RUTAS COMPRAS Y VENTAS
Route::get('admin/Compras', [App\Http\Controllers\comprascontroller::class, 'index'])->name('Compras');

Route::get('admin/Ventas', [App\Http\Controllers\ventascontroller::class, 'index'])->name('Ventas');

Route::get('admin/agregarventas', [App\Http\Controllers\ventascontroller::class, 'create'])->name('agregarventas');

Route::get('admin/agregarcompras', [App\Http\Controllers\comprascontroller::class, 'create'])->name('agregarcompras');

Route::post('admin/agregarventas', [App\Http\Controllers\ventascontroller::class, 'store'])->name('store');






