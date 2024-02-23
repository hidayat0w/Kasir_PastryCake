<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminKategoriController;
use App\Http\Controllers\AdminProdukController;
use App\Http\Controllers\AdminTransaksiController;
use App\Http\Controllers\RiwayatController;
use App\Http\Controllers\AdminTransaksiDetailController;






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
Route::get('7login', [AdminAuthController::class, 'index']);
Route::post('/login/do', [AdminAuthController::class, 'doLogin']);

Route::get('/register', [AdminAuthController::class, 'register'])->name('register');
Route::post('/register-proses', [AdminAuthController::class, 'register_proses'])->name('register-proses');
Route::get('/login', [AdminAuthController::class, 'showLoginForm'])->name('login');


Route::get('/', function () {
    $data = [
        'content'  => 'admin.dashboard.index'
    ];
    return view('admin.layouts.wrapper', $data);
});




 
    Route::middleware(['auth', 'userAkses:admin,pengguna'])->prefix('kasir')->group(function () {
    Route::get('/transaksi/detail/selesai/{id}', [AdminTransaksiDetailController::class, 'done']);
    Route::get('/transaksi/detail/delete', [AdminTransaksiDetailController::class, 'delete']);
    Route::get('/laporan-kasir', 'KasirController@laporan')->name('laporan.kasir');
    Route::post('/transaksi/detail/create', [AdminTransaksiDetailController::class, 'create']);
    Route::resource('/transaksi', AdminTransaksiController::class );
    Route::post('invoice/print/{id}', [AdminTransaksiController::class,'print_invoice'])->name('print.invoice');
    
    Route::resource('/riwayat', RiwayatController::class );
    Route::post('/riwayat/print', [RiwayatController::class, 'print'])->name('riwayat.print');
    Route::get('/riwayat/pdf', [RiwayatController::class, 'generatePDF'])->name('riwayat.pdf'); 
    Route::delete('riwayat/destroy/{id}',[RiwayatController::class,'destroy'])->name('riwayat.destroy');


});

Route::middleware(['auth', 'userAkses:admin'])->prefix('admin')->group(function () {
    Route::resource('/produk', AdminProdukController::class );
    Route::resource('/kategori', AdminKategoriController::class );
    Route::resource('/user', AdminUserController::class );
    
});