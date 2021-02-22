<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToJadwalPaketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('jadwal_pakets', function (Blueprint $table) {
            $table->foreign('id_paket', 'fk_jadwal_paket')->references('id_paket')->on('paket_selams')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('jadwal_pakets', function (Blueprint $table) {
            $table->dropForeign('fk_jadwal_paket');
        });
    }
}
