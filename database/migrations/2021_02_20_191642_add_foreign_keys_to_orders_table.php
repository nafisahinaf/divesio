<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->foreign('id_transaksi', 'fk_order_transaksi')->references('id_transaksi')->on('transaksi_pembayarans')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('id_user', 'fk_order_user')->references('id_user')->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropForeign('fk_order_transaksi');
            $table->dropForeign('fk_order_user');
        });
    }
}
