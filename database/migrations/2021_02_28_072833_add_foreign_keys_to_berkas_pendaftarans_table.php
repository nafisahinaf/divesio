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
            $table->foreign('id_pendaftaran', 'fk_berkaspendaftaran_pendaftaran')->references('id_pendaftaran')->on('pendaftaran_divecenters')->onUpdate('CASCADE')->onDelete('CASCADE');
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
            $table->dropForeign('fk_berkaspendaftaran_pendaftaran');
        });
    }
}
