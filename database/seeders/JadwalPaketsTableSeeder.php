<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class JadwalPaketsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('jadwal_pakets')->delete();
        
        \DB::table('jadwal_pakets')->insert(array (
            0 => 
            array (
                'id_jadwal' => 1,
                'id_paket' => 1,
                'tanggal' => '2021-08-14',
                'jam_berangkat' => '07:00:00.000000',
                'durasi' => 10,
            ),
            1 => 
            array (
                'id_jadwal' => 2,
                'id_paket' => 1,
                'tanggal' => '2021-08-17',
                'jam_berangkat' => '07:00:00.000000',
                'durasi' => 10,
            ),
            2 => 
            array (
                'id_jadwal' => 3,
                'id_paket' => 2,
                'tanggal' => '2021-09-08',
                'jam_berangkat' => '07:30:00.000000',
                'durasi' => 8,
            ),
        ));
        
        
    }
}