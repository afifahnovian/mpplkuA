<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratKeteranganAktif extends Model
{
    protected $table = 'surat_keterangan_aktif';
    protected $fillable = ['keperluan',
                           'fileKTM',
                           'fileBayarSPP',
                           'users_id',
                           ];
    
    public function user()
    {
        return $this->belongsTo('App\Models\User','users_id');
    }

   
}
