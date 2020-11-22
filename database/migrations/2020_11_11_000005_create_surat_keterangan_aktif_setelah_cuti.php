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
            $table->integer('waktuCuti_TahunAkademik');
            $table->string('waktuCuti_Semester');
            $table->string('alasanCuti');
            $table->integer('waktuAktif_TahunAkademik');
            $table->string('waktuAktif_Semester');

            $table->string('fileSuratCuti');
            $table->string('fileSuratPengantar');
            $table->string('fileBayarSPP');

            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('user')->onDelete('cascade');
            
            $table->timestamps();
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
