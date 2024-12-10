<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpecialtiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('specialties')->insert([
            [
                'title' => 'Events',
                'description' => 'Join us for exciting triathlon events across Pakistan! Check our calendar for upcoming races and be part of the challenge.',
                'image_url' => 'images/speciality-1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Results from Competitions',
                'description' => 'Celebrate the achievements of our athletes! View the results from our latest competitions. Join us in honoring their hard work.',
                'image_url' => 'images/speciality-2.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Boot Camp Fitness',
                'description' => 'Transform your fitness with our dynamic Boot Camp classes! Designed for all levels, our program builds a supportive community.',
                'image_url' => 'images/speciality-3.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Sports Training',
                'description' => 'Ready to take your performance to the next level? Our expert coaches offer specialized training in cycling, running, and triathlon.',
                'image_url' => 'images/speciality-4.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
