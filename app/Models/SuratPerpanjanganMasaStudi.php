<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratPerpanjanganMasaStudi extends Model
{
    protected $fillable = ['waktuAkhirPerpanjangan',
                           'waktuAkhirPerpanjangan_TahunAkademik',
                           'fileTabelRencanaStudi',
                           'users_id',
                           'biodata_users_id'];
    
    public function user()
    {
        return $this->belongsTo('App\Models\User','users_id','id');
    }

    public function biodata()
    {
        return $this->belongsTo('App\Models\Biodata','biodata_users_id','id');
    }
}
