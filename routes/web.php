<?php

use App\Http\Controllers\ComputerController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;

// Route::get('/', function () {
//     return view('auth.login');
// });

// Route::get('/login', function () {
//     return view('auth.login');
// });

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard.index');

Route::get('/speed', [DashboardController::class, 'speed'])->name('speedtest.run');

Route::resource('tables', ComputerController::class);

Route::get('/speedtest', function () {
    return view('admin.dashboard.speedtest');
})->name('admin.dashboard.speedtest');
