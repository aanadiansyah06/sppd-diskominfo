<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDinasLuarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dinas_luar', function (Blueprint $table) {
            $table->increments('id');
            $table->datetime('tanggal_mulai');
            $table->datetime('tanggal_selesai');
            $table->string('tujuan');
            $table->string('pic_tujuan');
            $table->string('jumlah_pegawai');
            $table->text('alamat');
            $table->string('provinsi')
            $table->string('jumlah_anggaran');
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
        Schema::dropIfExists('dinas_luar');
    }
}
