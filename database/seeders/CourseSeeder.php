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
        Course::create(['name' => 'Amazon Web Service', 'overview' => '', 'description' => 'This course category begins by thoroughly explaining Cloud Computing before moving into AWS, enabling mastery of Infrastructure, Storage, Security, Identity Management, and other pertinent aspects within the Cloud domain.',
         'state' => true, 'number_of_videos' => 10, 'number_of_files' => 2, 'duration' => '20:15', 'instructor' => 'Lola Remidios', 'img' => 'courses/1.jpg', 'file' => '', 'rating' => '5']);


        Course::create(['name' => 'SC-900 Microsoft Security', 'overview' => '', 'description' => 'This course category starts by exploring Security, Compliance, and Identity, covering security methodologies, Microsoft Security principles, and compliance concepts, including zero trust methodology, shared responsibility model, and defence in depth strategies.',
         'state' => true, 'number_of_videos' => 10, 'number_of_files' => 2, 'duration' => '20:15', 'instructor' => 'Johnny sins', 'img' => 'courses/2.jpg', 'file' => '', 'rating' => '5']);


        Course::create(['name' => 'Comptia Cyber Security+', 'overview' => '', 'description' => 'This course category provides comprehensive training on cybersecurity essentials, covering topics such as threat actors, risk management, cryptography, network security and many more, equipping individuals with crucial skills for protecting digital assets and networks.',
         'state' => true, 'number_of_videos' => 10, 'number_of_files' => 2, 'duration' => '20:15', 'instructor' => 'EME', 'img' => 'courses/3.jpg', 'file' => '', 'rating' => '5']);


        Course::create(['name' => 'Mechatronics and Automation Master Technician', 'overview' => '', 'description' => 'This course category provides comprehensive training in interdisciplinary engineering, integrating mechanical, electrical, and computer science fundamentals to equip technicians with advanced skills in designing, troubleshooting, and optimising automated systems.',
         'state' => true, 'number_of_videos' => 10, 'number_of_files' => 2, 'duration' => '20:15', 'instructor' => 'EME 2', 'img' => 'courses/4.jpg', 'file' => '', 'rating' => '5']);


        Course::create(['name' => 'Mechatronics and Automation Tehcnician', 'overview' => '', 'description' => 'This course category provides a dynamic learning experience, covering the integration of mechanical, electrical, and computer engineering principles to equip individuals with skills in automated systems and robotics technology.',
         'state' => true, 'number_of_videos' => 10, 'number_of_files' => 2, 'duration' => '20:15', 'instructor' => 'EME 3', 'img' => 'courses/5.jpg', 'file' => '', 'rating' => '5']);

    }
}
