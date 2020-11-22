<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratPengunduranDiri extends Model
{
    protected $fillable = ['tahunAkademikPengunduran',
                           'tanggalPengunduran',
                           'fileSuratPengajuanMahasiswa',
                           'fileSuratPengantarDept',
                           'user_id'];
}
