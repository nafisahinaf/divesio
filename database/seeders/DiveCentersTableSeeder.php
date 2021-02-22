<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DiveCentersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('dive_centers')->delete();
        
        \DB::table('dive_centers')->insert(array (
            0 => 
            array (
                'id_dive_center' => 1,
                'id_user' => 4,
                'nama' => 'Ecodive Bali Diving',
                'lokasi' => 'Jl. Tambak Sari No.1A, Sanur, Denpasar Sel., Kota Denpasar, Bali 80228',
                'about' => 'Dengan operasi penyelaman kami yang terletak di jantung Sanur, Ecodive Bali Diving menyediakan perjalanan menyelam harian di tempat tujuan yang menakjubkan di sekitar Bali.

Kamu dapat mempercayakan pengalaman menyelammu  bersama kami - Menyelam dengan instruktur terlatih, peralatan berkualitas tinggi, dan layanan profesional. Bali adalah rumah bagi sejumlah tempat menyelam terbaik di dunia dan Ecodive Bali Diving mengundang kamu untuk menjadi penjelajah lautan bersama kami!

Nikmati pengalaman menyelam yang aman & menyenangkan dengan Ecodive Bali Diving.',
                'informasi_kontak' => 'email: info@awdive.com
wa : +62821-1393-1137
hp : +62821-1393-1137',
                'foto_dive_center' => 'foto dive center.jpg',
                'created_at' => '2021-02-21 01:44:21',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}