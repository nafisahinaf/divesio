<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToFasilitasCentersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('fasilitas_centers', function (Blueprint $table) {
            $table->foreign('id_dive_center', 'fk_fasilitascenter_divecenter')->references('id_dive_center')->on('dive_centers')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('id_fasilitas_divecenter', 'fk_fasilitascenter_failitasdivecenter')->references('id_fasilitas_divecenter')->on('fasilitas_divecenters')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('fasilitas_centers', function (Blueprint $table) {
            $table->dropForeign('fk_fasilitascenter_divecenter');
            $table->dropForeign('fk_fasilitascenter_failitasdivecenter');
        });
    }
}
