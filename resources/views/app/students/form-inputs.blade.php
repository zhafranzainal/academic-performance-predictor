@php $editing = isset($student) @endphp

<div class="flex flex-wrap">
    <x-inputs.group class="w-full">
        <x-inputs.select name="user_id" label="User" required>
            @php $selected = old('user_id', ($editing ? $student->user_id : '')) @endphp
            <option disabled {{ empty($selected) ? 'selected' : '' }}>Please select the User</option>
            @foreach($users as $value => $label)
            <option value="{{ $value }}" {{ $selected == $value ? 'selected' : '' }} >{{ $label }}</option>
            @endforeach
        </x-inputs.select>
    </x-inputs.group>

    <x-inputs.group class="w-full">
        <x-inputs.select
            name="highest_qualification_id"
            label="Highest Qualification"
            required
        >
            @php $selected = old('highest_qualification_id', ($editing ? $student->highest_qualification_id : '')) @endphp
            <option disabled {{ empty($selected) ? 'selected' : '' }}>Please select the Highest Qualification</option>
            @foreach($highestQualifications as $value => $label)
            <option value="{{ $value }}" {{ $selected == $value ? 'selected' : '' }} >{{ $label }}</option>
            @endforeach
        </x-inputs.select>
    </x-inputs.group>

    <x-inputs.group class="w-full">
        <x-inputs.select name="nationality_id" label="Nationality" required>
            @php $selected = old('nationality_id', ($editing ? $student->nationality_id : '')) @endphp
            <option disabled {{ empty($selected) ? 'selected' : '' }}>Please select the Nationality</option>
            @foreach($nationalities as $value => $label)
            <option value="{{ $value }}" {{ $selected == $value ? 'selected' : '' }} >{{ $label }}</option>
            @endforeach
        </x-inputs.select>
    </x-inputs.group>

    <x-inputs.group class="w-full">
        <x-inputs.select name="course_id" label="Course" required>
            @php $selected = old('course_id', ($editing ? $student->course_id : '')) @endphp
            <option disabled {{ empty($selected) ? 'selected' : '' }}>Please select the Course</option>
            @foreach($courses as $value => $label)
            <option value="{{ $value }}" {{ $selected == $value ? 'selected' : '' }} >{{ $label }}</option>
            @endforeach
        </x-inputs.select>
    </x-inputs.group>

    <x-inputs.group class="w-full">
        <x-inputs.select name="father_id" label="Father" required>
            @php $selected = old('father_id', ($editing ? $student->father_id : '')) @endphp
            <option disabled {{ empty($selected) ? 'selected' : '' }}>Please select the Father</option>
            @foreach($fathers as $value => $label)
            <option value="{{ $value }}" {{ $selected == $value ? 'selected' : '' }} >{{ $label }}</option>
            @endforeach
        </x-inputs.select>
    </x-inputs.group>

    <x-inputs.group class="w-full">
        <x-inputs.select name="mother_id" label="Mother" required>
            @php $selected = old('mother_id', ($editing ? $student->mother_id : '')) @endphp
            <option disabled {{ empty($selected) ? 'selected' : '' }}>Please select the Mother</option>
            @foreach($mothers as $value => $label)
            <option value="{{ $value }}" {{ $selected == $value ? 'selected' : '' }} >{{ $label }}</option>
            @endforeach
        </x-inputs.select>
    </x-inputs.group>

    <x-inputs.group class="w-full">
        <x-inputs.select name="gender" label="Gender">
            @php $selected = old('gender', ($editing ? $student->gender : '')) @endphp
            <option value="male" {{ $selected == 'male' ? 'selected' : '' }} >Male</option>
            <option value="female" {{ $selected == 'female' ? 'selected' : '' }} >Female</option>
        </x-inputs.select>
    </x-inputs.group>

    <x-inputs.group class="w-full">
        <x-inputs.text
            name="enrolled_age"
            label="Enrolled Age"
            :value="old('enrolled_age', ($editing ? $student->enrolled_age : ''))"
            maxlength="255"
            placeholder="Enrolled Age"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="w-full">
        <x-inputs.select name="marital_status" label="Marital Status">
            @php $selected = old('marital_status', ($editing ? $student->marital_status : '')) @endphp
            <option value="single" {{ $selected == 'single' ? 'selected' : '' }} >Single</option>
            <option value="married" {{ $selected == 'married' ? 'selected' : '' }} >Married</option>
            <option value="widower" {{ $selected == 'widower' ? 'selected' : '' }} >Widower</option>
            <option value="divorced" {{ $selected == 'divorced' ? 'selected' : '' }} >Divorced</option>
            <option value="de facto union" {{ $selected == 'de facto union' ? 'selected' : '' }} >De facto union</option>
            <option value="judicial separation" {{ $selected == 'judicial separation' ? 'selected' : '' }} >Judicial separation</option>
        </x-inputs.select>
    </x-inputs.group>

    <x-inputs.group class="w-full">
        <x-inputs.checkbox
            name="is_international"
            label="Is International"
            :checked="old('is_international', ($editing ? $student->is_international : 0))"
        ></x-inputs.checkbox>
    </x-inputs.group>

    <x-inputs.group class="w-full">
        <x-inputs.checkbox
            name="is_scholarship_holder"
            label="Is Scholarship Holder"
            :checked="old('is_scholarship_holder', ($editing ? $student->is_scholarship_holder : 0))"
        ></x-inputs.checkbox>
    </x-inputs.group>

    <x-inputs.group class="w-full">
        <x-inputs.checkbox
            name="is_debtor"
            label="Is Debtor"
            :checked="old('is_debtor', ($editing ? $student->is_debtor : 0))"
        ></x-inputs.checkbox>
    </x-inputs.group>

    <x-inputs.group class="w-full">
        <x-inputs.checkbox
            name="is_displaced"
            label="Is Displaced"
            :checked="old('is_displaced', ($editing ? $student->is_displaced : 0))"
        ></x-inputs.checkbox>
    </x-inputs.group>

    <x-inputs.group class="w-full">
        <x-inputs.checkbox
            name="has_educational_special_needs"
            label="Has Educational Special Needs"
            :checked="old('has_educational_special_needs', ($editing ? $student->has_educational_special_needs : 0))"
        ></x-inputs.checkbox>
    </x-inputs.group>

    <x-inputs.group class="w-full">
        <x-inputs.text
            name="taken_credit"
            label="Taken Credit"
            :value="old('taken_credit', ($editing ? $student->taken_credit : ''))"
            maxlength="255"
            placeholder="Taken Credit"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="w-full">
        <x-inputs.text
            name="earned_credit"
            label="Earned Credit"
            :value="old('earned_credit', ($editing ? $student->earned_credit : ''))"
            maxlength="255"
            placeholder="Earned Credit"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="w-full">
        <x-inputs.number
            name="cgpa"
            label="Cgpa"
            :value="old('cgpa', ($editing ? $student->cgpa : ''))"
            max="255"
            step="0.01"
            placeholder="Cgpa"
            required
        ></x-inputs.number>
    </x-inputs.group>

    <x-inputs.group class="w-full">
        <x-inputs.select name="enrollment_status" label="Enrollment Status">
            @php $selected = old('enrollment_status', ($editing ? $student->enrollment_status : '')) @endphp
            <option value="dropout" {{ $selected == 'dropout' ? 'selected' : '' }} >Dropout</option>
            <option value="enrolled" {{ $selected == 'enrolled' ? 'selected' : '' }} >Enrolled</option>
            <option value="graduate" {{ $selected == 'graduate' ? 'selected' : '' }} >Graduate</option>
        </x-inputs.select>
    </x-inputs.group>
</div>
