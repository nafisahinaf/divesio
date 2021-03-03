<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToFasilitasPaketSelamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('fasilitas_paket_selams', function (Blueprint $table) {
            $table->foreign('id_paket_selam', 'fk_fasilitaspaketselam_paketselam')->references('id_paket')->on('paket_selams')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('fasilitas_paket_selams', function (Blueprint $table) {
            $table->dropForeign('fk_fasilitaspaketselam_paketselam');
        });
    }
}
