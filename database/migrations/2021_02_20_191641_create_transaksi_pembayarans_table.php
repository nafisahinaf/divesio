<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksiPembayaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi_pembayarans', function (Blueprint $table) {
            $table->integer('id_transaksi')->primary();
            $table->float('nominal', 30, 0);
            $table->integer('batas_wkt_pembayaran');
            $table->enum('status', ['Berhasil', 'Menunggu pembayaran', 'Gagal', '']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksi_pembayarans');
    }
}
