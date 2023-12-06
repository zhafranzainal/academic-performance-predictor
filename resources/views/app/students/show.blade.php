<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            @lang('crud.students.show_title')
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-partials.card>
                <x-slot name="title">
                    <a href="{{ route('students.index') }}" class="mr-4"
                        ><i class="mr-1 icon ion-md-arrow-back"></i
                    ></a>
                </x-slot>

                <div class="mt-4 px-4">
                    <div class="mb-4">
                        <h5 class="font-medium text-gray-700">
                            @lang('crud.students.inputs.user_id')
                        </h5>
                        <span>{{ optional($student->user)->name ?? '-' }}</span>
                    </div>
                    <div class="mb-4">
                        <h5 class="font-medium text-gray-700">
                            @lang('crud.students.inputs.highest_qualification_id')
                        </h5>
                        <span
                            >{{ optional($student->highestQualification)->name
                            ?? '-' }}</span
                        >
                    </div>
                    <div class="mb-4">
                        <h5 class="font-medium text-gray-700">
                            @lang('crud.students.inputs.nationality_id')
                        </h5>
                        <span
                            >{{ optional($student->nationality)->name ?? '-'
                            }}</span
                        >
                    </div>
                    <div class="mb-4">
                        <h5 class="font-medium text-gray-700">
                            @lang('crud.students.inputs.course_id')
                        </h5>
                        <span
                            >{{ optional($student->course)->name ?? '-' }}</span
                        >
                    </div>
                    <div class="mb-4">
                        <h5 class="font-medium text-gray-700">
                            @lang('crud.students.inputs.father_id')
                        </h5>
                        <span>{{ optional($student->father)->id ?? '-' }}</span>
                    </div>
                    <div class="mb-4">
                        <h5 class="font-medium text-gray-700">
                            @lang('crud.students.inputs.mother_id')
                        </h5>
                        <span>{{ optional($student->mother)->id ?? '-' }}</span>
                    </div>
                    <div class="mb-4">
                        <h5 class="font-medium text-gray-700">
                            @lang('crud.students.inputs.gender')
                        </h5>
                        <span>{{ $student->gender ?? '-' }}</span>
                    </div>
                    <div class="mb-4">
                        <h5 class="font-medium text-gray-700">
                            @lang('crud.students.inputs.enrolled_age')
                        </h5>
                        <span>{{ $student->enrolled_age ?? '-' }}</span>
                    </div>
                    <div class="mb-4">
                        <h5 class="font-medium text-gray-700">
                            @lang('crud.students.inputs.marital_status')
                        </h5>
                        <span>{{ $student->marital_status ?? '-' }}</span>
                    </div>
                    <div class="mb-4">
                        <h5 class="font-medium text-gray-700">
                            @lang('crud.students.inputs.is_international')
                        </h5>
                        <span>{{ $student->is_international ?? '-' }}</span>
                    </div>
                    <div class="mb-4">
                        <h5 class="font-medium text-gray-700">
                            @lang('crud.students.inputs.is_scholarship_holder')
                        </h5>
                        <span
                            >{{ $student->is_scholarship_holder ?? '-' }}</span
                        >
                    </div>
                    <div class="mb-4">
                        <h5 class="font-medium text-gray-700">
                            @lang('crud.students.inputs.is_debtor')
                        </h5>
                        <span>{{ $student->is_debtor ?? '-' }}</span>
                    </div>
                    <div class="mb-4">
                        <h5 class="font-medium text-gray-700">
                            @lang('crud.students.inputs.is_displaced')
                        </h5>
                        <span>{{ $student->is_displaced ?? '-' }}</span>
                    </div>
                    <div class="mb-4">
                        <h5 class="font-medium text-gray-700">
                            @lang('crud.students.inputs.has_educational_special_needs')
                        </h5>
                        <span
                            >{{ $student->has_educational_special_needs ?? '-'
                            }}</span
                        >
                    </div>
                    <div class="mb-4">
                        <h5 class="font-medium text-gray-700">
                            @lang('crud.students.inputs.taken_credit')
                        </h5>
                        <span>{{ $student->taken_credit ?? '-' }}</span>
                    </div>
                    <div class="mb-4">
                        <h5 class="font-medium text-gray-700">
                            @lang('crud.students.inputs.earned_credit')
                        </h5>
                        <span>{{ $student->earned_credit ?? '-' }}</span>
                    </div>
                    <div class="mb-4">
                        <h5 class="font-medium text-gray-700">
                            @lang('crud.students.inputs.cgpa')
                        </h5>
                        <span>{{ $student->cgpa ?? '-' }}</span>
                    </div>
                    <div class="mb-4">
                        <h5 class="font-medium text-gray-700">
                            @lang('crud.students.inputs.enrollment_status')
                        </h5>
                        <span>{{ $student->enrollment_status ?? '-' }}</span>
                    </div>
                </div>

                <div class="mt-10">
                    <a href="{{ route('students.index') }}" class="button">
                        <i class="mr-1 icon ion-md-return-left"></i>
                        @lang('crud.common.back')
                    </a>

                    @can('create', App\Models\Student::class)
                    <a href="{{ route('students.create') }}" class="button">
                        <i class="mr-1 icon ion-md-add"></i>
                        @lang('crud.common.create')
                    </a>
                    @endcan
                </div>
            </x-partials.card>
        </div>
    </div>
</x-app-layout>
