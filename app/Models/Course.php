<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Course extends Model
{
    use HasFactory;
    protected $fillable = [
        'course_name','course_fee','course_category_id','course_duration','description','image','video'
    ];
    public function category(): BelongsTo
    {
        return $this->belongsTo(CourseCategory::class,'course_category_id');
    }
    public function instructor(): HasMany
    {
        return $this->hasMany(Instructor::class);
    }

   
  

    
    
}

