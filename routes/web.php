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
<<<<<<< HEAD
    Route::get('/admindashboard', [AdminController::class, 'viewAdminDashboard'])->name('admin-dashboard');
    Route::get('/suratdiproses', [AdminController::class, 'viewSuratDiproses'])->name('admin-diproses');
    Route::get('/suratmasuk', [AdminController::class, 'viewSuratMasuk'])->name('admin-masuk');
    Route::get('/suratselesai', [AdminController::class, 'viewSuratSelesai'])->name('admin-selesai');
    Route::get('/suratditolak', [AdminController::class, 'viewSuratDitolak'])->name('admin-ditolak');
    Route::get('/createadmin', [AdminController::class, 'viewCreateAdmin'])->name('admin-create');
    Route::get('/adminlogin', [AdminController::class, 'viewKeluar'])->name('admin-keluar');
    Route::get('/suratmasuk/pengajuansurat', [AdminController::class, 'viewPengajuan'])->name('admin-pengajuan');
=======
    Route::get('/dashboard', [AdminController::class, 'viewAdminDashboard'])->name('admin-dashboard');
    Route::get('/surat/diproses', [AdminController::class, 'viewSuratDiproses'])->name('admin-diproses');
    Route::get('/surat/masuk', [AdminController::class, 'viewSuratMasuk'])->name('admin-masuk');
    Route::get('/surat/selesai', [AdminController::class, 'viewSuratSelesai'])->name('admin-selesai');
    Route::get('/surat/ditolak', [AdminController::class, 'viewSuratDitolak'])->name('admin-ditolak');
    Route::get('/create/admin', [AdminController::class, 'viewCreateAdmin'])->name('admin-create');
    Route::get('/login', [AdminController::class, 'viewKeluar'])->name('admin-keluar');
>>>>>>> f98fad8fe38ac6af74d622fe71584e5ae5c4f08b
    
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
});
