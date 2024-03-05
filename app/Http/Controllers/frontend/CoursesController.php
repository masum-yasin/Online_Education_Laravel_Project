<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function create(){
        $courses = Course::get();
        return view('frontend.course',compact('courses'));
    }
}
