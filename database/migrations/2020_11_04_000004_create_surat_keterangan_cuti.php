<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Surat Keterangan Cuti Mahasiswa
class CreateSuratKeteranganCuti extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_keterangan_cuti', function (Blueprint $table) {
            $table->id();
            $table->integer('waktuCuti_TahunAkademik');
            $table->string('waktuCuti_Semester');
            $table->text('alasanCuti');

            $table->string('fileSuratPengajuanMahasiswa');
            $table->string('fileSuratPengantarDept');
            $table->string('fileSuratKeteranganDokter');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surat_keterangan_cuti');
    }
}
