<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFasilitasDivecentersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fasilitas_divecenters', function (Blueprint $table) {
            $table->integer('id_fasilitas_divecenter')->primary();
            $table->integer('id_dive_center')->index('id_dive_center');
            $table->string('nama', 30);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fasilitas_divecenters');
    }
}
