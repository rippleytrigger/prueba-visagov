<?php

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

Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/libros', [App\Http\Controllers\LibrosController::class, 'index'])->name('libros');
Route::get('/libros/create', [App\Http\Controllers\LibrosController::class, 'create'])->name('libros.create');
Route::get('/libros/edit/{id}', [App\Http\Controllers\LibrosController::class, 'edit'])->name('libros.edit');


Route::post('/libros/store', [App\Http\Controllers\LibrosController::class, 'store'])->name('libros.store');
Route::put('/libros/update/{id}', [App\Http\Controllers\LibrosController::class, 'update'])->name('libros.update');
Route::delete('/libros/destroy/{id}', [App\Http\Controllers\LibrosController::class, 'destroy'])->name('libros.destroy');


Route::get('/contacto', [App\Http\Controllers\ContactoController::class, 'index'])->name('contacto');
Route::post('/contacto/send', [App\Http\Controllers\ContactoController::class, 'send'])->name('contacto.send');


});