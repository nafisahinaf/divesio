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
            $table->string('informasi_kontak', 255);
            $table->string('foto_dive_center', 30);
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
