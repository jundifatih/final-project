<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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

Route::get('/', [HomeController::class, 'Beranda'])->name('get_beranda');
Route::get('/test', [HomeController::class, 'Test'])->name('get_test');

Route::get('/login', [UserController::class, 'login'])->name('get_login');
Route::get('/register', [UserController::class, 'Register'])->name('get_register');
Route::get('/dashboard', [UserController::class, 'Dashboard'])->name('get_dashboard');
Route::get('/dashboard_admin', [UserController::class, 'DashboardAdmin'])->name('get_dashboardAdmin');
Route::get('/profile', [UserController::class, 'Profile'])->name('get_profile');
