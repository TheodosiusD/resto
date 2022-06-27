<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ManagerLoginController;


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
    return view('layouts.app');
});
Route::get('/login', function () {
    return view('login.index');
});
Route::get('/kasir', [TransaksiController::class,'index']);
Route::get('/manager', [ManagerController::class, 'index']);
Route::get('/managerlogin', [ManagerLoginController::class, 'index']);
Route::get('/kasirlogin', [LoginController::class, 'index']);


Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authentication'])->name('authentication');
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::post('/tambahtransaksi', [TransaksiController::class,'store'])->name('tambahtransaksi');
Route::get('/tambah', function () {
    return view('manager.tambah');

});Route::get('/tambahkasir', function () {
    return view('transaksi.tambah');
});
Route::get('/tambahmanager', function () {
    return view('manager.tambah');
});

Route::post('/tambahmanagerpost', [ManagerController::class, 'store'])->name('tambah-manager');
Route::get('/manager.edit/{id}') -> name('manager.edit');
Route::get('/manager.delete/{id}') -> name('manager.delete');
Route::resource('manager', ManagerController::class);

Route::get('/transaksi.edit/{id}') -> name('transaksi.edit');
Route::get('/transaksi.delete/{id}') -> name('transaksi.delete');
Route::resource('transaksi', TransaksiController::class);