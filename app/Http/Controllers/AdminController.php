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

    public function viewDiprosesLegalisir()
    {
        return view('admin.detail.diproses.Diproses_legalisir');
    }

    public function viewDiprosesKeteranganAktifSetelahCuti()
    {
        return view('admin.detail.diproses.Diproses_keterangan_aktif_setelah_cuti');
    }

    public function viewDiprosesKeteranganAktif()
    {
        return view('admin.detail.diproses.Diproses_keterangan_aktif');
    }

    public function viewDiprosesKeteranganCuti()
    {
        return view('admin.detail.diproses.Diproses_keterangan_cuti');
    }

    public function viewDiprosesKeteranganLulus()
    {
        return view('admin.detail.diproses.Diproses_keterangan_lulus');
    }

    public function viewDiprosesPengunduranDiri()
    {
        return view('admin.detail.diproses.Diproses_pengunduran_diri');
    }

    public function viewDiprosesPerpanjanganMasa()
    {
        return view('admin.detail.diproses.Diproses_perpanjangan_masa');
    }
    
    public function viewDitolakLegalisir()
    {
        return view('admin.detail.ditolak.ditolak_legalisir');
    }
    
    public function viewDitolakKeteranganAktifSetelahCuti()
    {
        return view('admin.detail.ditolak.ditolak_keterangan_aktif_setelah_cuti');
    }

    public function viewDitolakKeteranganAktif()
    {
        return view('admin.detail.ditolak.ditolak_keterangan_aktif');
    }

    public function viewDitolakKeteranganCuti()
    {
        return view('admin.detail.ditolak.ditolak_keterangan_cuti');
    }

    public function viewDitolakKeteranganLulus()
    {
        return view('admin.detail.ditolak.ditolak_keterangan_lulus');
    }

    public function viewDitolakPengunduranDiri()
    {
        return view('admin.detail.ditolak.ditolak_pengunduran_diri');
    }

    public function viewDitolakPerpanjanganMasa()
    {
        return view('admin.detail.ditolak.ditolak_perpanjangan_masa');
    }
}

