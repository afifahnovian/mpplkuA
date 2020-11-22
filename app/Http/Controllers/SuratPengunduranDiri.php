<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\SuratPengunduranDiri;
 
class SuratPengunduranDiriController extends Controller
{
    public function index()
    {
        $surat_pengunduran_diri = SuratPengunduranDiri::latest()->paginate(5);
 
        return view('surat_pengunduran_diri.index',compact('surat_pengunduran_diri'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
 
    public function create()
    {
        return view('surat_pengunduran_diri.create');
    }
 
    public function store(Request $request)
    {
        $request->validate([
            'tahunAkademikPengunduran' => 'required',
            'tanggalPengunduran' => 'required',
            'fileSuratPengajuanMahasiswa' => 'required',
            'fileSuratPengantarDept' => 'required',
        ]);
 
        SuratPengunduranDiri::create($request->all());
 
        return redirect()->route('surat_pengunduran_diri.index')
                        ->with('success','Created successfully.');
    }
 
    public function show(SuratPengunduranDiri $surat)
    {
        return view('surat_pengunduran_diri.show',compact('surat'));
    }
 
    public function edit(SuratPengunduranDiri $surat)
    {
        return view('surat_pengunduran_diri.edit',compact('surat'));
    }
 
    public function update(Request $request, SuratPengunduranDiri $surat)
    {
        $request->validate([
            'tahunAkademikPengunduran' => 'required',
            'tanggalPengunduran' => 'required',
            'fileSuratPengajuanMahasiswa' => 'required',
            'fileSuratPengantarDept' => 'required',
        ]);
 
        $surat->update($request->all());
 
        return redirect()->route('surat_pengunduran_diri.index')
                        ->with('success','Updated successfully');
    }
 
    public function destroy(SuratPengunduranDiri $surat)
    {
        $surat->delete();
 
        return redirect()->route('surat_pengunduran_diri.index')
                        ->with('success','Deleted successfully');
    }
}