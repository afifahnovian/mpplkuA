<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratKeteranganCuti extends Model
{
    protected $table = 'surat_keterangan_cuti';
    protected $fillable = [
                           'status_surat',
                           'alasan_penolakan',
                           'waktuCuti_TahunAkademik',
                           'waktuCuti_Semester',
                           'alasanCuti',
                           'fileSuratPengajuanMahasiswa',
                           'fileSuratPengantarDept',
                           'fileSuratKeteranganDokter',
                           'users_id',
                           ];
    
    public function user()
    {
        return $this->belongsTo('App\Models\User','users_id');
    }

    
}
