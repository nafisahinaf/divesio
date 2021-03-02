<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBerkasPendaftaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('berkas_pendaftarans', function (Blueprint $table) {
            $table->integer('id_berkas')->primary();
            $table->integer('id_dive_center')->index('id_dive_center');
            $table->string('nama_berkas', 30);
            $table->binary('file_berkas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('berkas_pendaftarans');
    }
}
