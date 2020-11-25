<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\LegalisasiTranskrip;
use App\Models\User;
use App\Models\Biodata;
class LegalisasiTranskripController extends Controller
{ 
    //view data
    public function index()
    {
        $legalisasi_transkrip = LegalisasiTranskrip::all();
        return view('user.surat.legalisirtranskrip');
    }
 
    public function create()
    {
        return view('user/surat/legalisir-transkrip');
    }
 
    public function store(Request $request)
    {
        $this->validate($request,[
            //name di form
            'keperluan' => 'required',
            'fileKTM' => 'image|mimes:jpeg,png,jpg',
            'fileTranskrip' => 'required',
        ]);
        
        $data                      = new LegalisasiTranskrip(); //object legalisir transkrip
        $data->user_id             = User('id');
        $data->biodata_user_id     = Biodata('id');
        $data->keperluan           = $request->keperluan;
        $data->fileKTM             = $request->fileKTM;
        $data->fileTranskrip       = $request->fileTranskrip;
        $data->save();

         //Validasi and request
         if ($request->hasFile('fileKTM')) //name di form
         {
             $file = $request->fileKTM;
             $filename = 'KTM - ' . $data->user_id . ' - ' . $file->getClientOriginalName();
             $path = "LegalisasiTranskrip/KTM/";
 
             Storage::disk('local')->put($path.$filename,file_get_contents($file));
             $fileKTM                       = $request->fileKTM; //name form
             $data->fileKTM            = 'LegalisasiTranskrip/KTM/'.$fileKTM->getClientOriginalName();
         }
         //file pdf
         if ($request->hasFile('fileTranskrip')) //name di form
         {
             $file = $request->fileTranskrip;
             $filename = 'Transkrip - ' . $data->user_id . ' - ' . $file->getClientOriginalName();
             $path = "LegalisasiTranskrip/Transkrip/";
 
             Storage::disk('local')->put($path.$filename,file_get_contents($file));
             $fileTranskrip                      = $request->fileTranskrip; //name form
             $data->fileTranskrip                      = 'LegalisasiTranskrip/Transkrip/'.$fileTranskrip->getClientOriginalName();
         }

        return redirect('/user/dashboard')->with('success', 'Pengajuan surat berhasil');
    }

    //show detail
    public function show($id)
    {
        $data           = LegalisasiTranskrip::where('id',$id)->first();
        return view('user/dashboard/detail-legalisir-transkrip',compact('data'));
    }
 
    public function update(Request $request, $id)
    {
        $data                      = legalisasi_transkrip::where('id',$request->id)->first(); //object legalisir transkrip
        $data->status_surat        = $request->status_surat;
        $data->save();

        return redirect('/admin/dashboard')->with('success', 'Perubahan berhasil'); //belum fix route redirectnya
    }
 
    public function destroy($id)
    {
        $data = LegalisasiTranskrip::findOrFail($id);
        $data->delete();
 
        return redirect('/admin/dashboard')->with('success','Deleted successfully');//belum fix route redirectnya
    }
}