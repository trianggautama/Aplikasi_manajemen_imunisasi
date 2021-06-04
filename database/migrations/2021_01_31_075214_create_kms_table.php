<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kms', function (Blueprint $table) {
            $table->bigIncrements('kms_id');
            $table->unsignedBigInteger('imunisasi_id');
            $table->unsignedBigInteger('anak_id');
            $table->unsignedBigInteger('berat_badan');
            $table->unsignedBigInteger('tinggi_badan');
            $table->unsignedBigInteger('umur');
            $table->timestamps();
            $table->foreign('anak_id')->references('anak_id')->on('anak')->onDelete('cascade');
            $table->foreign('imunisasi_id')->references('imunisasi_id')->on('imunisasi')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kms');
    }
}
