<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'user_id' => ['required', 'exists:users,id'],
            'highest_qualification_id' => [
                'required',
                'exists:highest_qualifications,id',
            ],
            'country_id' => ['required', 'exists:countries,id'],
            'course_id' => ['required', 'exists:courses,id'],
            'father_id' => ['required', 'exists:fathers,id'],
            'mother_id' => ['required', 'exists:mothers,id'],
            'gender' => ['required', 'in:male,female'],
            'enrolled_age' => ['required', 'max:255'],
            'marital_status' => [
                'required',
                'in:single,married,widower,divorced,de facto union,judicial separation',
            ],
            'is_international' => ['required', 'boolean'],
            'is_scholarship_holder' => ['required', 'boolean'],
            'is_debtor' => ['required', 'boolean'],
            'is_displaced' => ['required', 'boolean'],
            'has_educational_special_needs' => ['required', 'boolean'],
            'taken_credit' => ['required', 'max:255'],
            'earned_credit' => ['required', 'max:255'],
            'cgpa' => ['required', 'numeric'],
            'enrollment_status' => ['required', 'in:dropout,enrolled,graduate'],
        ];
    }
}
