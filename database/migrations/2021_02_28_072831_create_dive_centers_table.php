<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiveCentersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dive_centers', function (Blueprint $table) {
            $table->integer('id_dive_center', true);
            $table->integer('id_user')->index('id_user');
            $table->string('nama', 255);
            $table->string('lokasi', 255);
            $table->text('about');
            $table->string('no_hp', 30);
            $table->string('email', 30);
            $table->binary('foto_dive_center');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dive_centers');
    }
}
