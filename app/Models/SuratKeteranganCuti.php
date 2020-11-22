<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratKeteranganCuti extends Model
{
    protected $fillable = ['waktuCuti_TahunAkademik',
                           'waktuCuti_Semester',
                           'alasanCuti',
                           'fileSuratPengajuanMahasiswa',
                           'fileSuratPengantarDept',
                           'fileSuratKeteranganDokter',
                           'user_id'];
}
