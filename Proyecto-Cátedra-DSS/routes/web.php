<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/creacioncuenta', function () {
    return view('creacioncuenta');
})->name('creacioncuenta');

Route::get('/cuentabancaria', function () {
    return view('cuentabancaria');
})->name('cuentabancaria');


Route::get('/transaccion', function () {
    return view('transaccion');
})->name('transaccion');

Route::get('/ingresodependiente', function () {
    return view('ingresodependiente');
})->name('ingresodependiente');

Route::get('/listadependiente', function () {
    return view('listadependiente');
})->name('listadependiente');

Route::get('/formulariodependiente', function () {
    return view('formulariodependiente');
})->name('formulariodependiente');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
