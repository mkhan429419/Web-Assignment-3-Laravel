<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FacilitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('facilities')->insert([
            [
                'title' => 'Well equipped',
                'image_url' => './images/leg_press.jpg',
                'description' => 'Many equipments including benchpress, squat rack, free weights, leg press, and much more.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Training Floor',
                'image_url' => './images/yoga.jpg',
                'description' => 'Full yoga mats and Pilates equipment with a newly installed swimming pool.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Waiting Area',
                'image_url' => './images/waiting.jpg',
                'description' => 'Comfortable chairs and couches along with TV for parents.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
