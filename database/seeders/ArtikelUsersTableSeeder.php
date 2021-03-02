<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ArtikelUsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('artikel_users')->delete();
        
        
        
    }
}