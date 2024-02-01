<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\CourseCategory;
use App\Models\Lesson;
use App\Models\Topic;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $topics = Topic::get();
        return view('backend.topic.index',compact('topics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = CourseCategory::get();
        $lessons = Lesson::get();
        return view('backend.topic.create',compact('categories','lessons'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      $validate = $request->validate([
        'title'=>'required|min:4',
        'desc'=>'required|min:4',
      ]);
      if($validate){
        $data = [
            'topic_title'=>$request->title,
            'description'=>$request->desc,
            'course_categories_id'=>$request->course_category,
            'lessons_id'=>$request->lesson,
        ];
        $model = new Topic();
        if($model->insert($data));
        return redirect()->route('topic.index')->with('msg','Topic Inserted Successfully');
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
        $categories = CourseCategory::get();
        $lessons = Lesson::get();
        $topics = Topic::find();
        return view('backend.topic.edit',compact('categories','lessons','topics'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $topics  = Topic::find($id);
        $validate = $request->validate([
            'title'=>'required|min:4',
            'desc'=>'required|min:4',
          ]);
          if($validate){
            $data = [
                'topic_title'=>$request->title,
                'description'=>$request->desc,
                'course_categories_id'=>$request->course_category,
                'lessons_id'=>$request->lesson,
            ];
           if($topics->update($data));
            return redirect()->route('topic.index')->with('msg','Topic Update Successfully');
          }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $topic = Topic::find($id);
        if($topic->delete());
        return redirect()->route('topic.index')->with('msg','Topics Delete Successfully');
    }
}
