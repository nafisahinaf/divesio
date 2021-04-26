<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTransaksiPembayaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('transaksi_pembayarans', function (Blueprint $table) {
            $table->foreign('id_order', 'fk_transaksi_order')->references('id_order')->on('orders')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('id_user', 'fk_transaksi_user')->references('id_user')->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('transaksi_pembayarans', function (Blueprint $table) {
            $table->dropForeign('fk_transaksi_order');
            $table->dropForeign('fk_transaksi_user');
        });
    }
}
