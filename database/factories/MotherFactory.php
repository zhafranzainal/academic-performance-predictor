<?php

namespace Database\Factories;

use App\Models\Mother;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class MotherFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Mother::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => \App\Models\User::factory(),
            'highest_qualification_id' => \App\Models\HighestQualification::factory(),
            'occupation_id' => \App\Models\Occupation::factory(),
        ];
    }
}
