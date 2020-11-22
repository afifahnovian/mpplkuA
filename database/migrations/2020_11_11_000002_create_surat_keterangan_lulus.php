<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Surat Keterangan Lulus Mahasiswa
class CreateSuratKeteranganLulus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_keterangan_lulus', function (Blueprint $table) {
            $table->id();
            $table->text('alamatAsal');
            $table->text('alamatBogor');

            $table->string('fileSuratPengantarDept');
            $table->string('fileLembarPengesahan');
            $table->string('fileTranskrip');
            $table->string('fileSkripsi');
            $table->string('fileBayarSPP');
            $table->string('fileBuktiBayarWisuda');
            $table->string('fileFoto');

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
        Schema::dropIfExists('surat_keterangan_lulus');
    }
}
