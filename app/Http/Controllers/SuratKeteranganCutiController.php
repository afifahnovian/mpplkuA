<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\SuratKeteranganCuti;
use App\Models\User;
use App\Models\Biodata;
class SuratKeteranganCutiController extends Controller
{ 
    //view data
    public function index()
    {
        $legalisasi_transkrip = SuratKeteranganCuti::all();
        return view('user.surat.suratketerangancuti');
    }
 
    public function create()
    {
        return view('user/surat/surat-keterangan-cuti');
    }
 
    public function store(Request $request)
    {
        $this->validate($request,[
            'waktuCuti_TahunAkademik' => 'required',
            'waktuCuti_Semester' => 'required',
            'alasanCuti' => 'required',
            'fileSuratPengajuanMahasiswa' => 'required',
            'fileSuratPengantarDept' => 'required',
            'fileSuratKeteranganDokter' => 'required',
        ]);
        
        $data                               = new SuratKeteranganCuti(); //object surat keterangan cuti
        $data->user_id                      = User('id');
        $data->biodata_user_id              = Biodata('id');
        $data->waktuCuti_TahunAkademik      = $request->waktuCuti_TahunAkademik;
        $data->waktuCuti_Semester           = $request->waktuCuti_Semester;
        $data->fileSuratPengajuanMahasiswa  = $request->fileSuratPengajuanMahasiswa;
        $data->fileSuratPengantarDept       = $request->fileSuratPengantarDept;
        $data->fileSuratKeteranganDokter    = $request->fileSuratKeteranganDokter;
        $data->save();

         //Validasi and request
         if ($request->hasFile('fileSuratPengajuanMahasiswa')) //name di form
         {
             $file = $request->fileSuratPengajuanMahasiswa;
             $filename = 'SuratPengajuanMahasiswa - ' . $data->user_id . ' - ' . $file->getClientOriginalName();
             $path = "SuratKeteranganCuti/SuratPengajuanMahasiswa/";
 
             Storage::disk('local')->put($path.$filename,file_get_contents($file));
             $fileSuratPengajuanMahasiswa                  = $request->fileSuratPengajuanMahasiswa; //name form
             $data->fileSuratPengajuanMahasiswa            = 'SuratKeteranganCuti/SuratPengajuanMahasiswa/'.$fileSuratPengajuanMahasiswa->getClientOriginalName();
         }
         
         if ($request->hasFile('fileSuratPengantarDept')) //name di form
         {
             $file = $request->fileSuratPengantarDept;
             $filename = 'SuratPengantarDept - ' . $data->user_id . ' - ' . $file->getClientOriginalName();
             $path = "SuratKeteranganCuti/SuratPengantarDept/";
 
             Storage::disk('local')->put($path.$filename,file_get_contents($file));
             $fileSuratPengantarDept         = $request->fileSuratPengantarDept; //name form
             $data->fileSuratPengantarDept   = 'SuratKeteranganCuti/SuratPengantarDept/'.$fileSuratPengantarDept->getClientOriginalName();
         }
         
         if ($request->hasFile('fileSuratKeteranganDokter')) //name di form
         {
             $file = $request->fileSuratKeteranganDokter;
             $filename = 'SuratKeteranganDokter - ' . $data->user_id . ' - ' . $file->getClientOriginalName();
             $path = "SuratKeteranganCuti/SuratKeteranganDokter/";
 
             Storage::disk('local')->put($path.$filename,file_get_contents($file));
             $fileSuratKeteranganDokter                       = $request->fileSuratKeteranganDokter; //name form
             $data->fileSuratKeteranganDokter            = 'SuratKeteranganCuti/SuratKeteranganDokter/'.$fileSuratKeteranganDokter->getClientOriginalName();
         }

        return redirect('/user/dashboard')->with('success', 'Pengajuan surat berhasil');
    }

    //show detail
    public function show($id)
    {
        $data           = SuratKeteranganCuti::where('id',$id)->first();
        return view('user/dashboard/detail-surat-keterangan-cuti',compact('data'));
    }
 
    public function update(Request $request, $id)
    {
        $data                      = surat_keterangan_cuti::where('id',$request->id)->first(); //object surat keterangan cuti
        $data->status_surat        = $request->status_surat;
        $data->save();

        return redirect('/admin/dashboard')->with('success', 'Perubahan berhasil'); //belum fix route redirectnya
    }
 
    public function destroy($id)
    {
        $data = SuratKeteranganCuti::findOrFail($id);
        $data->delete();
 
        return redirect('/admin/dashboard')->with('success','Deleted successfully');//belum fix route redirectnya
    }
}
