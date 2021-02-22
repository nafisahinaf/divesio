<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ArtikelsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('artikels')->delete();
        
        \DB::table('artikels')->insert(array (
            0 => 
            array (
                'id_artikel' => 1,
                'judul' => '5 Destinasi Selam Ini Bikin Para Penyelam Dunia Balik Lagi',
            'penulis' => 'Bram Setiawan (Kontributor) dan Ludhy Cahyana',
                'kategori' => 'destinasi selam',
            'isi' => 'Wisata bahari khususnya menyelam, menjadi jenis wisata yang unik. Pasalnya, para penyelam umumnya datang berulang-ulang (repeater). Mereka seperti ketagihan oleh keindahan bawah laut, bila menemukan spot selam yang masih lestari.

Aktor Nicholas Saputra misalnya, ia mengaku menyelam secara rutin di perairan Taman Nasional Pulau Komodo. Berikut destinasi selam dunia, yang membuat para penyelam ingin terus menyelaminya, sebagaimana dinukil dari Booking.com.

Raja Ampat, Indonesia

Raja Ampat merupakan taman laut yang terkenal dengan lanskap dan pemandangan bawah lautnya yang indah. Suasana tenang serta air yang jernih memberi kenyamanan untuk melihat aneka terumbu karang serta kehidupan satwa laut seperti ikan pari, hiu, dan penyu. Raja Ampat dianggap sebagai kawasan perairan yang istimewa untuk memenuhi harapan para penyelam.

Pulau Sipadan, Malaysia

Pulau Sipadan memiliki kekayaan habitat bawah laut. Sipadan tidak mudah diakses oleh banyak wisatawan. Pemerintah Malaysia membatasi aktivitas penyelaman per hari. Hal tersebut sebagai upaya mempertahankan kelestarian kawasan pulau tersebut. Bila ingin ke Pulau Sipadan, pelancong bisa mampir di Mabul atau Kapalai, sebagai persinggahan menuju Pulau Sipadan.

Kolombo, Sri Lanka

Kolombo memiliki kawasan penyelaman untuk melihat kapal tua yang karam di dasar laut. Kapal karam itu menjadi tempat berkumpul satwa laut, serta ditumbuhi terumbu karang.

Kepulauan Andaman, India

Kepulauan Andaman berada di lokasi terpencil dengan suasana tropis, tepi pantai dipenuhi hutan bakau. Pemandangan bawah laut di perairan kepulauan ini diminati penyelam. Perairan Kepulauan Andaman merupakan salah tempat menyelam untuk melihat aktivitas ikan-ikan sweetlips.

Kepulauan Mergui, Myanmar

Perairan Mergui disukai kalangan penyelam berpengalaman, karena pemandangan bawah lautnya emiliki terumbu karang besar. Kawasan tersebut merupakan spot menyelam untuk melihat habitat hiu, pari manta, barakuda, dan red lionfish.',
                'foto' => 'foto artikel.jpg',
                'durasi_baca' => 5,
            ),
        ));
        
        
    }
}