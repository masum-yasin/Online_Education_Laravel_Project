<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;



class StudentCourse extends Model
{
    use HasFactory;
    protected $fillable =['student_name','phone','email','local_city','course_duration','course_categories_id'];


    public function category(): BelongsTo
    {
        return $this->belongsTo(CourseCategory::class, 'course_categories_id');
    }
}
