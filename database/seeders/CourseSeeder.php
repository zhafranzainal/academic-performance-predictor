<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Course::create(['name' => 'Advertising and Marketing Management']);
        Course::create(['name' => 'Agronomy']);
        Course::create(['name' => 'Animation and Multimedia Design']);
        Course::create(['name' => 'Basic Education']);
        Course::create(['name' => 'Biofuel Production Technologies']);

        Course::create(['name' => 'Communication Design']);
        Course::create(['name' => 'Equinculture']);
        Course::create(['name' => 'Informatics Engineering']);
        Course::create(['name' => 'Journalism and Communication']);
        Course::create(['name' => 'Management']);

        Course::create(['name' => 'Nursing']);
        Course::create(['name' => 'Oral Hygiene']);
        Course::create(['name' => 'Social Service']);
        Course::create(['name' => 'Tourism']);
        Course::create(['name' => 'Veterinary Nursing']);
    }
}
