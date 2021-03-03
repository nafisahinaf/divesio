<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BerkasPendaftaransTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('berkas_pendaftarans')->delete();
        
        \DB::table('berkas_pendaftarans')->insert(array (
            0 => 
            array (
                'id_berkas' => 1,
                'id_dive_center' => 1,
                'nama_berkas' => 'berkas sertifikat PADI star',
                'file_berkas' => 'berkas pendaftaran.jpg',
),
));
        
        
    }
}