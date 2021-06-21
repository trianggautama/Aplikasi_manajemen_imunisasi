<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBidansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bidan', function (Blueprint $table) {
            $table->bigIncrements('bidan_id');
            $table->unsignedBigInteger('user_id');
            $table->string('nip', 50);
            $table->string('nama', 50);
            $table->string('alamat', 50);
            $table->string('jk', 30);
            $table->string('tempat_lahir', 50);
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
        Schema::dropIfExists('bidan');
    }
}
