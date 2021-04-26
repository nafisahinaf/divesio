<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToBerkasPendaftaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('berkas_pendaftarans', function (Blueprint $table) {
            $table->foreign('id_dive_center', 'fk_berkaspendaftaran_divecenter')->references('id_dive_center')->on('dive_centers')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('berkas_pendaftarans', function (Blueprint $table) {
            $table->dropForeign('fk_berkaspendaftaran_divecenter');
        });
    }
}
