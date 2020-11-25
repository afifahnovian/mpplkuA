<?php

namespace App\Http\Controllers;

use App\Models\BiodataUser;
use Illuminate\Http\Request;
use App\Models\User;

class BiodataUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $biodata_users = BiodataUser::all();
        return view('user-biodata');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(BiodataUser $biodataUser)
    {
        //
    }

    public function edit(BiodataUser $biodataUser)
    {
        return redirect('/biodata/edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BiodataUser  $biodataUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $biodata_users = BiodataUser::where('id',$request->id)->first();
        $biodata_users->jenis_kelamin =  $request->get('jenis_kelamin');
        $biodata_users->asal_Prodi = $request->get('asal_Prodi');
        $biodata_users->departemen = $request->get('departemen');
        $biodata_users->semester = $request->get('semester');
        $biodata_users->tahun_Akademik = $request->get('tahun_Akademik');
        $biodata_users->save();

        return redirect('/biodata')->with('sukses', 'Biodata berhasil disimpan!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BiodataUser  $biodataUser
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $biodata_users = BiodataUser::findOrFail($id);
        $biodata_users->delete();
 
        return redirect('/admin/dashboard')->with('success','Deleted successfully');
    }
}
