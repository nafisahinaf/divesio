<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalPaketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal_pakets', function (Blueprint $table) {
            $table->integer('id_jadwal')->primary();
            $table->integer('id_paket')->index('id_paket');
            $table->date('tanggal');
            $table->time('jam_berangkat', 6);
            $table->integer('durasi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jadwal_pakets');
    }
}
