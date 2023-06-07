<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
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

Route::get('/', [AuthController::class, 'login'])->name('login');
Route::post('/', [AuthController::class, 'postLogin']);
Route::get('/logout', [AuthController::class, 'logout']);

// admin
Route::group(['middleware' => ['auth', 'Roles:admin']], function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard']);
});