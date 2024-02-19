<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\LoginController;

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




Route::middleware(['guest'])->group(function () {
    Route::get('login', [LoginController::class, 'index'])->name('login');
    Route::post('login', [LoginController::class, 'login']);
});

Route::middleware(['auth'])->group(function () {
        Route::get('logout', [LoginController::class, 'logout'])->name('logout');
    
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('admin-dashboard', [AdminController::class, 'index'])->name('admin-dashboard');
});

Route::middleware(['auth', 'role:operator'])->group(function () {
    Route::resource('/jenis', JenisController::class);
    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
});

Route::middleware(['auth', 'role:owner'])->group(function () {
    Route::get('home', [AdminController::class, 'home'])->name('home');
});

