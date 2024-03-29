<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;



class Topic extends Model
{
    use HasFactory;
    protected $fillable = [
        'topic_title','description','course_categories_id','lessons_id'
    ];
    public function category(): BelongsTo
    {
        return $this->belongsTo(CourseCategory::class, 'course_categories_id');
    }
    public function lesson(): BelongsTo
    {
        return $this->belongsTo(Lesson::class,'lessons_id');
    }
    public function instructor(): HasMany
    {
        return $this->hasMany(Instructor::class);
    }
}
