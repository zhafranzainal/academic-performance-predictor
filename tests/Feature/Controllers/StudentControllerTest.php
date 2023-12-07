<?php

namespace Tests\Feature\Controllers;

use App\Models\User;
use App\Models\Student;

use App\Models\Course;
use App\Models\Father;
use App\Models\Mother;
use App\Models\HighestQualification;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Arr;
use Nnjeim\World\Models\Country;

class StudentControllerTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    protected function setUp(): void
    {
        parent::setUp();

        $this->actingAs(
            User::factory()->create(['email' => 'admin@admin.com'])
        );

        $this->withoutExceptionHandling();
    }

    /**
     * @test
     */
    public function it_displays_index_view_with_students(): void
    {
        $students = Student::factory()
            ->count(5)
            ->create();

        $response = $this->get(route('students.index'));

        $response
            ->assertOk()
            ->assertViewIs('app.students.index')
            ->assertViewHas('students');
    }

    /**
     * @test
     */
    public function it_displays_create_view_for_student(): void
    {
        $response = $this->get(route('students.create'));

        $response->assertOk()->assertViewIs('app.students.create');
    }

    /**
     * @test
     */
    public function it_stores_the_student(): void
    {
        $data = Student::factory()
            ->make()
            ->toArray();

        $response = $this->post(route('students.store'), $data);

        $this->assertDatabaseHas('students', $data);

        $student = Student::latest('id')->first();

        $response->assertRedirect(route('students.edit', $student));
    }

    /**
     * @test
     */
    public function it_displays_show_view_for_student(): void
    {
        $student = Student::factory()->create();

        $response = $this->get(route('students.show', $student));

        $response
            ->assertOk()
            ->assertViewIs('app.students.show')
            ->assertViewHas('student');
    }

    /**
     * @test
     */
    public function it_displays_edit_view_for_student(): void
    {
        $student = Student::factory()->create();

        $response = $this->get(route('students.edit', $student));

        $response
            ->assertOk()
            ->assertViewIs('app.students.edit')
            ->assertViewHas('student');
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

        $response = $this->put(route('students.update', $student), $data);

        $data['id'] = $student->id;

        $this->assertDatabaseHas('students', $data);

        $response->assertRedirect(route('students.edit', $student));
    }

    /**
     * @test
     */
    public function it_deletes_the_student(): void
    {
        $student = Student::factory()->create();

        $response = $this->delete(route('students.destroy', $student));

        $response->assertRedirect(route('students.index'));

        $this->assertSoftDeleted($student);
    }
}
