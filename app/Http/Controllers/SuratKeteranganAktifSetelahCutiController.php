<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\SuratKeteranganAktifSetelahCuti;
use App\Models\User;
use App\Models\BiodataUser;
use Auth;
use Illuminate\Support\Facades\Storage;
class SuratKeteranganAktifSetelahCutiController extends Controller
{ 
    //view data
    public function index()
    {
        $surat_keterangan_aktif_setelah_cuti = SuratKeteranganAktifSetelahCuti::all();
        return view('user.surat.suratketeranganaktifsetelahcuti');
    }
 
    public function create()
    {
        return view('user/surat/surat-keterangan-aktif-cuti');
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
            'filePengantarDept' => 'required',
        ]);
        
        $data                           = new SuratKeteranganAktifSetelahCuti(); //object surat keterangan aktif setelah cuti
        $data->users_id                 = Auth::guard('users')->id(); 
        $data->waktuCuti_TahunAkademik  = $request->input('waktuCuti_TahunAkademik');
        $data->waktuCuti_Semester       = $request->input('waktuCuti_Semester');
        $data->alasanCuti               = $request->input('alasanCuti');
        $data->waktuAktif_TahunAkademik  = $request->input('waktuAktif_TahunAkademik');
        $data->waktuAktif_Semester      = $request->input('waktuAktif_Semester');

         //Validasi and request
         if ($request->hasFile('fileSuratCuti')) //name di form
         {
             $file = $request->fileSuratCuti;
             $filename = 'SuratCuti - ' . $data->users_id . ' - ' . $file->getClientOriginalName();
             $path = "SuratKeteranganAktifSetelahCuti/SuratCuti/";
 
             Storage::disk('local')->put($path.$filename,file_get_contents($file));
             $fileSuratCuti                  = $request->fileSuratCuti; //name form
             $data->fileSuratCuti            = 'SuratKeteranganAktifSetelahCuti/SuratCuti/'.$fileSuratCuti->getClientOriginalName();
         }

         if ($request->hasFile('filePengantarDept')) //name di form
         {
             $file = $request->filePengantarDept;
             $filename = 'PengantarDept - ' . $data->users_id . ' - ' . $file->getClientOriginalName();
             $path = "SuratKeteranganAktifSetelahCuti/PengantarDept/";
 
             Storage::disk('local')->put($path.$filename,file_get_contents($file));
             $filePengantarDept                  = $request->filePengantarDept; //name form
             $data->filePengantarDept            = 'SuratKeteranganAktifSetelahCuti/PengantarDept/'.$filePengantarDept->getClientOriginalName();
         }
         //file pdf
         if ($request->hasFile('fileBayarSPP')) //name di form
         {
             $file = $request->fileBayarSPP;
             $filename = 'BayarSPP - ' . $data->users_id . ' - ' . $file->getClientOriginalName();
             $path = "SuratKeteranganAktifSetelahCuti/BayarSPP/";
 
             Storage::disk('local')->put($path.$filename,file_get_contents($file));
             $fileBayarSPP                      = $request->fileBayarSPP; //name form
             $data->fileBayarSPP                = 'SuratKeteranganAktifSetelahCuti/BayarSPP/'.$fileBayarSPP->getClientOriginalName();
         }

         $data->save();
         
         return redirect('/user/dashboard')->with('success', 'Pengajuan surat berhasil');
    }

    //show detail in dashboard
    public function show($id)
    {
        $data           = SuratKeteranganAktifSetelahCuti::where('id',$id)->first();
        $biodata_user   = BiodataUser::where('users_id',$data->users_id)->first();
        return view('user/surat/surat-keterangan-aktif-setelah-cuti/detail',compact('data'));
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
