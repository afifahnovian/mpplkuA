<?php

namespace App\Http\Controllers;

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
        return view('admin.surat-masuk');
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
        return view('admin.detail.surat-keterangan-aktif-detail');
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

