<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotaController;

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

//notas
Route::resource('nota', NotaController::class);

Route::get('nota/{id}/delete', [NotaController::class, 'destroy']);

//bootstrap
Route::get('btp', function () {
    return view('btp');
});
