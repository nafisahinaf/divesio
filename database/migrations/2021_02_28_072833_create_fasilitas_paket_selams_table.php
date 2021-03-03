<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFasilitasPaketSelamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fasilitas_paket_selams', function (Blueprint $table) {
            $table->integer('id_fasilitas_paket_selams')->primary();
            $table->integer('id_paket_selam')->index('id_paket_selam');
            $table->string('nama_fasilitas', 300);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fasilitas_paket_selams');
    }
}
