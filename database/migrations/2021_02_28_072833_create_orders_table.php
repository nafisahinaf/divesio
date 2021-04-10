<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->integer('id_order', true);
            $table->integer('id_user')->index('fk_order_user');
            $table->integer('id_paket')->index('fk_order_paket');
            $table->integer('id_jadwal')->index('id_jadwal');
            $table->integer('jumlah_paket');
            $table->enum('status', ['Berhasil', 'Batal'])->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
