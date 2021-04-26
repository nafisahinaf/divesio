<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FasilitasPaketsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('fasilitas_pakets')->delete();
        
        \DB::table('fasilitas_pakets')->insert(array (
            0 => 
            array (
                'id_fasilitas_paket' => 1,
                'id_paket' => 1,
                'id_fasilitas_paket_selam' => 1,
            ),
            1 => 
            array (
                'id_fasilitas_paket' => 2,
                'id_paket' => 1,
                'id_fasilitas_paket_selam' => 2,
            ),
        ));
        
        
    }
}