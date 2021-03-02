<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToFasilitasDivecentersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('fasilitas_divecenters', function (Blueprint $table) {
            $table->foreign('id_dive_center', 'fk_fasilitasdivecenter_divecenter')->references('id_dive_center')->on('dive_centers')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('fasilitas_divecenters', function (Blueprint $table) {
            $table->dropForeign('fk_fasilitasdivecenter_divecenter');
        });
    }
}
