<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id_role' => 1,
                'jenis_role' => 'pemesan_guest',
            ),
            1 => 
            array (
                'id_role' => 2,
                'jenis_role' => 'pemesan_login',
            ),
            2 => 
            array (
                'id_role' => 3,
                'jenis_role' => 'admin',
            ),
            3 => 
            array (
                'id_role' => 4,
                'jenis_role' => 'dive_center',
            ),
        ));
        
        
    }
}