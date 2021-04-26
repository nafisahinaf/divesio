<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFasilitasCentersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fasilitas_centers', function (Blueprint $table) {
            $table->integer('id_fasilitas_center')->primary();
            $table->integer('id_dive_center');
            $table->integer('id_fasilitas_divecenter')->index('fk_fasilitascenter_failitasdivecenter');
            $table->index(['id_dive_center', 'id_fasilitas_divecenter'], 'id_dive_center');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fasilitas_centers');
    }
}
