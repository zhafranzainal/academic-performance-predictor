<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Occupation extends Model
{
    use HasFactory;
    use Searchable;
    use SoftDeletes;

    protected $fillable = ['name'];

    protected $searchableFields = ['*'];

    public function fathers()
    {
        return $this->hasMany(Father::class);
    }

    public function mothers()
    {
        return $this->hasMany(Mother::class);
    }
}
