<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPendaftaranDivecentersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pendaftaran_divecenters', function (Blueprint $table) {
            $table->foreign('id_user', 'fk_pendaftaran_user')->references('id_user')->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pendaftaran_divecenters', function (Blueprint $table) {
            $table->dropForeign('fk_pendaftaran_user');
        });
    }
}
