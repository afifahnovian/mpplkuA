<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Surat Perpanjangan Masa Studi Mahasiswa
class CreateSuratPerpanjanganMasaStudi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_perpanjangan_masa_studi', function (Blueprint $table) {
            $table->id();
            $table->date('waktuAkhirPerpanjangan');
            $table->integer('waktuAkhirPerpanjangan_TahunAkademik');

            $table->string('fileTabelRencanaStudi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surat_perpanjangan_masa_studi');
    }
}
