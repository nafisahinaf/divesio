<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaketSelamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paket_selams', function (Blueprint $table) {
            $table->integer('id_paket')->primary();
            $table->integer('id_dive_center');
            $table->string('nama_paket', 100);
            $table->text('deskripsi');
            $table->enum('ketersediaan', ['FULLY BOOKED', 'AVAILABLE']);
            $table->integer('kuota_peserta');
            $table->string('foto', 30);
            $table->double('harga');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paket_selams');
    }
}
