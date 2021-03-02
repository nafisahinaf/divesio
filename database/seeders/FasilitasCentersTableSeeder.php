<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FasilitasCentersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('fasilitas_centers')->delete();
        
        \DB::table('fasilitas_centers')->insert(array (
            0 => 
            array (
                'id_fasilitas_center' => 2,
                'id_dive_center' => 1,
                'id_fasilitas_divecenter' => 1,
            ),
            1 => 
            array (
                'id_fasilitas_center' => 1,
                'id_dive_center' => 1,
                'id_fasilitas_divecenter' => 2,
            ),
        ));
        
        
    }
}