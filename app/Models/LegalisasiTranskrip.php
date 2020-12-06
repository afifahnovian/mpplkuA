<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LegalisasiTranskrip extends Model
{
    protected $table = 'legalisasi_transkrip';
    protected $fillable = ['keperluan',
                           'fileKTM',
                           'fileTranskrip',
                           'users_id',
                          ];
    
    public function user()
    {
        return $this->belongsTo('App\Models\User','users_id');
    }

    
}
