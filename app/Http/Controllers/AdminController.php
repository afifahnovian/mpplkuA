<?php

namespace App\Http\Controllers;
use App\Models\SuratKeteranganAktif;
use App\Models\SuratKeteranganAktifSetelahCuti;
use App\Models\User;
use App\Models\Admin;
use App\Models\BiodataUser;
use Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function viewAdminDashboard()
    {
        return view('admin.dashboard');
    }

    public function viewSuratDiproses()
    {
        return view('admin.surat-diproses');
    }

    public function viewSuratMasuk()
    {
        $daftarSKA = SuratKeteranganAktif::all();

        $daftarSKAC = SuratKeteranganAktifSetelahCuti::all();

        return view('admin.surat-masuk', compact('daftarSKA', 'daftarSKAC'));
    }
    
    public function viewSuratSelesai()
    {
        return view('admin.surat-selesai');
    }
    
    public function viewSuratDitolak()
    {
        return view('admin.surat-ditolak');
    }
    
    public function viewCreateAdmin()
    {
        return view('admin.create-admin');
    }

    public function viewKeluar()
    {
        return view('admin.login');
    }

    public function viewSuratKeteranganAktif()
    {
        $user = Auth::guard('users')->user();

        $biodata_user = BiodataUser::where('users_id', $user->id)->first();

        return view('admin.detail.surat-keterangan-aktif-detail', compact('biodata_user','user'));
    }

    public function viewLegalisir()
    {
        return view('admin.detail.legalisir-transkrip-detail');
    }

    public function viewSuratKeteranganCuti()
    {
        return view('admin.detail.surat-keterangan-cuti-detail');
    }

    public function viewSuratKeteranganAktifSetelahCuti()
    {
        return view('admin.detail.surat-keterangan-aktif-setelah-cuti-detail');
    }

    public function viewSuratKeteranganLulus()
    {
        return view('admin.detail.surat-keterangan-lulus-detail');
    }

    public function viewSuratPengunduranDiri()
    {
        return view('admin.detail.surat-pengunduran-diri-detail');
    }

    public function viewSuratPerpanjanganMasa()
    {
        return view('admin.detail.surat-perpanjangan-masa-studi-detail');
    }

    public function viewDiproses()
    {
        return view('admin.detail.diproses.diproses');
    }

    public function viewDitolak()
    {
        return view('admin.detail.ditolak.ditolak');
    }
    
}

