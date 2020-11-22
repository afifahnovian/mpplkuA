<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\SuratPerpanjanganMasaStudi;
 
class SuratPerpanjanganMasaStudiController extends Controller
{
    public function index()
    {
        $surat_perpanjangan_masa_studi = SuratPerpanjanganMasaStudi::latest()->paginate(5);
 
        return view('surat_perpanjangan_masa_studi.index',compact('surat_perpanjangan_masa_studi'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
 
    public function create()
    {
        return view('surat_perpanjangan_masa_studi.create');
    }
 
    public function store(Request $request)
    {
        $request->validate([
            'waktuAkhirPerpanjangan' => 'required',
            'waktuAkhirPerpanjangan_Tahun' => 'required',
            'fileTabelRencanaStudi' => 'required',
        ]);
 
        SuratPerpanjanganMasaStudi::create($request->all());
 
        return redirect()->route('surat_perpanjangan_masa_studi.index')
                        ->with('success','Created successfully.');
    }
 
    public function show(SuratPerpanjanganMasaStudi $surat)
    {
        return view('surat_perpanjangan_masa_studi.show',compact('surat'));
    }
 
    public function edit(SuratPerpanjanganMasaStudi $surat)
    {
        return view('surat_perpanjangan_masa_studi.edit',compact('surat'));
    }
 
    public function update(Request $request, SuratPerpanjanganMasaStudi $surat)
    {
        $request->validate([
            'waktuAkhirPerpanjangan' => 'required',
            'waktuAkhirPerpanjangan_Tahun' => 'required',
            'fileTabelRencanaStudi' => 'required',
        ]);
 
        $surat->update($request->all());
 
        return redirect()->route('surat_perpanjangan_masa_studi.index')
                        ->with('success','Updated successfully');
    }
 
    public function destroy(SuratPerpanjanganMasaStudi $surat)
    {
        $surat->delete();
 
        return redirect()->route('surat_perpanjangan_masa_studi.index')
                        ->with('success','Deleted successfully');
    }
}