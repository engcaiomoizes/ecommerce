<?php

use App\Http\Controllers\DashboardController;
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
    return view('home');
});

Route::get('/dashboard', [DashboardController::class, 'dashboard'])->middleware('dashboard');
Route::get('/dashboard/login', [DashboardController::class, 'index'])->middleware('dashboardAlreadyLoggedIn');
Route::post('/dashboard/fazer-login', [DashboardController::class, 'login'])->name('dashboard-login');
Route::get('/dashboard/logout', [DashboardController::class, 'logout'])->name('dashboard-logout');
