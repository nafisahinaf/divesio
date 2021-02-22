<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DataDiriPemesansTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('data_diri_pemesans')->delete();
        
        \DB::table('data_diri_pemesans')->insert(array (
            0 => 
            array (
                'id_data_diri' => 1,
                'id_order' => 1,
                'nama_lengkap' => 'Nafisah Karimah',
                'jenis_tanda_pengenal' => 'KTP',
                'nomor_tanda_pengenal' => '3576025408000001',
                'alamat' => 'Jl. Pogung Baru Jl. Pogung baru blok A3No.5, Pogung Kidul, Sinduadi, Kec. Mlati, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55291',
            ),
            1 => 
            array (
                'id_data_diri' => 2,
                'id_order' => 2,
                'nama_lengkap' => 'Nafisah Karimah',
                'jenis_tanda_pengenal' => 'SIM',
                'nomor_tanda_pengenal' => '094408000007',
                'alamat' => 'Jl. Pogung Baru Jl. Pogung baru blok A3No.5, Pogung Kidul, Sinduadi, Kec. Mlati, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55291',
            ),
            2 => 
            array (
                'id_data_diri' => 3,
                'id_order' => 3,
                'nama_lengkap' => 'Abdurrahman Jaisy',
                'jenis_tanda_pengenal' => 'KK',
                'nomor_tanda_pengenal' => '354497000001',
                'alamat' => 'Jl. Kaliurang Jl. Selokan Mataram No.km 4, RW.5, Dabag, Condongcatur, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281',
            ),
        ));
        
        
    }
}