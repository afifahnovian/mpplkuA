<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\SuratKeteranganAktifSetelahCuti;
 
class SuratKeteranganAktifSetelahCutiController extends Controller
{ 
    public function index()
    {
        $surat_keterangan_aktif_setelah_cuti = SuratKeteranganAktifSetelahCuti::latest()->paginate(5);
 
        return view('surat_keterangan_aktif_setelah_cuti.index',compact('surat_keterangan_aktif_setelah_cuti'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
 
    public function create()
    {
        return view('surat_keterangan_aktif_setelah_cuti.create');
    }
 
    public function store(Request $request)
    {
        $request->validate([
            'waktuCuti_TahunAkademik' => 'required',
            'waktuCuti_Semester' => 'required',
            'alasanCuti' => 'required',
            'waktuAktif_TahunAkademik' => 'required',
            'waktuAktif_Semester' => 'required',
            'fileSuratCuti' => 'required',
            'fileBayarSPP' => 'required',
        ]);
 
        SuratKeteranganAktifSetelahCuti::create($request->all());
 
        return redirect()->route('surat_keterangan_aktif_setelah_cuti.index')
                        ->with('success','Created successfully.');
    }
 
    public function show(SuratKeteranganAktifSetelahCuti $surat)
    {
        return view('surat_keterangan_aktif_setelah_cuti.show',compact('surat'));
    }
 
    public function edit(SuratKeteranganAktifSetelahCuti $surat)
    {
        return view('surat_keterangan_aktif_setelah_cuti.edit',compact('surat'));
    }
 
    public function update(Request $request, SuratKeteranganAktifSetelahCuti $surat)
    {
        $request->validate([
            'waktuCuti_TahunAkademik' => 'required',
            'waktuCuti_Semester' => 'required',
            'alasanCuti' => 'required',
            'waktuAktif_TahunAkademik' => 'required',
            'waktuAktif_Semester' => 'required',
            'fileSuratCuti' => 'required',
            'fileBayarSPP' => 'required',
        ]);
 
        $surat->update($request->all());
 
        return redirect()->route('surat_keterangan_aktif_setelah_cuti.index')
                        ->with('success','Updated successfully');
    }
 
    public function destroy(SuratKeteranganAktifSetelahCuti $surat)
    {
        $surat->delete();
 
        return redirect()->route('surat_keterangan_aktif_setelah_cuti.index')
                        ->with('success','Deleted successfully');
    }
}