<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BiodataUserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\UsersRegistrationController;
use App\Http\Controllers\UserLoginController;
use App\Http\Controllers\SuratPengunduranDiriController;
use App\Http\Controllers\SuratKeteranganCutiController;
use App\Http\Controllers\SuratKeteranganAktifSetelahCutiController;
use App\Http\Controllers\LegalisasiTranskripController;
use App\Http\Controllers\SuratKeteranganAktifController;
use App\Http\Controllers\SuratKeteranganLulusController;
use App\Http\Controllers\SuratPerpanjanganMasaStudiController;


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
//Email Service
//Route::post('/send-email', 'MailController@sendEmail');
Route::post('/send-email',[MailController::class, 'sendEmail']);
//admin

Route::prefix('admin')->group( function(){
    Route::get('/admindashboard', [AdminController::class, 'viewAdminDashboard'])->name('admin-dashboard');
    Route::get('/suratdiproses', [AdminController::class, 'viewSuratDiproses'])->name('admin-diproses');
    Route::get('/suratmasuk', [AdminController::class, 'viewSuratMasuk'])->name('admin-masuk');
    Route::get('/suratselesai', [AdminController::class, 'viewSuratSelesai'])->name('admin-selesai');
    Route::get('/suratditolak', [AdminController::class, 'viewSuratDitolak'])->name('admin-ditolak');
    Route::get('/createadmin', [AdminController::class, 'viewCreateAdmin'])->name('admin-create');
    Route::get('/adminlogin', [AdminController::class, 'viewKeluar'])->name('admin-keluar');
    Route::get('/surat-keterangan-aktif-detail', [AdminController::class, 'viewSuratKeteranganAktif'])->name('admin-suratketeranganaktif');
    Route::get('/legalisir', [AdminController::class, 'viewLegalisir'])->name('admin-legalisir');
    Route::get('/surat-keterangan-cuti-detail', [AdminController::class, 'viewSuratKeteranganCuti'])->name('admin-suratketerangancuti');
    Route::get('/surat-keterangan-aktif-setelah-cuti', [AdminController::class, 'viewSuratKeteranganAktifSetelahCuti'])->name('admin-suratketeranganaktifsetelahcuti');
    Route::get('/surat-keterangan-lulus', [AdminController::class, 'viewSuratKeteranganLulus'])->name('admin-suratketeranganlulus');
    Route::get('/surat-pengunduran-diri', [AdminController::class, 'viewSuratPengunduranDiri'])->name('admin-suratpengundurandiri');
    Route::get('/surat-perpanjangan-masa', [AdminController::class, 'viewSuratPerpanjanganMasa'])->name('admin-suratperpanjanganmasa');
    Route::get('/diproses', [AdminController::class, 'viewDiproses'])->name('admin-suratdiproses');
    Route::get('/ditolak', [AdminController::class, 'viewDitolak'])->name('admin-suratditolak');
    
});
   
//user

Route::prefix('user')->group( function(){
    //Route::get('/login', [UserController::class, 'viewLogin'])->name('user-login');
    Route::get('/login','App\Http\Controllers\UserLoginController@getLogin');
    Route::post('/login', 'App\Http\Controllers\UserLoginController@postLogin')->name('user-login');

    //Route::get('/register', [UserController::class, 'viewRegister'])->name('user-register');
    Route::get('/user/register','App\Http\Controllers\UsersRegistrationController@create');
    Route::post('/user/register', 'App\Http\Controllers\UsersRegistrationController@store')->name('user-register');
    
    Route::get('/dashboard', [UserController::class, 'viewDashboard'])->name('user-dashboard');

    Route::get('/biodata', [UserController::class,'viewBiodata'])->name('user-biodata');
    Route::get('/biodata/edit/{id}', [UserController::class, 'viewBiodataEdit'])->name('user-biodata-edit-view');
    Route::post('/biodata/edit', [BiodataUserController::class,'updateBiodata'])->name('user-biodata-update');
    
    Route::get('/surat/surat-keterangan-aktif', [UserController::class,'viewSuratKeteranganAktif'])->name('user-surat-keterangan-aktif');
    Route::post('/surat/surat-keterangan-aktif', [SuratKeteranganAktifController::class,'store'])->name('create-user-surat-keterangan-aktif');

    Route::get('/surat/surat-keterangan-lulus', [UserController::class,'viewSuratKeteranganLulus'])->name('user-surat-keterangan-lulus');
    Route::post('/surat/surat-keterangan-lulus', [SuratKeteranganLulusController::class,'store'])->name('create-user-surat-keterangan-lulus');

    Route::get('surat/surat-perpanjangan-masa-studi', [UserController::class,'viewSuratPerpanjanganMasaStudi'])->name('user-surat-perpanjangan-masa-studi');
    Route::post('surat/surat-perpanjangan-masa-studi', [SuratPerpanjanganMasaStudiController::class,'store'])->name('create-user-surat-perpanjangan-masa-studi');

    //Route::get('surat/surat-pengunduran-diri', [UserController::class,'viewSuratPengunduranDiri'])->name('user-surat-pengunduran-diri');
    //Route::get('surat/surat-keterangan-cuti', [UserController::class, 'viewSuratKeteranganCuti'])->name('user-surat-keterangan-cuti');
    //Route::get('surat/surat-keterangan-aktif-cuti', [UserController::class,'viewSuratKeteranganAktifCuti'])->name('user-surat-keterangan-aktif-cuti');
    
    Route::get('surat/legalisir-transkrip', [UserController::class,'viewLegalisirTranskrip'])->name('user-legalisir-transkrip');
    Route::post('surat/legalisir-transkrip', [LegalisasiTranskripController::class,'store'])->name('create-user-legalisir-transkrip');

    //view detail
    Route::get('surat/surat-keterangan-aktif/detail', [UserController::class,'viewSuratKeteranganAktifDetail'])->name('user-surat-keterangan-aktif-detail');
    Route::get('surat/surat-keterangan-lulus/detail', [UserController::class,'viewSuratKeteranganLulusDetail'])->name('user-surat-keterangan-lulus-detail');
    Route::get('surat/surat-perpanjangan-masa-studi/detail', [UserController::class,'viewSuratPerpanjanganMasaStudiDetail'])->name('user-surat-perpanjangan-masa-studi-detail');
    Route::get('surat/surat-pengunduran-diri/detail', [UserController::class,'viewSuratPengunduranDiriDetail'])->name('user-surat-pengunduran-diri-detail');
    Route::get('surat/surat-keterangan-cuti/detail', [UserController::class, 'viewSuratKeteranganCutiDetail'])->name('user-surat-keterangan-cuti-detail');
    Route::get('surat/surat-keterangan-aktif-cuti/detail', [UserController::class,'viewSuratKeteranganAktifCutiDetail'])->name('user-surat-keterangan-aktif-cuti-detail');
    Route::get('surat/legalisir-transkrip/detail', [UserController::class,'viewLegalisirTranskripDetail'])->name('user-legalisir-transkrip-detail');
});

Route::get('surat/surat-pengunduran-diri','App\Http\Controllers\SuratPengunduranDiriController@create');
Route::post('surat/surat-pengunduran-diri', 'App\Http\Controllers\SuratPengunduranDiriController@store')->name('user-surat-pengunduran-diri');

Route::get('surat/surat-keterangan-cuti','App\Http\Controllers\SuratKeteranganCutiController@create');
Route::post('surat/surat-keterangan-cuti', 'App\Http\Controllers\SuratKeteranganCutiController@store')->name('user-surat-keterangan-cuti');

Route::get('surat/surat-keterangan-aktif-cuti','App\Http\Controllers\SuratKeteranganAktifSetelahCutiController@create');
Route::post('surat/surat-keterangan-aktif-cuti', 'App\Http\Controllers\SuratKeteranganAktifSetelahCutiController@store')->name('user-surat-keterangan-aktif-cuti');