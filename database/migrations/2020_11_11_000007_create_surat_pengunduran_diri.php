<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Surat Pengunduran Diri Mahasiswa
class CreateSuratPengunduranDiri extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_pengunduran_diri', function (Blueprint $table) {
            $table->id();
            $table->string('nama_surat')->default('Surat Pengunduran Diri');
            $table->string('status_surat')->default('Pending');
            $table->text('alasan_penolakan')->nullable();
            $table->integer('tahunAkademikPengunduran');
            $table->date('tanggalPengunduran');
            $table->integer('tahunTerakhirAktif');

            $table->string('fileKTM');
            $table->string('fileSuratPengajuanMahasiswa');
            $table->string('fileSuratPengantarDept');

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
        Schema::dropIfExists('surat_pengunduran_diri');
    }
}
