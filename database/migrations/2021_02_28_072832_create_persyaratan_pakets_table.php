<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersyaratanPaketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persyaratan_pakets', function (Blueprint $table) {
            $table->integer('id_persyaratan',true);
            $table->integer('id_paket')->index('id_paket');
            $table->string('nama_persyaratan', 300);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('persyaratan_pakets');
    }
}
