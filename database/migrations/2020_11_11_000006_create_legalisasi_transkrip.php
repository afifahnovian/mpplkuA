<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Legalisasi Transkrip Mahasiswa
class CreateLegalisasiTranskrip extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('legalisasi_transkrip', function (Blueprint $table) {
            $table->id();
            $table->string('nama_surat')->default('Legalisir Transkrip');
            $table->string('status_surat')->default('Pending');
            $table->text('alasan_penolakan')->nullable();
            $table->text('keperluan');
            $table->string('fileKTM');
            $table->string('fileTranskrip');
            //foreign key
            $table->bigInteger('users_id')->unsigned();
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
            // $table->bigInteger('biodata_users_id')->unsigned();
            // $table->foreign('biodata_users_id')->references('id')->on('biodata_users')->onDelete('cascade');
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
        Schema::dropIfExists('legalisasi_transkrip');
    }
}
