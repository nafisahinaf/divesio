<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PersyaratanPaketsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('persyaratan_pakets')->delete();
        
        \DB::table('persyaratan_pakets')->insert(array (
            0 => 
            array (
                'id_persyaratan' => 1,
                'id_paket' => 1,
                'nama_persyaratan' => 'Memiliki sertifikat open dive level min. advance',
            ),
            1 => 
            array (
                'id_persyaratan' => 2,
                'id_paket' => 1,
                'nama_persyaratan' => 'Kondisi fisik sehat',
            ),
        ));
        
        
    }
}