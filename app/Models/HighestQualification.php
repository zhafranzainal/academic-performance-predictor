<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HighestQualification extends Model
{
    use HasFactory;
    use Searchable;
    use SoftDeletes;

    protected $fillable = ['name'];

    protected $searchableFields = ['*'];

    protected $table = 'highest_qualifications';

    public function mothers()
    {
        return $this->hasMany(Mother::class);
    }

    public function fathers()
    {
        return $this->hasMany(Father::class);
    }

    public function students()
    {
        return $this->hasMany(Student::class);
    }
}
