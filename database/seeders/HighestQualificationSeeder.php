<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\HighestQualification;

class HighestQualificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HighestQualification::create(['name' => 'Secondary Education']);
        HighestQualification::create(['name' => 'Foundation']);
        HighestQualification::create(['name' => 'Degree']);
        HighestQualification::create(['name' => 'Master']);
        HighestQualification::create(['name' => 'Doctorate']);
    }
}
