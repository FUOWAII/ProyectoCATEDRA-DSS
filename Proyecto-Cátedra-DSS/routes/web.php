<?php

use App\Http\Controllers\CrudAdminController;
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
    return view('welcome');
})->name('home');

Route::get('/loginemployees', [LoginEmployeesController::class, 'create'])->name('login.employees');

Route::post('/loginemployeespost', [LoginEmployeesController::class, 'store'])->name('login_employee_post');

Route::get('/employeedashboard', function () {
    return view('administrator.dashboardadmin');
})->name('admindash');

Route::resource('/brainchoficcem', ManageBranchOficceController::class);

Route::post('logoutemplouees', [LoginEmployeesController::class, 'logout'])->name('logoutemployees');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';