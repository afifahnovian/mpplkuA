<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BiodataUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'jenis_kelamin', 'asal_Prodi', 'departemen', 'semester', 'tahun_Akademik', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id','id');
    }

}
