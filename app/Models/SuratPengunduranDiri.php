<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratPengunduranDiri extends Model
{
    protected $table = 'surat_pengunduran_diri';
    protected $fillable = ['tahunAkademikPengunduran',
                           'tanggalPengunduran',
                           'tahunTerakhirAktif',
                           'fileKTM',
                           'fileSuratPengajuanMahasiswa',
                           'fileSuratPengantarDept',
                           'users_id',
                           ];
    
    public function user()
    {
        return $this->belongsTo('App\Models\User','users_id','id');
    }

   
}
