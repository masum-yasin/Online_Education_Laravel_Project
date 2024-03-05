<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function create($id){
        $courses = Course::find($id);
        return view('frontend.order.orderDetails',compact('courses'));
    }
}
