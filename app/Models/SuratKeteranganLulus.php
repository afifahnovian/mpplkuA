<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratKeteranganLulus extends Model
{
    protected $fillable = ['alamatAsal',
                           'alamatBogor',
                           'fileSuratPengantarDept',
                           'fileLembarPengesahan',
                           'fileTranskrip',
                           'fileSkripsi',
                           'fileBuktiBayarWisuda',
                           'fileFoto',
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
