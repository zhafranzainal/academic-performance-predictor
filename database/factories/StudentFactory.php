<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

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
            'gender' => \Arr::random(['male', 'female']),
            'enrolled_age' => $this->faker->numberBetween(0, 127),
            'marital_status' => \Arr::random([
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
            'taken_credit' => $this->faker->numberBetween(0, 127),
            'earned_credit' => $this->faker->numberBetween(0, 127),
            'cgpa' => $this->faker->randomNumber(2),
            'enrollment_status' => \Arr::random([
                'dropout',
                'enrolled',
                'graduate',
            ]),
            'user_id' => \App\Models\User::factory(),
            'course_id' => \App\Models\Course::factory(),
            'nationality_id' => \App\Models\Nationality::factory(),
            'highest_qualification_id' => \App\Models\HighestQualification::factory(),
            'father_id' => \App\Models\Father::factory(),
            'mother_id' => \App\Models\Mother::factory(),
        ];
    }
}
