<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToArtikelUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('artikel_users', function (Blueprint $table) {
            $table->foreign('id_artikel', 'fk_artikeluser_artikel')->references('id_artikel')->on('artikels')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('id_user', 'fk_artikeluser_user')->references('id_user')->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('artikel_users', function (Blueprint $table) {
            $table->dropForeign('fk_artikeluser_artikel');
            $table->dropForeign('fk_artikeluser_user');
        });
    }
}
