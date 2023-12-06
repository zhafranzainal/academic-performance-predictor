<?php

namespace Database\Seeders;

use App\Models\Occupation;
use Illuminate\Database\Seeder;

class OccupationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Occupation::create(['name' => 'Student']);
        Occupation::create(['name' => 'Director and Executive Manager']);
        Occupation::create(['name' => 'Specialist']);
        Occupation::create(['name' => 'Technician']);
        Occupation::create(['name' => 'Administrative Staff']);

        Occupation::create(['name' => 'Security and Safety Worker']);
        Occupation::create(['name' => 'Skilled Worker']);
        Occupation::create(['name' => 'Machine Operator']);
        Occupation::create(['name' => 'Unskilled Worker']);
        Occupation::create(['name' => 'Armed Forces Profession']);

        Occupation::create(['name' => 'Health Professional']);
        Occupation::create(['name' => 'Teacher']);
        Occupation::create(['name' => 'Seller']);
        Occupation::create(['name' => 'Cleaning Worker']);
        Occupation::create(['name' => 'Office Worker']);
    }
}
