<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotaController;
use App\Http\Controllers\CategoriaController;

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

//nota
Route::resource('nota', NotaController::class);
Route::get('nota/{id}/delete', [NotaController::class, 'destroy']);
Route::get('nota/{id}/{msg}', [NotaController::class, 'verNover']);


//categoria
Route::resource('categoria', CategoriaController::class);


//bootstrap
Route::get('btp', function () {
    return view('btp');
});
