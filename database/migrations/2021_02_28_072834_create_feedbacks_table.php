<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedbacksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedbacks', function (Blueprint $table) {
            $table->integer('id_feedback')->primary();
            $table->integer('id_order');
            $table->integer('id_user')->index('fk_feedback_user');
            $table->integer('id_paket')->index('fk_feedback_paket');
            $table->string('review', 300);
            $table->integer('rating');
            $table->index(['id_order', 'id_user', 'id_paket'], 'id_order');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('feedbacks');
    }
}
