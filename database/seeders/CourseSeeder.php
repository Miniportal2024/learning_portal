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
        Course::create(['name' => 'Amazon Web Service', 'overview' => 'Amazon Web Services (AWS) is the worlds most comprehensive and broadly adopted cloud, offering over 200 fully featured services from data centers globally.', 'description' => 'This course category begins by thoroughly explaining Cloud Computing before moving into AWS, enabling mastery of Infrastructure, Storage, Security, Identity Management, and other pertinent aspects within the Cloud domain.',
         'state' => true, 'number_of_videos' => 10, 'number_of_files' => 2, 'duration' => '20:15', 'instructor' => 'Lola Remidios', 'img' => 'assets/img/courses/1.jpg', 'file' => '', 'rating' => '5']);


        Course::create(['name' => 'SC-900 Microsoft Security', 'overview' => 'Microsoft certifications highlight the skills needed to work efficiently in a job role rather than giving bleary attention to each principle.', 'description' => 'This course category starts by exploring Security, Compliance, and Identity, covering security methodologies, Microsoft Security principles, and compliance concepts, including zero trust methodology, shared responsibility model, and defence in depth strategies.',
         'state' => true, 'number_of_videos' => 10, 'number_of_files' => 2, 'duration' => '20:15', 'instructor' => 'Johnny sins', 'img' => 'assets/img/courses/2.jpg', 'file' => '', 'rating' => '5']);


        Course::create(['name' => 'Comptia Cyber Security+', 'overview' => 'A global certification that validates the baseline skills necessary to perform core security functions and pursue an IT security career.', 'description' => 'This course category provides comprehensive training on cybersecurity essentials, covering topics such as threat actors, risk management, cryptography, network security and many more, equipping individuals with crucial skills for protecting digital assets and networks.',
         'state' => true, 'number_of_videos' => 10, 'number_of_files' => 2, 'duration' => '20:15', 'instructor' => 'EME', 'img' => 'assets/img/courses/3.jpg', 'file' => '', 'rating' => '5']);


        Course::create(['name' => 'Mechatronics and Automation Master Technician', 'overview' => 'Design/development and engineering staff to develop, repair, and maintain electronic/robotic systems and individual components.', 'description' => 'This course category provides comprehensive training in interdisciplinary engineering, integrating mechanical, electrical, and computer science fundamentals to equip technicians with advanced skills in designing, troubleshooting, and optimising automated systems.',
         'state' => true, 'number_of_videos' => 10, 'number_of_files' => 2, 'duration' => '20:15', 'instructor' => 'EME 2', 'img' => 'assets/img/courses/4.jpg', 'file' => '', 'rating' => '5']);


        Course::create(['name' => 'Mechatronics and Automation Tehcnician', 'overview' => 'Install, maintain, and repair automated machinery and computer-controlled mechanical systems in industrial settings. ', 'description' => 'This course category provides a dynamic learning experience, covering the integration of mechanical, electrical, and computer engineering principles to equip individuals with skills in automated systems and robotics technology.',
         'state' => true, 'number_of_videos' => 10, 'number_of_files' => 2, 'duration' => '20:15', 'instructor' => 'EME 3', 'img' => 'assets/img/courses/5.jpg', 'file' => '', 'rating' => '5']);

    }
}
