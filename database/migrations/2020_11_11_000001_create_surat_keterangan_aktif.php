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
        Schema::dropIfExists('surat_keterangan_aktif');
    }
}
