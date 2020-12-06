<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LegalisasiTranskrip extends Model
{
    protected $fillable = ['keperluan',
                           'fileKTM',
                           'fileTranskrip',
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
