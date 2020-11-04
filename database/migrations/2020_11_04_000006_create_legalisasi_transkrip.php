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
            $table->text('keperluan');

            $table->string('fileKTM');
            $table->string('fileTranskrip');
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
