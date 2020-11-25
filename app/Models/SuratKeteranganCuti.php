<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratKeteranganCuti extends Model
{
    protected $fillable = ['waktuCuti_TahunAkademik',
                           'waktuCuti_Semester',
                           'alasanCuti',
                           'fileSuratPengajuanMahasiswa',
                           'fileSuratPengantarDept',
                           'fileSuratKeteranganDokter',
                           'user_id',
                           'biodata_user_id'];
    
    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id','id');
    }

    public function biodata()
    {
        return $this->belongsTo('App\Models\Biodata','biodata_user_id','id');
    }
}
