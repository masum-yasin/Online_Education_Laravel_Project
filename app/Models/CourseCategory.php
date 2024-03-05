<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;



class CourseCategory extends Model
{
    use HasFactory;
    protected $fillable = ['name'];
    public function studentcourse(): HasMany
    {
        return $this->hasMany(StudentCourse::class);
    }
    public function course(): HasMany
    {
        return $this->hasMany(Course::class);
    }
    public function lesson(): HasMany
    {
        return $this->hasMany(Lesson::class);
    }
    public function topic(): HasMany
    {
        return $this->hasMany(Topic::class);
    }
    public function instructor(): HasMany
    {
        return $this->hasMany(Instructor::class);
    }
    public function schedule(): HasMany
    {
        return $this->hasMany(Schedule::class);
    }
}
