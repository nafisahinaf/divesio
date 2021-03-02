<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FasilitasPaketSelamsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('fasilitas_paket_selams')->delete();
        
        \DB::table('fasilitas_paket_selams')->insert(array (
            0 => 
            array (
                'id_fasilitas_paket_selams' => 1,
                'id_paket_selam' => 1,
                'nama_fasilitas' => 'akomdasi perjalanan dari hotel sampai lokasi',
            ),
            1 => 
            array (
                'id_fasilitas_paket_selams' => 2,
                'id_paket_selam' => 1,
                'nama_fasilitas' => 'akomodasi penginapan hotel bintang 3 untuk 1 malam',
            ),
        ));
        
        
    }
}