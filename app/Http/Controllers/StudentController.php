<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Course;
use App\Models\Father;
use App\Models\Mother;
use App\Models\Student;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\HighestQualification;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\StudentStoreRequest;
use App\Http\Requests\StudentUpdateRequest;
use Nnjeim\World\Models\Country;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $this->authorize('view-any', Student::class);

        $search = $request->get('search', '');

        $students = Student::search($search)->paginate(25)->withQueryString();

        return view('app.students.index', compact('students', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request): View
    {
        $this->authorize('create', Student::class);

        $users = User::pluck('name', 'id');
        $highestQualifications = HighestQualification::pluck('name', 'id');
        $countries = Country::pluck('name', 'id');
        $courses = Course::pluck('name', 'id');
        $fathers = Father::pluck('id', 'id');
        $mothers = Mother::pluck('id', 'id');

        return view(
            'app.students.create',
            compact(
                'users',
                'highestQualifications',
                'countries',
                'courses',
                'fathers',
                'mothers'
            )
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StudentStoreRequest $request): RedirectResponse
    {
        $this->authorize('create', Student::class);

        $validated = $request->validated();

        $student = Student::create($validated);

        return redirect()
            ->route('students.edit', $student)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, Student $student): View
    {
        $this->authorize('view', $student);

        return view('app.students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, Student $student): View
    {
        $this->authorize('update', $student);

        $users = User::pluck('name', 'id');
        $highestQualifications = HighestQualification::pluck('name', 'id');
        $countries = Country::pluck('name', 'id');
        $courses = Course::pluck('name', 'id');
        $fathers = Father::pluck('id', 'id');
        $mothers = Mother::pluck('id', 'id');

        return view(
            'app.students.edit',
            compact(
                'student',
                'users',
                'highestQualifications',
                'countries',
                'courses',
                'fathers',
                'mothers'
            )
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(
        StudentUpdateRequest $request,
        Student $student
    ): RedirectResponse {
        $this->authorize('update', $student);

        $validated = $request->validated();

        $student->update($validated);

        return redirect()
            ->route('students.edit', $student)
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(
        Request $request,
        Student $student
    ): RedirectResponse {
        $this->authorize('delete', $student);

        $student->delete();

        return redirect()
            ->route('students.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
