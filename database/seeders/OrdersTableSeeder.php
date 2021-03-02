<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('orders')->delete();
        
        \DB::table('orders')->insert(array (
            0 => 
            array (
                'id_order' => 1,
                'id_transaksi' => 2,
                'id_user' => 1,
                'id_paket' => 1,
                'id_jadwal' => 1,
                'jumlah_paket' => 1,
                'status' => 'Berhasil',
            ),
            1 => 
            array (
                'id_order' => 2,
                'id_transaksi' => 3,
                'id_user' => 1,
                'id_paket' => 2,
                'id_jadwal' => 2,
                'jumlah_paket' => 1,
                'status' => 'Batal',
            ),
        ));
        
        
    }
}