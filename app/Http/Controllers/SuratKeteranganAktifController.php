<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\SuratKeteranganAktif;
use App\Models\User;
use App\Models\Biodata;
 
class SuratKeteranganAktifController extends Controller
{ 
    public function index()
    {
        $surat_keterangan_aktif = SuratKeteranganAktif::all();
        return view('user.surat.suratketeranganaktif');
    }
 
    public function create()
    {
        return view('user/surat/surat-keterangan-aktif');
    }
 
    public function store(Request $request)
    {
        $this->validate($request,[
            //name di form
            'keperluan' => 'required',
            'fileKTM' => 'image|mimes:jpeg,png,jpg',
            'fileBayarSPP' => 'required',
        ]);
        
        $data                      = new SuratKeteranganAktif(); //object surat keterangan aktif
        $data->user_id             = User('id');
        $data->biodata_user_id     = Biodata('id');
        $data->keperluan           = $request->keperluan;
        $data->fileKTM             = $request->fileKTM;
        $data->fileBayarSPP       = $request->fileBayarSPP;
        $data->save();
 
        //Validasi and request
        if ($request->hasFile('fileKTM')) //name di form
        {
            $file = $request->fileKTM;
            $filename = 'KTM - ' . $data->user_id . ' - ' . $file->getClientOriginalName();
            $path = "SuratKeteranganAktif/KTM/";

            Storage::disk('local')->put($path.$filename,file_get_contents($file));
            $fileKTM                  = $request->fileKTM; //name form
            $data->fileKTM            = 'SuratKeteranganAktif/KTM/'.$fileKTM->getClientOriginalName();
        }
        //file pdf
        if ($request->hasFile('fileBayarSPP')) //name di form
        {
            $file = $request->fileBayarSPP;
            $filename = 'BayarSPP - ' . $data->user_id . ' - ' . $file->getClientOriginalName();
            $path = "SuratKeteranganAktif/BayarSPP/";

            Storage::disk('local')->put($path.$filename,file_get_contents($file));
            $fileBayarSPP                      = $request->fileBayarSPP; //name form
            $data->fileBayarSPP                = 'SuratKeteranganAktif/BayarSPP/'.$fileBayarSPP->getClientOriginalName();
        }

       return redirect('/user/dashboard')->with('success', 'Pengajuan surat berhasil');
    }

    //show detail
    public function show($id)
    {
        $data           = SuratKeteranganAktif::where('id',$id)->first();
        return view('user/dashboard/detail-surat-keterangan_aktif',compact('data'));
    }
 
    public function update(Request $request, $id)
    {
        $data                      = surat_keterangan_aktif::where('id',$request->id)->first(); //object surat keterangan aktif
        $data->status_surat        = $request->status_surat;
        $data->save();

        return redirect('/admin/dashboard')->with('success', 'Perubahan berhasil'); //belum fix route redirectnya
    }
 
    public function destroy($id)
    {
        $data = SuratKeteranganAktif::findOrFail($id);
        $data->delete();
 
        return redirect('/admin/dashboard')->with('success','Deleted successfully');//belum fix route redirectnya
    }
}