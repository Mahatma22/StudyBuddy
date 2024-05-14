<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class courseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Course::create([
            'course_name' => 'Mathematics'
        ]);

        Course::create([
            'course_name' => 'Physics'
        ]);

        Course::create([
            'course_name' => 'Biology'
        ]);

        Course::create([
            'course_name' => 'Chemistry'
        ]);

        Course::create([
            'course_name' => 'English'
        ]);

    }
}
