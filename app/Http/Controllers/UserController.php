<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function viewDashboard()
    {
        return view('user.dashboard');
    }
    public function viewBiodata()
    {
        return view('user.biodata');
    }
    public function viewSuratKeteranganAktif()
    {
        return view('user.surat.surat-keterangan-aktif');
    }
    public function viewSuratKeteranganLulus()
    {
        return view('user.surat.surat-keterangan-lulus');
    }
    public function viewSuratPerpanjanganMasaStudi()
    {
        return view('user.surat.surat-perpanjangan-masa-studi');
    }
    public function viewSuratPengunduranDiri()
    {
        return view('user.surat.surat-pengunduran-diri');
    }
    public function viewSuratKeteranganCuti()
    {
        return view('user.surat.surat-cuti');
    }
    public function viewSuratKeteranganAktifCuti()
    {
        return view('user.surat.surat-aktif-cuti');
    }
    public function viewLegalisirTranskrip()
    {
        return view('user.surat.legalisir-transkrip');
    }
    
    
}
