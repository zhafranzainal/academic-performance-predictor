<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\Father;
use App\Models\HighestQualification;
use App\Models\Mother;
use App\Models\Nationality;
use App\Models\Student;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

class StudentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Student::class;

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
            'nationality_id' => Nationality::inRandomOrder()->pluck('id')->first(),
            'course_id' => Course::inRandomOrder()->pluck('id')->first(),
            'father_id' => Father::inRandomOrder()->pluck('id')->first(),
            'mother_id' => Mother::inRandomOrder()->pluck('id')->first(),
            'gender' => Arr::random(['male', 'female']),
            'enrolled_age' => $this->faker->numberBetween(19, 30),
            'marital_status' => Arr::random([
                'single',
                'married',
                'widower',
                'divorced',
                'de facto union',
                'judicial separation',
            ]),
            'is_international' => $this->faker->boolean(),
            'is_scholarship_holder' => $this->faker->boolean(),
            'is_debtor' => $this->faker->boolean(),
            'is_displaced' => $this->faker->boolean(),
            'has_educational_special_needs' => $this->faker->boolean(),
            'taken_credit' => $this->faker->numberBetween(0, 20),
            'earned_credit' => $this->faker->numberBetween(0, 20),
            'cgpa' => $this->faker->randomFloat(2, 0, 4),
            'enrollment_status' => Arr::random([
                'dropout',
                'enrolled',
                'graduate',
            ]),
        ];
    }
}
