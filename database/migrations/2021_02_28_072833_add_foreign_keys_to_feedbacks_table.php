<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToFeedbacksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('feedbacks', function (Blueprint $table) {
            $table->foreign('id_order', 'fk_feedback_order')->references('id_order')->on('orders')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('id_paket', 'fk_feedback_paket')->references('id_paket')->on('paket_selams')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('id_user', 'fk_feedback_user')->references('id_user')->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('feedbacks', function (Blueprint $table) {
            $table->dropForeign('fk_feedback_order');
            $table->dropForeign('fk_feedback_paket');
            $table->dropForeign('fk_feedback_user');
        });
    }
}
