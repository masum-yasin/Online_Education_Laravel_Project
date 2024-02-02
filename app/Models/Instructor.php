<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;



class Instructor extends Model
{
    use HasFactory;
    protected $fillable = [
        'instructor_name','email','phone','photo','course_categories_id','lessons_id','topics_id','title','description'
    ];
    public function category(): BelongsTo
    {
        return $this->belongsTo(CourseCategory::class,'course_categories_id');
    }
    public function lesson(): BelongsTo
    {
        return $this->belongsTo(Lesson::class,'lessons_id');
    }
    public function topic(): BelongsTo
    {
        return $this->belongsTo(Topic::class,'topics_id');
    }
}
