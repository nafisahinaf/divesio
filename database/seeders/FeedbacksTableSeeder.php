<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FeedbacksTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('feedbacks')->delete();
        
        \DB::table('feedbacks')->insert(array (
            0 => 
            array (
                'id_feedback' => 1,
                'id_order' => 1,
                'id_user' => 1,
                'id_paket' => 1,
                'review' => 'Instruktur sangat ramah , profesional, dan menyenangkan, semua peralatan untuk peserta juga berkualitas, recommended banget buat yang pengen kursus open water diver!',
                'rating' => 5,
            ),
        ));
        
        
    }
}