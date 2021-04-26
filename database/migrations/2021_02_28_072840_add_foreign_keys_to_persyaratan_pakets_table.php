<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPersyaratanPaketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('persyaratan_pakets', function (Blueprint $table) {
            $table->foreign('id_paket', 'fk_persyaratan_paket')->references('id_paket')->on('paket_selams')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('persyaratan_pakets', function (Blueprint $table) {
            $table->dropForeign('fk_persyaratan_paket');
        });
    }
}
