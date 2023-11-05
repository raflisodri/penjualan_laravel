<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\SepatuController;
use App\Http\Controllers\SuplierController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\DashboardController;



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
Route::get('/', [LoginController::class,'index']);
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/postLogin', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout']);

//menanmpilkan form
Route::get('/cekstatus', [LoginController::class,'index']);
//input/eksekusi
Route::post('/cekstatus/cek', [LoginController::class,'cek']);
//menampilkan hasil
Route::get('/cekstatus/history/{id}', [LoginController::class,'history']);


Route::get('/dashboard', [DashboardController::class,'index']);
Route::get('/user', [UserController::class,'index']);
Route::get('/user/tambah',[UserController::class,'create']);
Route::post('/user/simpan',[UserController::class,'store']);
Route::get('/user/{id}/edit',[UserController::class,'show']);
Route::post('/user/{id}/update',[UserController::class,'update']);
Route::get('/user/{id}/hapus',[UserController::class,'destroy']);

Route::get('/member', [MemberController::class,'index']);
Route::get('/member/tambah',[MemberController::class,'create']);
Route::post('/member/simpan',[MemberController::class,'store']);
Route::get('/member/{id}/edit',[MemberController::class,'show']);
Route::post('/member/{id}/update',[MemberController::class,'update']);
Route::get('/member/{id}/hapus',[MemberController::class,'destroy']);

Route::get('/sepatu', [SepatuController::class,'index']);
Route::get('/sepatu/tambah',[SepatuController::class,'create']);
Route::post('/sepatu/simpan',[SepatuController::class,'store']);
Route::get('/sepatu/{id}/edit',[SepatuController::class,'show']);
Route::post('/sepatu/{id}/update',[SepatuController::class,'update']);
Route::get('/sepatu/{id}/hapus',[SepatuController::class,'destroy']);

Route::get('/suplier', [SuplierController::class,'index']);
Route::get('/suplier/tambah',[SuplierController::class,'create']);
Route::post('/suplier/simpan',[SuplierController::class,'store']);
Route::get('/suplier/{id}/edit',[SuplierController::class,'show']);
Route::post('/suplier/{id}/update',[SuplierController::class,'update']);
Route::get('/suplier/{id}/hapus',[SuplierController::class,'destroy']);

Route::get('/penjualan', [PenjualanController::class,'index']);
Route::get('/penjualan/tambah',[PenjualanController::class,'create']);
Route::post('/penjualan/simpan',[PenjualanController::class,'store']);
Route::get('/penjualan/{id}/edit',[PenjualanController::class,'show']);
Route::post('/penjualan/{id}/update',[PenjualanController::class,'update']);
Route::get('/penjualan/{id}/hapus',[PenjualanController::class,'destroy']);
Route::any('/penjualan/cetak', [PenjualanController::class, 'cetak']);
Route::get('/penjualan/struk/{id}', [PenjualanController::class, 'struk']);

