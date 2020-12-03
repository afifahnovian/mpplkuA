<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratPerpanjanganMasaStudi extends Model
{
    protected $fillable = ['waktuAkhirPerpanjangan',
                           'waktuAkhirPerpanjangan_TahunAkademik',
                           'fileTabelRencanaStudi',
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
