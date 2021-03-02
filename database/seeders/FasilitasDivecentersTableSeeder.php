<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FasilitasDivecentersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('fasilitas_divecenters')->delete();
        
        \DB::table('fasilitas_divecenters')->insert(array (
            0 => 
            array (
                'id_fasilitas_divecenter' => 1,
                'id_dive_center' => 1,
                'nama' => 'wifi',
            ),
            1 => 
            array (
                'id_fasilitas_divecenter' => 2,
                'id_dive_center' => 1,
                'nama' => 'nitrox',
            ),
        ));
        
        
    }
}