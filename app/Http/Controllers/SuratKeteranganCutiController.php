<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\SuratKeteranganCuti;
 
class SuratKeteranganCutiController extends Controller
{
    public function index()
    {
        $surat_keterangan_cuti = SuratKeteranganCuti::latest()->paginate(5);
 
        return view('surat_keterangan_cuti.index',compact('surat_keterangan_cuti'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
 
    public function create()
    {
        return view('surat_keterangan_cuti.create');
    }
 
    public function store(Request $request)
    {
        $request->validate([
            'waktuCuti_TahunAkademik' => 'required',
            'waktuCuti_Semester' => 'required',
            'alasanCuti' => 'required',
            'fileSuratPengajuanMahasiswa' => 'required',
            'fileSuratPengantarDept' => 'required',
            'fileSuratKeteranganDokter' => 'required',
        ]);
 
        SuratKeteranganCuti::create($request->all());
 
        return redirect()->route('surat_keterangan_cuti.index')
                        ->with('success','Created successfully.');
    }
 
    public function show(SuratKeteranganCuti $surat)
    {
        return view('surat_keterangan_cuti.show',compact('surat'));
    }
 
    public function edit(SuratKeteranganCuti $surat)
    {
        return view('surat_keterangan_cuti.edit',compact('surat'));
    }
 
    public function update(Request $request, SuratKeteranganCuti $surat)
    {
        $request->validate([
            'waktuCuti_TahunAkademik' => 'required',
            'waktuCuti_Semester' => 'required',
            'alasanCuti' => 'required',
            'fileSuratPengajuanMahasiswa' => 'required',
            'fileSuratPengantarDept' => 'required',
            'fileSuratKeteranganDokter' => 'required',
        ]);
 
        $surat->update($request->all());
 
        return redirect()->route('surat_keterangan_cuti.index')
                        ->with('success','Updated successfully');
    }
 
    public function destroy(SuratKeteranganCuti $surat)
    {
        $surat->delete();
 
        return redirect()->route('surat_keterangan_cuti.index')
                        ->with('success','Deleted successfully');
    }
}