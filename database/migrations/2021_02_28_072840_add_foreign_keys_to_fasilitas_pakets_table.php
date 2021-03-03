<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToFasilitasPaketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('fasilitas_pakets', function (Blueprint $table) {
            $table->foreign('id_fasilitas_paket_selam', 'fk_fasilitaspaket_fasilitaspaketselam')->references('id_fasilitas_paket_selams')->on('fasilitas_paket_selams')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('id_paket', 'fk_fasilitaspaket_paket')->references('id_paket')->on('paket_selams')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('fasilitas_pakets', function (Blueprint $table) {
            $table->dropForeign('fk_fasilitaspaket_fasilitaspaketselam');
            $table->dropForeign('fk_fasilitaspaket_paket');
        });
    }
}
