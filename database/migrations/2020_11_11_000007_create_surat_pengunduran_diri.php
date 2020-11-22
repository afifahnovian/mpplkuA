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
            $table->integer('tahunAkademikPengunduran');
            $table->date('tanggalPengunduran');

            $table->string('fileSuratPengajuanMahasiswa');
            $table->string('fileSuratPengantarDept');

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
        Schema::dropIfExists('surat_pengunduran_diri');
    }
}
