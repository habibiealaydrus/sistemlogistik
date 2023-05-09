<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\userController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\laporanController;
use App\Http\Controllers\settingsController;
use App\Http\Controllers\frontlineController;
use App\Http\Controllers\warehouseController;

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

Route::get('/', function () {
    return view('auth/login');
});

// Route::get('/', []);
Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\BerandaController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function()
{
    //dashboard
    Route::get('/beranda', [BerandaController::class, 'index']);
    //admin user
    Route::get('/user', [userController::class, 'index']);
    //detail user
    Route::get('/detail/{id}', [userController::class, 'detail']);
    //buat user
    Route::get('/formcreate', [userController::class, 'formcreate']);
    //script tambah user
    Route::post('/createuser', [userController::class, 'createuser']);
    //script edit user 
    Route::get('/edit/{id}', [userController::class, 'edit']);
    //script ubah data/update
    Route::put('/update/{id}', [userController::class, 'update']);
    //script konfirmasi hapus user
    Route::get('/confirmdelete/{id}', [userController::class, 'confirmdelete']);
    //script penghapusan data user
    Route::delete('/destroy/{id}', [userController::class, 'destroy']);

    //script settings
    Route::get('/settings', [settingsController::class, 'index']);
    //script tambah jenis pengiriman
    Route::post('/createjeniskirim', [settingsController::class, 'create']);
    //script hapus jenis pengiriman
    Route::delete('/destroy/{id}', [settingsController::class, 'destroy']);
    
    //script laporan supervisor
    Route::get('/laporanspv', [laporanController::class, 'index']);

    //script frontline
    Route::get('/frontline', [frontlineController::class, 'index']);
    //script frontline input paket pengiriman
    Route::get('/inputpengiriman', [frontlineController::class, 'inputpengiriman']);
    //script create input paket pengiriman
    Route::post('/createpengiriman', [frontlineController::class, 'createpengiriman']);

    //script gudang
    Route::get('/warehouse', [warehouseController::class, 'index']);



});

