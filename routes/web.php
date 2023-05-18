<?php

// Se importan los controladores a utilizar
use App\Http\Controllers\RegisterController;
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

// Ruta para la vista principal de home
Route::get('/', function () {
    return view('principal');
});

// Ruta para vista registro de cuenta
Route::get('/crear-cuenta', function () {
    return view('auth.register', [RegisterController::class, 'index']);
});
