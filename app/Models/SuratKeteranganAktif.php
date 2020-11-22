<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratKeteranganAktif extends Model
{
    protected $fillable = ['keperluan',
                           'fileKTM',
                           'fileBayarSPP',
                           'user_id'];
}
