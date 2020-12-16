<?php

namespace App\Http\Controllers;

use App\Models\BiodataUser;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;
use Image;
class BiodataUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
 
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BiodataUser  $biodataUser
     * @return \Illuminate\Http\Response
     */
    public function updateBiodata(Request $request)
    {
        //kiri nama di db                   kanan req nama di field form name
        $user               = User::where('id',Auth::user()->id)->first();
        // dd($user);
        if($request->hasFile('foto_profil')){
            $file                   = $request->foto_profil;
            ini_set('memory_limit', '256M');
            $filename               = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            $extension              = pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);
            $imagename              = 'img/foto_profil/'.$filename.time().'.'.$extension;
            $image                  = Image::make($file)->orientate()->resize(null, 760, function ($constraint) {
                                            $constraint->aspectRatio();
                                            $constraint->upsize();
                                        })->save($imagename);
            unlink(public_path().'/'.$user->foto_profil);
            $user->foto_profil      = $imagename;
        } else {
            $user->foto_profil      = $user->foto_profil;
        }

        $user->save();
        $biodata_user = BiodataUser::where('id', $request->id)->first();
        $biodata_user->users_id         =  Auth::id();
        $biodata_user->id               =  $request->input('id');
        $biodata_user->jenis_Kelamin    =  $request->input('jeniskelamin');
        $biodata_user->nomor_Telepon    =  $request->input('nomortelepon');
        $biodata_user->asal_Prodi       =  $request->input('asalprodi');
        $biodata_user->departemen       =  $request->input('departemen');
        $biodata_user->semester         =  $request->input('semester');
        $biodata_user->tahun_Akademik   =  $request->input('tahunakademik');
        $biodata_user->save();
        return redirect('/user/biodata')->with('success', 'Biodata berhasil disimpan!');
    }

}
