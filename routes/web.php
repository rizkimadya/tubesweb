<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PenilaianController;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\SoalUjianController;
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
    return view('beranda');
});


Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'postLogin']);
Route::get('/logout', [AuthController::class, 'logout']);

// admin
Route::group(['middleware' => ['auth', 'Roles:admin']], function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard']);

    // peserta
    Route::get('/peserta', [PesertaController::class, 'index']);
    Route::post('/peserta', [PesertaController::class, 'store']);
    Route::get('/peserta/edit/{id}', [PesertaController::class, 'edit']);
    Route::post('/peserta/update/{id}', [PesertaController::class, 'update']);
    Route::delete('/peserta/destroy/{id}', [PesertaController::class, 'destroy']);

    // soalujian
    Route::get('/soalujian', [SoalUjianController::class, 'index']);
    Route::post('/soalujian', [SoalUjianController::class, 'store']);
    Route::get('/soalujian/edit/{id}', [SoalUjianController::class, 'edit']);
    Route::get('/soalujian/show/{id}', [SoalUjianController::class, 'show']);
    Route::post('/soalujian/update/{id}', [SoalUjianController::class, 'update']);
    Route::delete('/soalujian/destroy/{id}', [SoalUjianController::class, 'destroy']);

    // penilaian
    Route::get('/penilaian', [PenilaianController::class, 'index']);
});

// peserta
Route::group(['middleware' => ['auth', 'Roles:peserta']], function () {
    Route::get('/dashboard-peserta', [AdminController::class, 'dashboardPeserta']);
    Route::post('/dashboard-peserta', [PenilaianController::class, 'store']);
});
