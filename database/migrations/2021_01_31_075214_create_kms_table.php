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
            $table->unsignedBigInteger('jadwal_imunisasi_id');
            $table->unsignedBigInteger('anak_id');
            $table->string('berat_badan');
            $table->unsignedBigInteger('tinggi_badan');
            $table->string('umur');
            $table->timestamps();
            $table->foreign('anak_id')->references('anak_id')->on('anak')->onDelete('cascade');
            $table->foreign('jadwal_imunisasi_id')->references('id')->on('jadwal_imunisasis')->onDelete('cascade');
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
