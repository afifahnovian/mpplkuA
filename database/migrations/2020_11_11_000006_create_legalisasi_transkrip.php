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
            $table->string('status_surat')->default('Pending'); 
            $table->text('keperluan');
            $table->string('fileKTM');
            $table->string('fileTranskrip');
            //foreign key
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('user')->onDelete('cascade');
            $table->bigInteger('biodata_user_id')->unsigned();
            $table->foreign('biodata_user_id')->references('id')->on('biodata_user')->onDelete('cascade');
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
