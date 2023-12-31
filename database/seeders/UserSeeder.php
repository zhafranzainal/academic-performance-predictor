<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Adding an admin user
        $user = User::factory()->count(1)->create([
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin'),
        ]);

        User::factory()->count(5)->create();
    }
}
