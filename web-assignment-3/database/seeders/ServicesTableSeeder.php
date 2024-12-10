<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            [
                'title' => 'Weight Training Area',
                'description' => 'Our weight training area is fully equipped with a bench press, squat rack, free weights, and leg press to build strength.',
                'image_url' => 'images/s11.png',
                'hover_image_url' => 'images/s11-hover.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Yoga & Pilates',
                'description' => 'Train your mind and body with our full yoga and Pilates equipment on a specially designed sports training floor.',
                'image_url' => 'images/s2.png',
                'hover_image_url' => 'images/s2-hover.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Endless Pool',
                'description' => 'Train like a pro with our endless pool designed for low-impact, high-intensity swimming workouts.',
                'image_url' => 'images/s3.png',
                'hover_image_url' => 'images/s3-hover.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
