<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiodataUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biodata_user', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_Kelamin');
            $table->string('nomor_Telepon');
            $table->string('asal_Prodi');
            $table->string('departemen');
            $table->integer('semester');
            $table->integer('tahun_Akademik');
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
        Schema::dropIfExists('biodata_users');
    }
}
