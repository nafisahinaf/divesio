<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PendaftaranDivecentersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pendaftaran_divecenters')->delete();
        
        \DB::table('pendaftaran_divecenters')->insert(array (
            0 => 
            array (
                'id_pendaftaran' => 1,
                'id_user' => 2,
            ),
        ));
        
        
    }
}