<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\anggotaController;
use App\Http\Controllers\peminjamanController;
use App\Http\Controllers\pengembalianController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\rakController;
use App\Http\Controllers\petugasController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\AuthController;
use App\Models\peminjaman;
use App\Models\pengembalian;
use Illuminate\Auth\Access\Gate;
use PHPUnit\Framework\Test;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Route::get('/', [DashboardController::class, 'index']);
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::middleware(['auth'])->group(function () {
    Route::get('/anggota-dashboard', 'DashboardController@anggotaDashboard');
    Route::get('/admin-dashboard', 'DashboardController@adminDashboard');
});

Route::get('/', [loginController::class, 'index']);


Route::resource('dashboard', DashboardController::class);
Route::resource('buku', BukuController::class);
Route::resource('anggota', anggotaController::class);
Route::resource('peminjaman', peminjamanController::class);
Route::resource('pengembalian', pengembalianController::class);
Route::resource('rak', rakController::class);
Route::resource('petugas', petugasController::class);
