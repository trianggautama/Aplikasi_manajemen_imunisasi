<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVaksinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vaksin', function (Blueprint $table) {
            $table->bigIncrements('vaksin_id');
            $table->string('nama_vaksin', 100);
            $table->string('keterangan', 100);
            $table->string('p_imunisasi', 20);
            // $table->date('waktu_pemberian');
            $table->string('k_umur', 29);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vaksin');
    }
}
