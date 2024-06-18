<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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
Route::get('/login', [HomeController::class, 'login'])->name('get_login');
Route::get('/register', [HomeController::class, 'Register'])->name('get_register');
Route::get('/dashboard', [HomeController::class, 'Dashboard'])->name('get_dashboard');
