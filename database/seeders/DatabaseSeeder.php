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
        // Adding an admin user
        $user = \App\Models\User::factory()
            ->count(1)
            ->create([
                'email' => 'admin@admin.com',
                'password' => \Hash::make('admin'),
            ]);

        $this->call(CourseSeeder::class);
        $this->call(FatherSeeder::class);
        $this->call(HighestQualificationSeeder::class);
        $this->call(MotherSeeder::class);
        $this->call(NationalitySeeder::class);
        $this->call(OccupationSeeder::class);
        $this->call(StudentSeeder::class);
        $this->call(UserSeeder::class);
    }
}
