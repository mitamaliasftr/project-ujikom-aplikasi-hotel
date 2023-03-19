<?php

use App\Http\Controllers\GuruController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Routing\RouteGroup;
use App\Http\Controllers\SimulasiController;
use App\Http\Controllers\SimulasiTransaksiBarang;

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

Route::get('dashboard', [HomeController::class, 'index'])->middleware('auth');

// LOGIN
Route::get('/login', [UserController::class, 'index'])->name('login');
Route::post('/login/cek', [UserController::class, 'CekLogin'])->name('CekLogin');

// LOGOUT
Route::get('/logout', [UserController::class,'logout'])->name('logout');

// CRUD
Route::resource('kamar', KamarController::class);

// EXCEL
    // EXPORT
    Route::get('export-kamar', [KamarController::class, 'export'])->name('kamar.export');
    // IMPORT
    Route::post('kamar-import', [KamarController::class, 'importData'])->name('import-kamar');

// ROUTES YANG SUDAH LOGIN
Route::group(['middleware' => 'auth'], function(){
    Route::get('/dashboard', [HomeController::class, 'index']);
    Route::resource('user', UserController::class);

    Route::group(['middleware' => 'auth'], function(){
        Route::get('/dashboard', [HomeController::class, 'index']);
        Route::resource('user', UserController::class);
    });
});

// ujicoba
Route::resource('guru', GuruController::class);
Route::get('guru-export', [GuruController::class, 'export'])->name('export-guru');

// simulasi
Route::get('simulasi-transaksi-barang',[SimulasiTransaksiBarang::class, 'index'])->name('simulasi-transaksi-barang');
Route::get('simulasi',[SimulasiController::class, 'index'])->name('simulasi');

