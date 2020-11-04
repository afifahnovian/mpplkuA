<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Surat Keterangan Aktif Mahasiswa
class CreateSuratKeteranganAktif extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_keterangan_aktif', function (Blueprint $table) {
            $table->id();
            $table->text('keperluan');

            $table->string('fileKTM');
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
        Schema::dropIfExists('surat_keterangan_aktif');
    }
}
