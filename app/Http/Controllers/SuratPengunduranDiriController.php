<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\SuratPengunduranDiri;
use App\Models\User;
use App\Models\Biodata;
class SuratPengunduranDiriController extends Controller
{ 
    //view data
    public function index()
    {
        $legalisasi_transkrip = SuratPengunduranDiri::all();
        return view('user.surat.suratpengundurandiri');
    }
 
    public function create()
    {
        return view('user/surat/surat-pengunduran-diri');
    }
 
    public function store(Request $request)
    {
        $this->validate($request,[
            'tahunAkademikPengunduran' => 'required',
            'tanggalPengunduran' => 'required',
            'fileSuratPengajuanMahasiswa' => 'required',
            'fileSuratPengantarDept' => 'required',
        ]);
        
        $data                               = new SuratPengunduranDiri(); //object surat pengunduran diri
        $data->user_id                      = User('id');
        $data->biodata_user_id              = Biodata('id');
        $data->tahunAkademikPengunduran     = $request->tahunAkademikPengunduran;
        $data->tanggalPengunduran           = $request->tanggalPengunduran;
        $data->fileSuratPengajuanMahasiswa  = $request->fileSuratPengajuanMahasiswa;
        $data->fileSuratPengantarDept       = $request->fileSuratPengantarDept;
        $data->save();

         //Validasi and request
         if ($request->hasFile('fileSuratPengajuanMahasiswa')) //name di form
         {
             $file = $request->fileSuratPengajuanMahasiswa;
             $filename = 'SuratPengajuanMahasiswa - ' . $data->user_id . ' - ' . $file->getClientOriginalName();
             $path = "SuratPengunduranDiri/SuratPengajuanMahasiswa/";
 
             Storage::disk('local')->put($path.$filename,file_get_contents($file));
             $fileSuratPengajuanMahasiswa                       = $request->fileSuratPengajuanMahasiswa; //name form
             $data->fileSuratPengajuanMahasiswa            = 'SuratPengunduranDiri/SuratPengajuanMahasiswa/'.$fileSuratPengajuanMahasiswa->getClientOriginalName();
         }

         if ($request->hasFile('fileSuratPengantarDept')) //name di form
         {
             $file = $request->fileSuratPengantarDept;
             $filename = 'SuratPengantarDept - ' . $data->user_id . ' - ' . $file->getClientOriginalName();
             $path = "SuratPengunduranDiri/SuratPengantarDept/";
 
             Storage::disk('local')->put($path.$filename,file_get_contents($file));
             $fileSuratPengantarDept                       = $request->fileSuratPengantarDept; //name form
             $data->fileSuratPengantarDept            = 'SuratPengunduranDiri/SuratPengantarDept/'.$fileSuratPengantarDept->getClientOriginalName();
         }

        return redirect('/user/dashboard')->with('success', 'Pengajuan surat berhasil');
    }

    //show detail
    public function show($id)
    {
        $data           = SuratPengunduranDiri::where('id',$id)->first();
        return view('user/dashboard/detail-surat-pengunduran-diri',compact('data'));
    }
 
    public function update(Request $request, $id)
    {
        $data                      = surat_pengunduran_diri::where('id',$request->id)->first(); //object surat pengunduran diri
        $data->status_surat        = $request->status_surat;
        $data->save();

        return redirect('/admin/dashboard')->with('success', 'Perubahan berhasil'); //belum fix route redirectnya
    }
 
    public function destroy($id)
    {
        $data = SuratPengunduranDiri::findOrFail($id);
        $data->delete();
 
        return redirect('/admin/dashboard')->with('success','Deleted successfully');//belum fix route redirectnya
    }
}