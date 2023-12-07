<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Students List
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <x-partials.card>

                <div class="mb-5 mt-4">
                    <div class="flex flex-wrap justify-between">

                        <div class="md:w-1/2">
                            <form>
                                <div class="flex items-center w-full">

                                    <x-inputs.text name="search" value="{{ $search ?? '' }}"
                                        placeholder="{{ __('Search...') }}" autocomplete="off">
                                    </x-inputs.text>

                                    <div class="ml-1">
                                        <button type="submit" class="button button-primary">
                                            <i class="icon ion-md-search"></i>
                                        </button>
                                    </div>

                                </div>
                            </form>
                        </div>

                        <div class="md:w-1/2 text-right">
                            @can('create', App\Models\Student::class)
                                <a href="{{ route('students.create') }}" class="button button-primary">
                                    <i class="mr-1 icon ion-md-add"></i>
                                    @lang('Create')
                                </a>
                            @endcan
                        </div>

                    </div>
                </div>

                <div class="block w-full overflow-auto scrolling-touch">
                    <table class="w-full max-w-full mb-4 bg-transparent">

                        <thead class="text-gray-700">
                            <tr>

                                <th class="px-4 py-3 text-left">
                                    No.
                                </th>

                                <th class="px-4 py-3 text-left">
                                    @lang('Student Name')
                                </th>

                                <th class="px-4 py-3 text-left">
                                    @lang('Father Name')
                                </th>

                                <th class="px-4 py-3 text-left">
                                    @lang('Mother Name')
                                </th>

                                <th class="px-4 py-3 text-left">
                                    @lang('Highest Qualification')
                                </th>

                                <th class="px-4 py-3 text-left">
                                    @lang('Nationality')
                                </th>

                                <th class="px-4 py-3 text-left">
                                    @lang('Course')
                                </th>

                                <th class="px-4 py-3 text-left">
                                    @lang('Gender')
                                </th>

                                <th class="px-4 py-3 text-left">
                                    @lang('Enrolled Age')
                                </th>

                                <th class="px-4 py-3 text-left">
                                    @lang('Marital Status')
                                </th>

                                <th class="px-4 py-3 text-left">
                                    @lang('International Student')
                                </th>

                                <th class="px-4 py-3 text-left">
                                    @lang('Scholarship Holder')
                                </th>

                                <th class="px-4 py-3 text-left">
                                    @lang('Debtor')
                                </th>

                                <th class="px-4 py-3 text-left">
                                    @lang('Displaced Student')
                                </th>

                                <th class="px-4 py-3 text-left">
                                    @lang('Has Educational Special Needs')
                                </th>

                                <th class="px-4 py-3 text-left">
                                    @lang('Taken Credit')
                                </th>

                                <th class="px-4 py-3 text-left">
                                    @lang('Earned Credit')
                                </th>

                                <th class="px-4 py-3 text-right">
                                    @lang('CGPA')
                                </th>

                                <th class="px-4 py-3 text-left">
                                    @lang('Enrollment Status')
                                </th>

                                <th>Actions</th>

                            </tr>
                        </thead>

                        <tbody class="text-gray-600">
                            @forelse($students as $student)
                                <tr class="hover:bg-gray-50">

                                    <td class="px-4 py-3 text-left">
                                        {{ $student->id ?? '-' }}
                                    </td>

                                    <td class="px-4 py-3 text-left">
                                        {{ optional($student->user)->name ?? '-' }}
                                    </td>

                                    <td class="px-4 py-3 text-left">
                                        {{ optional($student->father->user)->name ?? '-' }}
                                    </td>

                                    <td class="px-4 py-3 text-left">
                                        {{ optional($student->mother->user)->name ?? '-' }}
                                    </td>

                                    <td class="px-4 py-3 text-left">
                                        {{ optional($student->highestQualification)->name ?? '-' }}
                                    </td>

                                    <td class="px-4 py-3 text-left">
                                        {{ optional($student->country)->name ?? '-' }}
                                    </td>

                                    <td class="px-4 py-3 text-left">
                                        {{ optional($student->course)->name ?? '-' }}
                                    </td>

                                    <td class="px-4 py-3 text-left">
                                        {{ $student->gender ?? '-' }}
                                    </td>

                                    <td class="px-4 py-3 text-left">
                                        {{ $student->enrolled_age ?? '-' }}
                                    </td>

                                    <td class="px-4 py-3 text-left">
                                        {{ $student->marital_status ?? '-' }}
                                    </td>

                                    <td class="px-4 py-3 text-left"
                                        style="{{ $student->is_international == 1 ? 'color: green;' : 'color: red;' }}">
                                        {{ $student->is_international == 1 ? 'Yes' : 'No' }}
                                    </td>

                                    <td class="px-4 py-3 text-left"
                                        style="{{ $student->is_scholarship_holder == 1 ? 'color: green;' : 'color: red;' }}">
                                        {{ $student->is_scholarship_holder == 1 ? 'Yes' : 'No' }}
                                    </td>

                                    <td class="px-4 py-3 text-left"
                                        style="{{ $student->is_debtor == 1 ? 'color: green;' : 'color: red;' }}">
                                        {{ $student->is_debtor == 1 ? 'Yes' : 'No' }}
                                    </td>

                                    <td class="px-4 py-3 text-left"
                                        style="{{ $student->is_displaced == 1 ? 'color: green;' : 'color: red;' }}">
                                        {{ $student->is_displaced == 1 ? 'Yes' : 'No' }}
                                    </td>

                                    <td class="px-4 py-3 text-left"
                                        style="{{ $student->has_educational_special_needs == 1 ? 'color: green;' : 'color: red;' }}">
                                        {{ $student->has_educational_special_needs == 1 ? 'Yes' : 'No' }}
                                    </td>

                                    <td class="px-4 py-3 text-left">
                                        {{ $student->taken_credit ?? '-' }}
                                    </td>

                                    <td class="px-4 py-3 text-left">
                                        {{ $student->earned_credit ?? '-' }}
                                    </td>

                                    <td class="px-4 py-3 text-right">
                                        {{ $student->cgpa ?? '-' }}
                                    </td>

                                    <td class="px-4 py-3 text-left">
                                        {{ $student->enrollment_status ?? '-' }}
                                    </td>

                                    <td class="px-4 py-3 text-center" style="width: 134px;">
                                        <div role="group" aria-label="Row Actions"
                                            class="relative inline-flex align-middle">

                                            @can('update', $student)
                                                <a href="{{ route('students.edit', $student) }}" class="mr-1">
                                                    <button type="button" class="button">
                                                        <i class="icon ion-md-create"></i>
                                                    </button>
                                                </a>
                                            @endcan

                                            @can('view', $student)
                                                <a href="{{ route('students.show', $student) }}" class="mr-1">
                                                    <button type="button" class="button">
                                                        <i class="icon ion-md-eye"></i>
                                                    </button>
                                                </a>
                                            @endcan

                                            @can('delete', $student)
                                                <form action="{{ route('students.destroy', $student) }}" method="POST"
                                                    onsubmit="return confirm('{{ __('Are you sure?') }}')">
                                                    @csrf @method('DELETE')
                                                    <button type="submit" class="button">
                                                        <i class="icon ion-md-trash text-red-600"></i>
                                                    </button>
                                                </form>
                                            @endcan

                                        </div>
                                    </td>

                                </tr>
                            @empty
                                <tr>
                                    <td colspan="19">
                                        @lang('No items found')
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>

                        <tfoot>
                            <tr>
                                <td colspan="19">
                                    <div class="mt-10 px-4">
                                        {!! $students->render() !!}
                                    </div>
                                </td>
                            </tr>
                        </tfoot>

                    </table>
                </div>

            </x-partials.card>

        </div>
    </div>

</x-app-layout>
