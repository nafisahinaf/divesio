<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtikelUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artikel_users', function (Blueprint $table) {
            $table->integer('id_artikel_user')->primary();
            $table->integer('id_artikel');
            $table->integer('id_user')->index('fk_artikeluser_user');
            $table->index(['id_artikel', 'id_user'], 'id_artikel');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artikel_users');
    }
}
