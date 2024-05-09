<?php

use App\Http\Controllers\AccionesPersonalController;
use App\Http\Controllers\CrudAdminController;
use App\Http\Controllers\Detalles;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginEmployeesController;
use App\Http\Controllers\ManageBranchOficceController;
use Psy\TabCompletion\Matcher\FunctionsMatcher;


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
    return view('main.welcome');
})->name('home');

Route::get('/welcome', function () {
    return view('main.formUsers');
})->name('home');

Route::get('panel', function () {
    return view('main.menuUsers');
});

Route::get('/loginemployees', [LoginEmployeesController::class, 'create'])->name('login.employees');

Route::post('/loginemployeespost', [LoginEmployeesController::class, 'store'])->name('login_employee_post');

Route::get('/dashboardEmployee/G-G', function () {
    return view('usuarioGerenteGeneral.dashboardgg');
})->middleware('check.employee')->name('dash.gg');

Route::get('/dashboardEmployee/E-C', function () {
    return view('usuarioCajero.welcomeUC');
})->middleware('check.employee')->name('dash.uc');

Route::resource('/brainchoficcem', ManageBranchOficceController::class);

Route::post('logoutemployees', [LoginEmployeesController::class, 'logout'])->name('logoutemployees');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/acciones-personal', [AccionesPersonalController::class, 'index']);
Route::put('/acciones-personal/{id}', [AccionesPersonalController::class, 'update'])->name('acciones-personal.update');

Route::get('/detalles', [Detalles::class, 'index'])->name('Detalles.index');

require __DIR__.'/auth.php';