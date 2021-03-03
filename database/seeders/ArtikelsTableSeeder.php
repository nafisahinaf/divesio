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
                'judul' => 'Bagaimana Diving Saat Era New Normal?',
                'penulis' => 'Nicholas Ryan Aditya dan Kahfi Dirga Cahya',
                'kategori' => 'umum',
            'isi' => 'Bagi para pencinta kegiatan selam atau diving pastinya sudah tidak sabar untuk kembali menyelam setelah berbulan-bulan di rumah saja akibat pandemi Covid-19. Namun jangan khawatir, sebab sebentar lagi para diver sudah bisa kembali menyelam lautan Indonesia dengan aman dan nyaman. Kementerian Pariwisata dan Ekonomi Kreatif (Kemenparekraf) dan beberapa anggota Professional Association of Diving Instructors (PADI) telah menyusun panduan protokol kesehatan wisata selam di masa adaptasi kebiasaan baru (AKB).
Salah satu tim penyusun panduan selam, Consultant PADI, Abi Carnadie mengatakan, panduan ini sudah menerapkan Cleanliness, Health, Safety, and Environment (CHSE) yang digagas Kemenparekraf. Ia menjelaskan, ada penambahan dalam panduan wisata diving jika dibandingkan sebelum pandemi dan di masa pandemi, salah satunya adalah disinfeksi peralatan. "Penambahannya berkaitan dengan disinfeksi peralatan. Nah, ini yang harus dilakukan untuk memastikan kita mengurangi risiko penularan," kata Abi dalam Live Streaming channel Youtube Kemenparekraf bertemakan "Apa Kabar Diving Indonesia", Kamis (20/8/2020). "Jadi alat sebaiknya satu orang pakai alat itu terus, jangan di-share dengan orang lain," lanjutnya.
Terkait kebersihan dan mencegah penyebaran Covid-19 di wisata diving, wisatawan disarankan menggunakan alat diving masing-masing atau tidak dibagikan dengan orang lain. Namun, apabila ingin menyewa peralatan diving di operator, maka pihak operator bisa meyakinkan wisatawan bahwa alat tersebut telah melalui proses disinfeksi. "Harus dipastikan bahwa kalau memang alat itu alat rental, sebelum boleh di-run dari satu diver ke diver yang lain, harus melalui proses disinfeksi. Itu yang harus memang kita tekankan," jelasnya.
Terkait cara untuk mendapatkan dive license atau lisensi diving saat masa pandemi, ia mengatakan protokol pelatihan akan dikembalikan ke masing-masing training agency. Menurutnya, hal-hal yang berhubungan dengan sharing regulator dan sebagainya akan dikembalikan ke masing-masing training agency di mana instruktur tersebut menjadi anggotanya. "Supaya dia lihat, harus melakukan skill ini merubahnya seperti apa," imbuhnya.
Abi menjelaskan, ia sudah menyusun draft final terkait panduan wisata selam saat masa pandemi. Adapun draft final tersebut sudah tinggal menunggu tanda tangan Menteri Pariwisata dan Ekonomi Kreatif. "Begitu sudah selesai, next step-nya ada planing untuk membuat video simulasinya. Ini rencana dari Kemenparekraf. Setelah selesai video itu kita juga akan melakukan sosialisasi ke daerah-daerah," tuturnya.
Hal tersebut, jelasnya, agar panduan wisata selam ini dapat menjadi standar payung di setiap daerah. Adapun daerah-daerah dapat mengambil panduan ini dengan menyesuaikan kondisi daerahnya.',
                'foto' => 'foto artikel.jpg',
                'durasi_baca' => 5,
            ),
        ));
        
        
    }
}