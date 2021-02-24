<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id_user' => 1,
                'id_role' => 1,
                'name' => 'Nafisah Karimah',
                'email' => 'karimahnafisah148@gmail.com',
                'email_verified_at' => NULL,
                'password' => bcrypt('12345678'),
                'remember_token' => NULL,
                'created_at' => '2021-02-21 00:18:52',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id_user' => 2,
                'id_role' => 2,
                'name' => 'Abdurrahman Jaisy',
                'email' => 'abdurrahmanjaisy@gmail.com',
                'email_verified_at' => NULL,
                'password' => bcrypt('12345678'),
                'remember_token' => NULL,
                'created_at' => '2021-02-21 00:51:59',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id_user' => 3,
                'id_role' => 3,
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'email_verified_at' => NULL,
                'password' => bcrypt('12345678'),
                'remember_token' => NULL,
                'created_at' => '2021-02-21 00:50:03',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id_user' => 4,
                'id_role' => 4,
                'name' => 'ECODIVE Dive Center',
                'email' => 'ecodive@gmail.com',
                'email_verified_at' => NULL,
                'password' => bcrypt('12345678'),
                'remember_token' => NULL,
                'created_at' => '2021-02-21 00:00:00',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}