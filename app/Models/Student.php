<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Nnjeim\World\Models\Country;

class Student extends Model
{
    use HasFactory;
    use Searchable;
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'highest_qualification_id',
        'country_id',
        'course_id',
        'father_id',
        'mother_id',
        'gender',
        'enrolled_age',
        'marital_status',
        'is_international',
        'is_scholarship_holder',
        'is_debtor',
        'is_displaced',
        'has_educational_special_needs',
        'taken_credit',
        'earned_credit',
        'cgpa',
        'enrollment_status',
    ];

    protected $searchableFields = ['*'];

    protected $casts = [
        'is_international' => 'boolean',
        'is_scholarship_holder' => 'boolean',
        'is_debtor' => 'boolean',
        'is_displaced' => 'boolean',
        'has_educational_special_needs' => 'boolean',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function highestQualification()
    {
        return $this->belongsTo(HighestQualification::class);
    }

    public function father()
    {
        return $this->belongsTo(Father::class);
    }

    public function mother()
    {
        return $this->belongsTo(Mother::class);
    }
}
