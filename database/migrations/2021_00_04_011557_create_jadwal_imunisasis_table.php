<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalImunisasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal_imunisasis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vaksin_id');
            $table->foreign('vaksin_id')->references('vaksin_id')->on('vaksin')->onDelete('cascade');
            $table->string('tempat_imunisasi');
            $table->date('tanggal_imunisasi');
            $table->unsignedBigInteger('bidan_id');
            $table->foreign('bidan_id')->references('bidan_id')->on('bidan')->onDelete('cascade');
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
        Schema::dropIfExists('jadwal_imunisasis');
    }
}
