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
            $table->string('nama_surat')->default('Surat Perpanjangan Masa Studi');
            $table->string('status_surat')->default('Pending');
            $table->text('alasan_penolakan')->nullable();
            $table->date('waktuAkhirPerpanjangan');
            $table->integer('waktuAkhirPerpanjangan_TahunAkademik');

            $table->string('fileTabelRencanaStudi');

            $table->bigInteger('users_id')->unsigned();
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
            
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
        Schema::dropIfExists('surat_perpanjangan_masa_studi');
    }
}
