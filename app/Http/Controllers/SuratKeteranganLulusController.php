<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\SuratKeteranganLulus;
 
class SuratKeteranganLulusController extends Controller
{
    public function index()
    {
        $surat_keterangan_lulus = SuratKeteranganLulus::latest()->paginate(5);
 
        return view('surat_keterangan_lulus.index',compact('surat_keterangan_lulus'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
 
    public function create()
    {
        return view('surat_keterangan_lulus.create');
    }
 
    public function store(Request $request)
    {
        $request->validate([
            'alamatAsal' => 'required',
            'alamatBogor' => 'required',
            'fileSuratPengantarDept' => 'required',
            'fileLembarPengesahan' => 'required',
            'fileTranskrip' => 'required',
            'fileSkripsi' => 'required',
            'fileBayarSPP' => 'required',
            'fileBuktiBayarWisuda' => 'required',
            'fileFoto' => 'required',
        ]);
 
        SuratKeteranganLulus::create($request->all());
 
        return redirect()->route('surat_keterangan_lulus.index')
                        ->with('success','Created successfully.');
    }
 
    public function show(SuratKeteranganLulus $surat)
    {
        return view('surat_keterangan_lulus.show',compact('surat'));
    }
 
    public function edit(SuratKeteranganLulus $surat)
    {
        return view('surat_keterangan_lulus.edit',compact('surat'));
    }
 
    public function update(Request $request, SuratKeteranganLulus $surat)
    {
        $request->validate([
            'alamatAsal' => 'required',
            'alamatBogor' => 'required',
            'fileSuratPengantarDept' => 'required',
            'fileLembarPengesahan' => 'required',
            'fileTranskrip' => 'required',
            'fileSkripsi' => 'required',
            'fileBayarSPP' => 'required',
            'fileBuktiBayarWisuda' => 'required',
            'fileFoto' => 'required',
        ]);
 
        $surat->update($request->all());
 
        return redirect()->route('surat_keterangan_lulus.index')
                        ->with('success','Updated successfully');
    }
 
    public function destroy(SuratKeteranganLulus $surat)
    {
        $surat->delete();
 
        return redirect()->route('surat_keterangan_lulus.index')
                        ->with('success','Deleted successfully');
    }
}