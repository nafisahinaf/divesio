<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataDiriPemesansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_diri_pemesans', function (Blueprint $table) {
            $table->integer('id_data_diri')->primary();
            $table->integer('id_order')->index('id_order');
            $table->string('nama_lengkap', 100);
            $table->enum('jenis_tanda_pengenal', ['KTP', 'SIM', 'KK']);
            $table->string('nomor_tanda_pengenal', 30);
            $table->string('alamat', 300);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_diri_pemesans');
    }
}
