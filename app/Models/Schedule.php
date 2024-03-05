<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Schedule extends Model
{
    use HasFactory;
    protected $fillable = [
        'start_time','ending_time','course_category_id',
    ];
    public function category(): BelongsTo
    {
        return $this->belongsTo(CourseCategory::class,'course_category_id');
    }
}
