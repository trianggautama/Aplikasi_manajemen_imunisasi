<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBalitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anak', function (Blueprint $table) {
            $table->bigIncrements('anak_id');
            $table->string('nama_anak', 50);
            $table->string('tempat_lahir', 100);
            $table->date('tanggal_lahir');
            $table->string('jk', 20);
            $table->string('nama_ayah', 100);
            $table->string('nama_ibu', 100);
            $table->string('alamat', 50);
            $table->string('no_hp');
            $table->string('nama_kelurahan', 20);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('balita');
    }
}
