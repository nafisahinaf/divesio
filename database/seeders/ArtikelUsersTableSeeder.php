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
        
        \DB::table('artikel_users')->insert(array (
            0 => 
            array (
                'id_artikel_user' => 1,
                'id_artikel' => 1,
                'id_user' => 1,
            ),
        ));
        
        
    }
}