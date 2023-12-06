<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserSeeder::class);

        $this->call(CourseSeeder::class);
        $this->call(FatherSeeder::class);
        $this->call(HighestQualificationSeeder::class);
        $this->call(MotherSeeder::class);
        $this->call(NationalitySeeder::class);
        $this->call(OccupationSeeder::class);
        $this->call(StudentSeeder::class);
    }
}
