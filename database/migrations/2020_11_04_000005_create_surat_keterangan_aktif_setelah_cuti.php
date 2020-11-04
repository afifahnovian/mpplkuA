<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Surat Keterangan Aktif setelah Cuti Mahasiswa
class CreateSuratKeteranganAktifSetelahCuti extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_keterangan_aktif_setelah_cuti', function (Blueprint $table) {
            $table->id();
            $table->string('waktuCuti_TahunAkademik');
            $table->string('waktuCuti_Semester');
            $table->string('alasanCuti');
            $table->string('waktuAktif_TahunAkademik');
            $table->string('waktuAktif_Semester');

            $table->string('fileSuratCuti');
            $table->string('fileSuratPengantar');
            $table->string('fileBayarSPP');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surat_keterangan_aktif_setelah_cuti');
    }
}
