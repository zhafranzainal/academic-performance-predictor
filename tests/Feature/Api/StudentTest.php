<?php

namespace Tests\Feature\Api;

use App\Models\User;
use App\Models\Student;

use App\Models\Course;
use App\Models\Father;
use App\Models\Mother;
use App\Models\HighestQualification;

use Tests\TestCase;
use Laravel\Sanctum\Sanctum;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Arr;
use Nnjeim\World\Models\Country;

class StudentTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    protected function setUp(): void
    {
        parent::setUp();

        $user = User::factory()->create(['email' => 'admin@admin.com']);

        Sanctum::actingAs($user, [], 'web');

        $this->withoutExceptionHandling();
    }

    /**
     * @test
     */
    public function it_gets_students_list(): void
    {
        $students = Student::factory()
            ->count(5)
            ->create();

        $response = $this->getJson(route('api.students.index'));

        $response->assertOk()->assertSee($students[0]->id);
    }

    /**
     * @test
     */
    public function it_stores_the_student(): void
    {
        $data = Student::factory()
            ->make()
            ->toArray();

        $response = $this->postJson(route('api.students.store'), $data);

        $this->assertDatabaseHas('students', $data);

        $response->assertStatus(201)->assertJsonFragment($data);
    }

    /**
     * @test
     */
    public function it_updates_the_student(): void
    {
        $student = Student::factory()->create();

        $user = User::factory()->create();
        $course = Course::factory()->create();
        $country = Country::factory()->create();
        $highestQualification = HighestQualification::factory()->create();
        $father = Father::factory()->create();
        $mother = Mother::factory()->create();

        $data = [
            'user_id' => $this->faker->randomNumber(),
            'highest_qualification_id' => $this->faker->randomNumber(),
            'country_id' => $this->faker->randomNumber(),
            'course_id' => $this->faker->randomNumber(),
            'father_id' => $this->faker->randomNumber(),
            'mother_id' => $this->faker->randomNumber(),
            'gender' => Arr::random(['male', 'female']),
            'enrolled_age' => $this->faker->numberBetween(0, 127),
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
            'taken_credit' => $this->faker->numberBetween(0, 127),
            'earned_credit' => $this->faker->numberBetween(0, 127),
            'cgpa' => $this->faker->randomNumber(2),
            'enrollment_status' => Arr::random([
                'dropout',
                'enrolled',
                'graduate',
            ]),
            'user_id' => $user->id,
            'course_id' => $course->id,
            'country_id' => $country->id,
            'highest_qualification_id' => $highestQualification->id,
            'father_id' => $father->id,
            'mother_id' => $mother->id,
        ];

        $response = $this->putJson(
            route('api.students.update', $student),
            $data
        );

        $data['id'] = $student->id;

        $this->assertDatabaseHas('students', $data);

        $response->assertOk()->assertJsonFragment($data);
    }

    /**
     * @test
     */
    public function it_deletes_the_student(): void
    {
        $student = Student::factory()->create();

        $response = $this->deleteJson(route('api.students.destroy', $student));

        $this->assertSoftDeleted($student);

        $response->assertNoContent();
    }
}
