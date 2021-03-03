<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtikelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artikels', function (Blueprint $table) {
            $table->integer('id_artikel')->primary();
            $table->string('judul', 300);
            $table->string('penulis', 300);;
            $table->enum('kategori', ['umum', 'inspirasi']);
            $table->text('isi');
            $table->string('foto', 30);
            $table->integer('durasi_baca');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artikels');
    }
}
