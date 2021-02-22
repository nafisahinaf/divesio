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
            $table->string('nama_paket', 100);
            $table->text('deskripsi');
            $table->text('fasilitas');
            $table->enum('ketersediaan', ['FULLY BOOKED', 'AVAILABLE', '', '']);
            $table->integer('jumlah_peserta');
            $table->float('harga', 10, 0);
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
