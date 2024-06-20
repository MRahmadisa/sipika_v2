<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashadminController;
use App\Http\Controllers\DataJabatanController;
use App\Http\Controllers\DataPegawaiController;
use App\Http\Controllers\DataPenggunaAdminController;
use App\Http\Controllers\DataPenggunaPimpinanController;
use App\Http\Controllers\DataPenggunaPegawaiController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PresensiController;
use App\Http\Controllers\LoginController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [DashadminController::class, 'index']);
Route::get('/datajabatan', [DataJabatanController::class, 'index']);
Route::get('/inputdatajabatan', [DataJabatanController::class, 'inputdatajabatan'])->name('inputdatajabatan');
Route::get('/datapegawai', [DataPegawaiController::class, 'index']);
Route::get('/inputdatapegawai', [DataPegawaiController::class, 'inputdatapegawai'])->name('inputdatapegawai');
Route::get('/datapenggunaadmin', [DataPenggunaAdminController::class, 'index']);
Route::get('/inputdatapenggunaadmin', [DataPenggunaAdminController::class, 'inputdatapenggunaadmin'])->name('inputdatapenggunaadmin');
Route::get('/datapenggunapimpinan', [DataPenggunaPimpinanController::class, 'index']);
Route::get('/inputdatapenggunapimpinan', [DataPenggunaPimpinanController::class, 'inputdatapenggunapimpinan'])->name('inputdatapenggunapimpinan');
Route::get('/datapenggunapegawai', [DataPenggunaPegawaiController::class, 'index']);
Route::get('/inputdatapenggunapegawai', [DataPenggunaPegawaiController::class, 'inputdatapenggunapegawai'])->name('inputdatapenggunapegawai');
Route::get('/laporan', [LaporanController::class, 'index']);
Route::get('/login', [LoginController::class, 'index']);
Route::get('/presensi', function () {
    return view('presensi');
});

Route::post('/presensi-masuk', [PresensiController::class, 'presensiMasuk'])->name('presensi.masuk');
Route::post('/presensi-pulang', [PresensiController::class, 'presensiPulang'])->name('presensi.pulang');