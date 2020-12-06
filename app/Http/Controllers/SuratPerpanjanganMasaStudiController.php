<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\SuratPerpanjanganMasaStudi;
use App\Models\User;
use App\Models\Biodata;
class SuratPerpanjanganMasaStudiController extends Controller
{ 
    //view data
    public function index()
    {
        $legalisasi_transkrip = SuratPerpanjanganMasaStudi::all();
        return view('user.surat.suratperpanjanganmasastudi');
    }
 
    public function create()
    {
        return view('user/surat/surat-perpanjangan-masa-studi');
    }
 
    public function store(Request $request)
    {
        $this->validate([
            'waktuAkhirPerpanjangan' => 'required',
            'waktuAkhirPerpanjangan_Tahun' => 'required',
            'fileTabelRencanaStudi' => 'required',
        ]);
        
        $data                               = new SuratPerpanjanganMasaStudi(); //object surat perpanjangan masa studi
        $data->users_id                      = User('id');
        $data->biodata_users_id              = Biodata('id');
        $data->waktuAkhirPerpanjangan       = $request->waktuAkhirPerpanjangan;
        $data->waktuAkhirPerpanjangan_Tahun = $request->waktuAkhirPerpanjangan_Tahun;
        $data->fileTabelRencanaStudi        = $request->fileTabelRencanaStudi;
        $data->save();

         //Validasi and request
         if ($request->hasFile('fileTabelRencanaStudi')) //name di form
         {
             $file = $request->fileTabelRencanaStudi;
             $filename = 'TabelRencanaStudi - ' . $data->users_id . ' - ' . $file->getClientOriginalName();
             $path = "SuratPerpanjanganMasaStudi/TabelRencanaStudi/";
 
             Storage::disk('local')->put($path.$filename,file_get_contents($file));
             $fileTabelRencanaStudi                       = $request->fileTabelRencanaStudi; //name form
             $data->fileTabelRencanaStudi            = 'SuratPerpanjanganMasaStudi/TabelRencanaStudi/'.$fileTabelRencanaStudi->getClientOriginalName();
         }

        return redirect('/user/dashboard')->with('success', 'Pengajuan surat berhasil');
    }

    //show detail
    public function show($id)
    {
        $data           = SuratPerpanjanganMasaStudi::where('id',$id)->first();
        return view('user/dashboard/detail-surat-perpanjangan-masa-studi',compact('data'));
    }
 
    public function update(Request $request, $id)
    {
        $data                      = surat_perpanjangan_masa_studi::where('id',$request->id)->first(); //object surat perpanjangan masa studi
        $data->status_surat        = $request->status_surat;
        $data->save();

        return redirect('/admin/dashboard')->with('success', 'Perubahan berhasil'); //belum fix route redirectnya
    }
 
    public function destroy($id)
    {
        $data = SuratPerpanjanganMasaStudi::findOrFail($id);
        $data->delete();
 
        return redirect('/admin/dashboard')->with('success','Deleted successfully');//belum fix route redirectnya
    }
}