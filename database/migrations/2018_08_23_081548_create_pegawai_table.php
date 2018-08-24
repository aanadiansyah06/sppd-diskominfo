<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePegawaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawai', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nip');
            $table->integer('nik');
            $table->string('nama');
            $table->string('telepon');
            $table->string('golongan');
            $table->string('eselon');
            $table->string('jabatan');
            $table->integer('id_opd');
            $table->integer('id_bidang');
            $table->integer('id_seksi');
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
        Schema::dropIfExists('pegawai');
    }
}
