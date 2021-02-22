<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TransaksiPembayaransTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('transaksi_pembayarans')->delete();
        
        \DB::table('transaksi_pembayarans')->insert(array (
            0 => 
            array (
                'id_transaksi' => 1,
                'id_user' => 2,
                'nominal' => 5000000.0,
                'batas_wkt_pembayaran' => 1,
                'status' => 'Menunggu pembayaran',
            ),
            1 => 
            array (
                'id_transaksi' => 2,
                'id_user' => 1,
                'nominal' => 5000000.0,
                'batas_wkt_pembayaran' => 1,
                'status' => 'Berhasil',
            ),
            2 => 
            array (
                'id_transaksi' => 3,
                'id_user' => 1,
                'nominal' => 1200000.0,
                'batas_wkt_pembayaran' => 1,
                'status' => 'Gagal',
            ),
        ));
        
        
    }
}