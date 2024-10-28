<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [BarangController::class, 'index']);

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::get('register', [AuthController::class, 'register']);
Route::post('user/store', [UserController::class, 'store']);
Route::post('authentication', [AuthController::class, 'auth']);
Route::get('logout', [AuthController::class, 'logout']);

Route::get('admin/dashboard', [AdminController::class, 'index']);
Route::get('admin/admin', [AdminController::class, 'admin']);
Route::get('admin/user', [AdminController::class, 'user']);
Route::post('admin/store', [AdminController::class, 'store']);
Route::get('admin/barang', [AdminController::class, 'barang']);
Route::get('admin/transaksi', [AdminController::class, 'transaksi']);
Route::post('admin/insert', [AdminController::class, 'insert']);
Route::post('/update/transaksi/{id}', [AdminController::class, 'update']);

Route::get('user/home_page', [UserController::class, 'index']);
Route::get('user/show/{id}', [BarangController::class, 'show']);
Route::post('user/show/konfirmasi/{id}', [BarangController::class, 'beli']);
Route::post('/order', [BarangController::class, 'order'])->name('order');
Route::get('/user/histori', [BarangController::class, 'histori']);

Route::get('user/show', function () {
    return view('user/show');
});
