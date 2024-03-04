<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\CourseCategory;
use App\Models\Instructor;
use App\Models\Lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lessons = Lesson::get();
        return view('backend.lesson.index',compact('lessons'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $instructors = Instructor::get();
        $categories = CourseCategory::get();
        return view('backend.lesson.create',compact('categories','instructors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'lesson_number'=>'required',
            'desc'=>'required|min:4',
           
        ]);
        if($validate){
            $data = [
                'lesson_number'=>$request->lesson_number,
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
    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categories = CourseCategory::get();
        $lessons = Lesson::find($id);
        return view('backend.lesson.edit',compact('categories','lessons'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $lessons = Lesson::find($id);
        $validate = $request->validate([
            'lesson_number'=>'required',
            'desc'=>'required|min:4',
           
        ]);
        if($validate){
            $data = [
                'lesson_number'=>$request->lesson_number,
                'description'=>$request->desc,
                'course_categories_id'=>$request->course_category,
            ];
       $lessons->update($data);
       return redirect()->route('lesson.index')->with('msg','Lesson Update Successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $lesson = Lesson::find($id);
        if($lesson->delete());
        return redirect()->route('lesson.index')->with('msg','Lesson Delete Successfully');
    }
}
