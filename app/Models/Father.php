<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Father extends Model
{
    use HasFactory;
    use Searchable;
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'highest_qualification_id',
        'occupation_id',
    ];

    protected $searchableFields = ['*'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function highestQualification()
    {
        return $this->belongsTo(HighestQualification::class);
    }

    public function students()
    {
        return $this->hasMany(Student::class);
    }

    public function occupation()
    {
        return $this->belongsTo(Occupation::class);
    }
}
