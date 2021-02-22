<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(DiveCentersTableSeeder::class);
        $this->call(PaketSelamsTableSeeder::class);
        $this->call(JadwalPaketsTableSeeder::class);
        $this->call(TransaksiPembayaransTableSeeder::class);
        $this->call(OrdersTableSeeder::class);
        $this->call(DataDiriPemesansTableSeeder::class);
        $this->call(FeedbacksTableSeeder::class);
    }
}
