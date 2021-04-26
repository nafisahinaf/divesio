<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PaketSelamsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('paket_selams')->delete();
        
        \DB::table('paket_selams')->insert(array (
            0 => 
            array (
                'id_paket' => 1,
                'id_dive_center' => 1,
                'nama_paket' => 'Open Water Diver PADI Courses with Ecodive Bali Diving',
                'deskripsi' => 'Dengan Advanced Open Water Diver Course, kamu akan mengembangkan keterampilan scuba dan tidak perlu mengkhawatirkan kedalaman yang terbatas. Kamu dapat menjelajahi tempat-tempat baru dan tempat-tempat misterius yang membutuhkan pengalaman menyelam, dalam, atau malam hari. Kamu bisa mulai segera sete',
                'ketersediaan' => 'AVAILABLE',
                'kuota_peserta' => 4,
                'foto' => 'foto kegiatan paket.jpg',
                'harga' => 5000000.0,
            ),
            1 => 
            array (
                'id_paket' => 2,
                'id_dive_center' => 1,
                'nama_paket' => 'Snorkeling Day Trip Sanur with Ecodive Bali Diving',
                'deskripsi' => 'Snorkeling ke perairan biru jernih Nusa Penida dan Nusa Lembongan untuk menjelajahi terumbu karang yang indah, ikan pari manta raksasa, penyu dan masih banyak lagi. Snorkeling di atas kapal karam USS Liberty di Tulamben dengan taman karangnya yang dangkal dan kehidupan laut yang kaya. Snorkeling di ',
                'ketersediaan' => 'FULLY BOOKED',
                'kuota_peserta' => 6,
                'foto' => 'foto paket.jpg',
                'harga' => 1200000.0,
            ),
        ));
        
        
    }
}