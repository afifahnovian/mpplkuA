<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BiodataUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomor_Telepon','jenis_Kelamin', 'asal_Prodi', 'departemen', 'semester', 'tahun_Akademik', 'users_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User','users_id');//foreign key
    }

    // public function legalisirtranskrip()
    // {
    //     return $this->hasMany('App\Models\LegalisasiTranskrip');
    // }

}
