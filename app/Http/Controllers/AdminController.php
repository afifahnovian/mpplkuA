<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function viewAdminDashboard()
    {
        return view('admin.admindashboard');
    }

    public function viewSuratDiproses()
    {
        return view('admin.suratdiproses');
    }

    public function viewSuratMasuk()
    {
        return view('admin.suratmasuk');
    }
    
    public function viewSuratSelesai()
    {
        return view('admin.suratselesai');
    }
    
    public function viewSuratDitolak()
    {
        return view('admin.suratditolak');
    }
    
    public function viewCreateAdmin()
    {
        return view('admin.createadmin');
    }

    public function viewKeluar()
    {
        return view('admin.adminlogin');
    }

    public function viewPengajuan()
    {
        return view('admin.pengajuansurat');
    }
}
