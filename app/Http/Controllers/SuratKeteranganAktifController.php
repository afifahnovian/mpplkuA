<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\SuratKeteranganAktif;
 
class SuratKeteranganAktifController extends Controller
{ 
    public function index()
    {
        $surat_keterangan_aktif = SuratKeteranganAktif::latest()->paginate(5);
 
        return view('surat_keterangan_aktif.index',compact('surat_keterangan_aktif'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
 
    public function create()
    {
        return view('surat_keterangan_aktif.create');
    }
 
    public function store(Request $request)
    {
        $request->validate([
            'keperluan' => 'required',
            'fileKTM' => 'required',
            'fileBayarSPP' => 'required',
        ]);
 
        SuratKeteranganAktif::create($request->all());
 
        return redirect()->route('surat_keterangan_aktif.index')
                        ->with('success','Created successfully.');
    }
 
    public function show(SuratKeteranganAktif $surat)
    {
        return view('surat_keterangan_aktif.show',compact('surat'));
    }
 
    public function edit(SuratKeteranganAktif $surat)
    {
        return view('surat_keterangan_aktif.edit',compact('surat'));
    }
 
    public function update(Request $request, SuratKeteranganAktif $surat)
    {
        $request->validate([
            'keperluan' => 'required',
            'fileKTM' => 'required',
            'fileBayarSPP' => 'required',
        ]);
 
        $surat->update($request->all());
 
        return redirect()->route('surat_keterangan_aktif.index')
                        ->with('success','Updated successfully');
    }
 
    public function destroy(SuratKeteranganAktif $surat)
    {
        $surat->delete();
 
        return redirect()->route('surat_keterangan_aktif.index')
                        ->with('success','Deleted successfully');
    }
}