<?php

namespace Database\Factories;

use App\Models\HighestQualification;
use App\Models\Mother;
use App\Models\Occupation;
use App\Models\User;
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
            'user_id' => User::factory(),
            'highest_qualification_id' => HighestQualification::inRandomOrder()->pluck('id')->first(),
            'occupation_id' => Occupation::inRandomOrder()->pluck('id')->first(),
        ];
    }
}
