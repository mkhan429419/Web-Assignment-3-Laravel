<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class InstructorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('instructors')->insert([
            [
                'name' => 'Jane Robinson',
                'image_url' => 'images/Jane.jpg',
                'description' => 'A yoga instructor with 10 years of experience. She creates a healthy environment around her.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Brett Whitinui',
                'image_url' => 'images/brett.jpg',
                'description' => 'A gym instructor who has been coaching for 15 years, helping clients achieve their fitness goals.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Wendy Jones',
                'image_url' => 'images/wendyy.jpg',
                'description' => 'A swimming coach with 8 years of experience specializing in advanced swimming techniques.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
