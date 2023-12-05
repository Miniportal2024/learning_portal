<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //overview
        Course::create(['name' => 'Amazon Web Service', 'overview' => '', 'description' => '', 'state' => true, 'number_of_videos' => 10,
         'number_of_files' => 2, 'duration' => '20:15', 'instructor' => 'Lola Remidios', 'img' => 'courses/3.jpg', 'file' => '', 'rating' => '5']);
    }
}
