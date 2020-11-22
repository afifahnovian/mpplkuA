<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\LegalisasiTranskrip;
 
class LegalisasiTranskripController extends Controller
{ 
    public function index()
    {
        $legalisasi_transkrip = LegalisasiTranskrip::latest()->paginate(5);
 
        return view('legalisasi_transkrip.index',compact('legalisasi_transkrip'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
 
    public function create()
    {
        return view('legalisasi_transkrip.create');
    }
 
    public function store(Request $request)
    {
        $request->validate([
            'keperluan' => 'required',
            'fileKTM' => 'required',
            'fileTranskrip' => 'required',
        ]);
 
        LegalisasiTranskrip::create($request->all());
 
        return redirect()->route('legalisasi_transkrip.index')
                        ->with('success','Created successfully.');
    }
 
    public function show(LegalisasiTranskrip $surat)
    {
        return view('legalisasi_transkrip.show',compact('surat'));
    }
 
    public function edit(LegalisasiTranskrip $surat)
    {
        return view('legalisasi_transkrip.edit',compact('surat'));
    }
 
    public function update(Request $request, LegalisasiTranskrip $surat)
    {
        $request->validate([
            'keperluan' => 'required',
            'fileKTM' => 'required',
            'fileTranskrip' => 'required',
        ]);
 
        $surat->update($request->all());
 
        return redirect()->route('legalisasi_transkrip.index')
                        ->with('success','Updated successfully');
    }
 
    public function destroy(LegalisasiTranskrip $surat)
    {
        $surat->delete();
 
        return redirect()->route('legalisasi_transkrip.index')
                        ->with('success','Deleted successfully');
    }
}