<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    public function User(){
        return $this->hasOne('App\Models\User');
    }

    public function legalisirsurat()
    {
        return $this->belongsToMany(LegalisasiTranskrip::class);
    }
}
