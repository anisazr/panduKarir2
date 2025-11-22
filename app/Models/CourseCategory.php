<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\softDeletes;

class CourseCategory extends Model
{
    protected $fillable = [
        'name',
        'desc'
    ];

    public function courses()
    {
        return $this->hasMany(Course::class, 'category_id');
    }
    //
}
