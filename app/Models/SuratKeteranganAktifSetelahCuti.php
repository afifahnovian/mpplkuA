<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratKeteranganAktifSetelahCuti extends Model
{
    protected $fillable = ['waktuCuti_TahunAkademik',
                           'waktuCuti_Semester',
                           'alasanCuti',
                           'waktuAktif_TahunAkademik',
                           'waktuAktif_Semester',
                           'fileSuratCuti',
                           'fileSuratPengantar',
                           'fileBayarSPP',
                           'user_id'];
}
