<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;





class Lesson extends Model
{
    use HasFactory;
    protected $fillable = [
        'lesson_name','description','course_categories_id'
    ];
    public function lesson(): BelongsTo
    {
        return $this->belongsTo(CourseCategory::class, 'course_categories_id');
    }
    public function topic(): HasMany
    {
        return $this->hasMany(Topic::class);
    }
}
