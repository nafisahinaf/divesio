<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToDataDiriPemesansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('data_diri_pemesans', function (Blueprint $table) {
            $table->foreign('id_order', 'fk_datdir_order')->references('id_order')->on('orders')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('data_diri_pemesans', function (Blueprint $table) {
            $table->dropForeign('fk_datdir_order');
        });
    }
}
