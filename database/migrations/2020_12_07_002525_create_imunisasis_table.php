<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImunisasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imunisasi', function (Blueprint $table) {
            $table->bigIncrements('imunisasi_id');
            $table->unsignedBigInteger('vaksin_id');
            $table->unsignedBigInteger('pegawai_id');
            $table->unsignedBigInteger('bidan_id');
            $table->unsignedBigInteger('anak_id');
            $table->string('posyandu', 100);
            $table->string('keterangan', 100);
            $table->date('bulan');
            $table->foreign('vaksin_id')->references('vaksin_id')->on('vaksin')->onDelete('cascade');
            $table->foreign('pegawai_id')->references('pegawai_id')->on('pegawai')->onDelete('cascade');
            $table->foreign('bidan_id')->references('bidan_id')->on('bidan')->onDelete('cascade');
            $table->foreign('anak_id')->references('anak_id')->on('anak')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('imunisasi');
    }
}
