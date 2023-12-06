<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\HighestQualification;
use Illuminate\Database\Eloquent\Factories\Factory;

class HighestQualificationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = HighestQualification::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
        ];
    }
}
