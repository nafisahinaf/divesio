<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFasilitasPaketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fasilitas_pakets', function (Blueprint $table) {
            $table->integer('id_fasilitas_paket')->primary();
            $table->integer('id_paket');
            $table->integer('id_fasilitas_paket_selam')->index('fk_fasilitaspaket_fasilitaspaketselam');
            $table->index(['id_paket', 'id_fasilitas_paket_selam'], 'id_paket');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fasilitas_pakets');
    }
}
