<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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
    return view('welcome');
});
Route::get('/user/dashboard', function () {
    return view('user.dashboard');
});
Route::get('/user/biodata', function () {
    return view('user.biodata');
});

Route::prefix('user')->group( function(){
    Route::get('/dashboard', [UserController::class, 'viewDashboard'])->name('user-dashboard');
    Route::get('/biodata', [UserController::class,'viewBiodata'])->name('user-biodata');
    Route::get('surat/surat-keterangan-aktif', [UserController::class,'viewSuratKeteranganAktif'])->name('user-surat-keterangan-aktif');
    Route::get('surat/surat-keterangan-lulus', [UserController::class,'viewSuratKeteranganLulus'])->name('user-surat-keterangan-lulus');
    Route::get('surat/surat-perpanjangan-masa-studi', [UserController::class,'viewSuratPerpanjanganMasaStudi'])->name('user-surat-perpanjangan-masa-studi');
    Route::get('surat/surat-pengunduran-diri', [UserController::class,'viewSuratPengunduranDiri'])->name('user-surat-pengunduran-diri');
    Route::get('surat/surat-keterangan-cuti', [UserController::class, 'viewSuratKeteranganCuti'])->name('user-surat-keterangan-cuti');
    Route::get('surat/surat-keterangan-aktif-cuti', [UserController::class,'viewSuratKeteranganAktifCuti'])->name('user-surat-keterangan-aktif-cuti');
    Route::get('surat/legalisir-transkrip', [UserController::class,'viewLegalisirTranskrip'])->name('user-legalisir-transkrip');
});

// Route::get('/index', function () {
//     return view('index');
// });