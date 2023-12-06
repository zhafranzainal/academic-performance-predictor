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
        HighestQualification::factory()->count(5)->create();
    }
}
