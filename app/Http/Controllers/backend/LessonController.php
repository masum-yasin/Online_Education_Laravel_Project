<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\CourseCategory;
use App\Models\Lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = CourseCategory::get();
        return view('backend.lesson.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'lesson_name'=>'required|min:2',
            'desc'=>'required|min:4',
           
        ]);
        if($validate){
            $data = [
                'lesson_name'=>$request->lesson_name,
                'description'=>$request->desc,
                'course_categories_id'=>$request->course_category,
            ];
         $model = new Lesson();
         if($model->insert($data)){
            return redirect()->route('lesson.index')->with('msg','Insert Successfully');
         }
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
