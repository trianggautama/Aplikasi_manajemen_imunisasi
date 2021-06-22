<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePegawaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawai', function (Blueprint $table) {
            $table->bigIncrements('pegawai_id');
            $table->unsignedBigInteger('user_id');
            $table->string('nip', 100);
            $table->string('nama', 100);
            $table->string('alamat', 50);
            $table->string('jk', 30);
            $table->string('tempat_lahir', 20);
            $table->date('tgl_lahir');
            $table->string('no_hp');
            $table->foreign('user_id')->references('user_id')->on('user')->onDelete('cascade');
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
