<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratKeteranganLulus extends Model
{
    protected $table = 'surat_keterangan_lulus';
    protected $fillable = ['alamatAsal',
                           'alamatBogor',
                           'fileSuratPengantarDept',
                           'fileLembarPengesahan',
                           'fileTranskrip',
                           'fileSkripsi',
                           'fileBuktiBayarWisuda',
                           'fileFoto',
                           'users_id',
                           ];
    
    public function user()
    {
        return $this->belongsTo('App\Models\User','users_id');
    }

}
