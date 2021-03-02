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
            $table->integer('id_user')->index('fk_transaksi_user');
            $table->integer('id_order');
            $table->double('nominal');
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
