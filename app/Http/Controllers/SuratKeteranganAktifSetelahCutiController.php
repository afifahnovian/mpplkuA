<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\SuratKeteranganAktifSetelahCuti;
use App\Models\User;
use App\Models\Biodata;
class SuratKeteranganAktifSetelahCutiController extends Controller
{ 
    //view data
    public function index()
    {
        $legalisasi_transkrip = SuratKeteranganAktifSetelahCuti::all();
        return view('user.surat.suratketeranganaktifsetelahcuti');
    }
 
    public function create()
    {
        return view('user/surat/surat-keterangan-aktif-setelah-cuti');
    }
 
    public function store(Request $request)
    {

        $this>validate($request,[
            'waktuCuti_TahunAkademik' => 'required',
            'waktuCuti_Semester' => 'required',
            'alasanCuti' => 'required',
            'waktuAktif_TahunAkademik' => 'required',
            'waktuAktif_Semester' => 'required',
            'fileSuratCuti' => 'required',
            'fileBayarSPP' => 'required',
        ]);
        
        $data                           = new SuratKeteranganAktifSetelahCuti(); //object surat keterangan aktif setelah cuti
        $data->user_id                  = User('id');
        $data->biodata_user_id          = Biodata('id');
        $data->waktuCuti_TahunAkademik  = $request->waktuCuti_TahunAkademik;
        $data->waktuCuti_Semester       = $request->waktuCuti_Semester;
        $data->alasanCuti               = $request->alasanCuti;
        $data->waktuAktifTahunAkademik  = $request->waktuAktifTahunAkademik;
        $data->waktuAktif_Semester      = $request->waktuAktif_Semester;
        $data->fileSuratCuti            = $request->fileSuratCuti;
        $data->fileBayarSPP             = $request->fileBayarSPP;
        $data->save();

         //Validasi and request
         if ($request->hasFile('fileSuratCuti')) //name di form
         {
             $file = $request->fileSuratCuti;
             $filename = 'SuratCuti - ' . $data->user_id . ' - ' . $file->getClientOriginalName();
             $path = "SuratKeteranganAktifSetelahCuti/KTM/";
 
             Storage::disk('local')->put($path.$filename,file_get_contents($file));
             $fileSuratCuti                  = $request->fileSuratCuti; //name form
             $data->fileSuratCuti            = 'SuratKeteranganAktifSetelahCuti/KTM/'.$fileSuratCuti->getClientOriginalName();
         }
         //file pdf
         if ($request->hasFile('fileBayarSPP')) //name di form
         {
             $file = $request->fileBayarSPP;
             $filename = 'BayarSPP - ' . $data->user_id . ' - ' . $file->getClientOriginalName();
             $path = "SuratKeteranganAktifSetelahCuti/BayarSPP/";
 
             Storage::disk('local')->put($path.$filename,file_get_contents($file));
             $fileBayarSPP                      = $request->fileBayarSPP; //name form
             $data->fileBayarSPP                = 'SuratKeteranganAktifSetelahCuti/BayarSPP/'.$fileBayarSPP->getClientOriginalName();
         }

        return redirect('/user/dashboard')->with('success', 'Pengajuan surat berhasil');
    }

    //show detail
    public function show($id)
    {
        $data           = SuratKeteranganAktifSetelahCuti::where('id',$id)->first();
        return view('user/dashboard/detail-surat-keterangan-aktif-setelah-cuti',compact('data'));
    }
 
    public function update(Request $request, $id)
    {
        $data                      = surat_keterangan_aktif_setelah_cuti::where('id',$request->id)->first(); //object surat keterangan aktif setelah cuti
        $data->status_surat        = $request->status_surat;
        $data->save();

        return redirect('/admin/dashboard')->with('success', 'Perubahan berhasil'); //belum fix route redirectnya
    }
 
    public function destroy($id)
    {
        $data = SuratKeteranganAktifSetelahCuti::findOrFail($id);
        $data->delete();
 
        return redirect('/admin/dashboard')->with('success','Deleted successfully');//belum fix route redirectnya
    }
}
