<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\UserController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/producto', [ProductoController::class, 'index'])-> name('productos.index');

// Route::get('/producto/create', [ProductoController::class, 'create'])-> name('productos.create');

// Route::get('/producto/{id}', [ProductoController::class, 'show'])-> name('productos.show');

// Route::POST('/producto', [ProductoController::class, 'store'])-> name('productos.store');

Route::resource('personal',ProductoController::class);

Route::resource('usuario',UserController::class);