<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\TransactionController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'index']);
Route::get('/tentang', [HomeController::class, 'tentang']);
Route::get('/layanan', [HomeController::class, 'layanan']);
Route::get('/kontak', [HomeController::class, 'kontak']);
Route::post('/frekuensi', [HomeController::class, 'frekuensi']);
Route::post('/submit-perasaan', [HomeController::class, 'submit_perasaan']);
Route::post('/minum-obat', [HomeController::class, 'minum_obat']);

Route::get('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'register']);
Route::post('/register-submit', [AuthController::class, 'register_submit']);
Route::post('/login-submit', [AuthController::class, 'login_submit']);
Route::post('/logout', [AuthController::class, 'logout']);
Route::get('/profil', [AuthController::class, 'profil']);
Route::get('/profil-saya', [AuthController::class, 'profil_saya']);
Route::put('/profil-update', [AuthController::class, 'profil_update']);
Route::get('/ubah-password', [AuthController::class, 'ubah_password_view']);
Route::put('/update-password', [AuthController::class, 'update_password']);

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard']);
    Route::get('/destinations', [TentangController::class, 'index']);
    Route::post('/destinations/submit', [TentangController::class, 'submit']);
    Route::get('/destinations/edit/{id}', [TentangController::class, 'edit']);
    Route::put('/destinations/update/{id}', [TentangController::class, 'update']);
    Route::delete('/destinations/delete/{id}', [TentangController::class, 'delete']);
    
    Route::get('/transactions', [TransactionController::class, 'index']);
    Route::get('/transactions/detail/{id}', [TransactionController::class, 'detail']);
    Route::get('/users', [UserController::class, 'index']);
    Route::post('/users/submit', [UserController::class, 'submit']);
    Route::put('/users/update/{id}', [UserController::class, 'update']);
    Route::delete('/users/delete/{id}', [UserController::class, 'delete']);

});