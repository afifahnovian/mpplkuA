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
            $table->string('nama_surat')->default('Surat Keterangan Lulus');
            $table->string('status_surat')->default('Pending');
            $table->text('alasan_penolakan')->nullable();
            $table->text('alamatAsal');
            $table->text('alamatBogor');

            $table->string('fileSuratPengantarDept');
            $table->string('fileLembarPengesahan');
            $table->string('fileTranskrip');
            $table->string('fileSkripsi');
            $table->string('fileBayarSPP');
            $table->string('fileBuktiBayarWisuda');
            $table->string('fileFoto');

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
        Schema::dropIfExists('surat_keterangan_lulus');
    }
}
