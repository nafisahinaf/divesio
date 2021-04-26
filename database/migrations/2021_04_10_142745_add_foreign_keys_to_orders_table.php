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
            $table->foreign('id_paket', 'fk_order_paket')->references('id_paket')->on('paket_selams')->onUpdate('CASCADE')->onDelete('CASCADE');
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
            $table->dropForeign('fk_order_paket');
            $table->dropForeign('fk_order_user');
        });
    }
}
