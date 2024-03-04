<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;



class Course extends Model
{
    use HasFactory;
    protected $fillable = [
        'course_name','course_fee','course_category_id','course_duration','description','image'
    ];
    public function category(): BelongsTo
    {
        return $this->belongsTo(CourseCategory::class,'course_category_id');

    }

   
  

    
    
}

