<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LegalisasiTranskrip extends Model
{
    protected $fillable = ['keperluan',
                           'fileKTM',
                           'fileTranskrip',
                           'user_id'];
}
