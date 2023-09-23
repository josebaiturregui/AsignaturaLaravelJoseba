<?php

use App\Http\Controllers\LibroController;
use App\Http\Controllers\PrestamoController;
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

Route::get('/', function () {
    return view('welcome');
});




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');}
    )
    ->name('dashboard');
    Route::resource('libros', LibroController::class);
    Route::put('entregar-libro/{libro_id}', [LibroController::class, 'entregar'])->name('entregarLibro');

    Route::get('createprestamo/{libro_id}', [PrestamoController::class, 'createprestamo'])->name('createprestamo');
    Route::put('status-prestamo/{prestamo_id}', [PrestamoController::class, 'statusPrestamo'])->name('statusPrestamo');
    Route::resource('prestamos', PrestamoController::class);
});
