<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\KonsulController;
use App\Http\Controllers\TransaksiController;

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

Route::get('/', [HomeController::class, 'awal'])->name('login')->middleware('guest');
Route::get('/kebijakan', [HomeController::class, 'kebijakan']);
//auth user
Route::get('/login', [UserController::class, 'index'])->middleware('guest');
Route::post('/login', [UserController::class, 'loginproses']);
Route::post('/saveregis', [UserController::class, 'storeuser']);
Route::get('register', [UserController::class, 'register'])->middleware('guest');
Route::post('/logoutuser', [UserController::class, 'logout']);

// user
Route::get('/home', [HomeController::class, 'index'])->middleware('auth');
Route::get('/pesan', [HomeController::class, 'pesan'])->middleware('auth');
Route::get('/dokter', [DokterController::class, 'index'])->middleware('auth');
Route::get('/obat', [ObatController::class, 'index'])->middleware('auth');
Route::get('/obat/checkout', [ObatController::class, 'co']);
Route::get('/konsultasi', [KonsulController::class, 'index'])->middleware('auth');
Route::post('/konsultasi/simpan', [KonsulController::class, 'store']);


// admin
Route::get('/dashboard', [HomeController::class, 'dashboard'])->middleware('auth');

Route::get('/obats', [ObatController::class, 'obats'])->middleware('auth');
Route::get('/obats/tambah', [ObatController::class, 'create']);
Route::post('/obats/simpan', [ObatController::class, 'store']);
Route::get('/obats/{id}/edit', [ObatController::class, 'edit']);
Route::post('/obats/{id}/update', [ObatController::class, 'update']);
Route::get('/obats/{id}/hapus', [ObatController::class, 'destroy']);

Route::get('/dokters', [DokterController::class, 'dokters'])->middleware('auth');
Route::get('/dokters/tambah', [DokterController::class, 'create']);
Route::post('/dokters/simpan', [DokterController::class, 'store']);
Route::get('/dokters/{id}/edit', [DokterController::class, 'edit']);
Route::post('/dokters/{id}/update', [DokterController::class, 'update']);
Route::get('/dokters/{id}/hapus', [DokterController::class, 'destroy']);

Route::get('/konsultasis', [KonsulController::class, 'konsultasis'])->middleware('auth');
Route::get('/konsultasis/tambah', [KonsulController::class, 'create']);
Route::post('/konsultasis/simpan', [KonsulController::class, 'store']);
Route::get('/konsultasis/{id}/show', [KonsulController::class, 'show']);
Route::post('/konsultasis/{id}/update', [KonsulController::class, 'update']);
Route::get('/konsultasis/{id}/hapus', [KonsulController::class, 'destroy']);

Route::get('/transaksi', [TransaksiController::class, 'index'])->middleware('auth');
Route::get('/transaksi/tambah', [TransaksiController::class, 'create']);
Route::post('/transaksi/simpan', [TransaksiController::class, 'store']);
Route::get('/transaksi/{id}/hapus', [TransaksiController::class, 'destroy']);



//auth admin
Route::get('/admin', [AuthController::class, 'index']);
Route::post('/savelogin', [AuthController::class, 'loginproses']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::get('/info', function (){
    return view('info');
});
Route::get('/artikel1', function (){
    return view('artikel1');
});
Route::get('/artikel2', function (){
    return view('artikel2');
});
Route::get('/artikel3', function (){
    return view('artikel3');
});
Route::get('/artikel4', function (){
    return view('artikel4');
});
Route::get('/artikel5', function (){
    return view('artikel5');
});
Route::get('/artikel6', function (){
    return view('artikel6');
});

Route::get('/info', function () {
    return view('info');
});

Route::get('/tentang', function () {
    return view('tentang');
});

Route::get('/kebijakan', function () {
    return view('kebijakan');
});

