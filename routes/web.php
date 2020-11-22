<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

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

    //landing page
Route::get('/', function () {
    return view('welcome');
});

    //admin

Route::prefix('admin')->group( function(){

    Route::get('/admindashboard', [AdminController::class, 'viewAdminDashboard'])->name('admin-dashboard');
    Route::get('/suratdiproses', [AdminController::class, 'viewSuratDiproses'])->name('admin-diproses');
    Route::get('/suratmasuk', [AdminController::class, 'viewSuratMasuk'])->name('admin-masuk');
    Route::get('/suratselesai', [AdminController::class, 'viewSuratSelesai'])->name('admin-selesai');
    Route::get('/suratditolak', [AdminController::class, 'viewSuratDitolak'])->name('admin-ditolak');
    Route::get('/createadmin', [AdminController::class, 'viewCreateAdmin'])->name('admin-create');
    Route::get('/adminlogin', [AdminController::class, 'viewKeluar'])->name('admin-keluar');
    Route::get('/suratmasuk/pengajuansurat', [AdminController::class, 'viewPengajuan'])->name('admin-pengajuan');
    
});
   
    //user

Route::prefix('user')->group( function(){
    Route::get('/login', [UserController::class, 'viewLogin'])->name('user-login');
    Route::get('/register', [UserController::class, 'viewRegister'])->name('user-register');
    Route::get('/dashboard', [UserController::class, 'viewDashboard'])->name('user-dashboard');
    Route::get('/biodata', [UserController::class,'viewBiodata'])->name('user-biodata');
    Route::get('/biodata/edit', [UserController::class,'viewBiodataEdit'])->name('user-biodata-edit');
    Route::get('surat/surat-keterangan-aktif', [UserController::class,'viewSuratKeteranganAktif'])->name('user-surat-keterangan-aktif');
    Route::get('surat/surat-keterangan-lulus', [UserController::class,'viewSuratKeteranganLulus'])->name('user-surat-keterangan-lulus');
    Route::get('surat/surat-perpanjangan-masa-studi', [UserController::class,'viewSuratPerpanjanganMasaStudi'])->name('user-surat-perpanjangan-masa-studi');
    Route::get('surat/surat-pengunduran-diri', [UserController::class,'viewSuratPengunduranDiri'])->name('user-surat-pengunduran-diri');
    Route::get('surat/surat-keterangan-cuti', [UserController::class, 'viewSuratKeteranganCuti'])->name('user-surat-keterangan-cuti');
    Route::get('surat/surat-keterangan-aktif-cuti', [UserController::class,'viewSuratKeteranganAktifCuti'])->name('user-surat-keterangan-aktif-cuti');
    Route::get('surat/legalisir-transkrip', [UserController::class,'viewLegalisirTranskrip'])->name('user-legalisir-transkrip');

        //view detail
    Route::get('surat/surat-keterangan-aktif/detail', [UserController::class,'viewSuratKeteranganAktifDetail'])->name('user-surat-keterangan-aktif-detail');
    Route::get('surat/surat-keterangan-lulus/detail', [UserController::class,'viewSuratKeteranganLulusDetail'])->name('user-surat-keterangan-lulus');
    Route::get('surat/surat-perpanjangan-masa-studi/detail', [UserController::class,'viewSuratPerpanjanganMasaStudiDetail'])->name('user-surat-perpanjangan-masa-studi-detail');
    Route::get('surat/surat-pengunduran-diri/detail', [UserController::class,'viewSuratPengunduranDiriDetail'])->name('user-surat-pengunduran-diri-detail');
    Route::get('surat/surat-keterangan-cuti/detail', [UserController::class, 'viewSuratKeteranganCutiDetail'])->name('user-surat-keterangan-cuti-detail');
    Route::get('surat/surat-keterangan-aktif-cuti/detail', [UserController::class,'viewSuratKeteranganAktifCutiDetail'])->name('user-surat-keterangan-aktif-cuti-detail');
    Route::get('surat/legalisir-transkrip/detail', [UserController::class,'viewLegalisirTranskripDetail'])->name('user-legalisir-transkrip-detail');
});