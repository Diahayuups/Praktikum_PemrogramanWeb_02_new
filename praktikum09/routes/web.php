<?php

use App\Http\Controllers\DokterController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\JadwalPeriksaController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\UnitKerjaController;
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
    return view('welcome');
});
Route::get('/kabar', function () {
    return view('kondisi');
});
Route::get('/nilai', function () {
    return view('nilai');
});
Route::get('/admin', [AdminController::class, 'index']);

// praktikum 11 pasien in class
Route::get('/admin/pasien', [PasienController::class, 'index'])->name('daftar_pasien');

// tugas pegawai praktikum 10
Route::get('/pegawai', [PegawaiController::class, 'index']);

// Tugas praktikum 11 Unit Kerja 
Route::get('/unit_kerja', [UnitKerjaController::class, 'index'])->name('daftar_unitkerja');

// Tugas praktikum 11 Dokter
Route::get('/dokter', [DokterController::class, 'index'])->name('daftar_dokter');

// Tugas praktikum 11 Periksa
Route::get('/periksa', [JadwalPeriksaController::class, 'index'])->name('jadwal_periksa');