<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TandonController;
use App\Http\Controllers\LogTandonController;

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

Route::get('/', [AuthController::class, 'login'])->name('login');
Route::post('/proses_login', [AuthController::class, 'proses_login']);
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/proses_register', [AuthController::class, 'proses_register']);
Route::get('/logout', [AuthController::class, 'actionlogout']);

Route::group(['middleware' => 'auth'], function () {
    Route::resource('admin', AdminController::class);
    Route::resource('tandon', TandonController::class);
    Route::resource('data', LogTandonController::class);
    Route::get('user', [AdminController::class, 'index_user']);
});
Route::get('/log', [LogTandonController::class, 'getData']);
