<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\CourseCategory;
use App\Models\StudentCourse;
use Illuminate\Http\Request;


class SCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['scourses']=StudentCourse::all();
        return view('backend.scourse.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $scourse['categories'] = CourseCategory::all();
        return view('backend.scourse.create',$scourse);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $data = [
        'student_name'=> $request->student_name,
        'phone'=> $request->phone,
        'email'=> $request->email,
        'local_city'=> $request->city,
        'course_categories_id'=> $request->scourse_category,
        'course_duration'=> $request->duration,
        'Lac_description'=> $request->desc,
       ];
    //    print_r($data);
       if(StudentCourse::insert($data));
       return redirect('scourse')->with('msg','Student Course Successfully');
    }
   
   
    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $scourse['categories'] =CourseCategory::all();
       $data['single']= $scourse;
       return view('backend.scourse.edit',$data);
    }

    
    public function update(Request $request, string $id)
    {
        $scourse = StudentCourse::find($id);
        // $validated = $request->validate([
        //     'student_name' => 'required|min:5',
        //     'phone' => 'required|min:5',
        //     'city' => 'required|min:3',
           
        // ]);
        $validated = $request->validate([
            'student_name' => 'required|min:5',
            'phone' => 'required|min:5',
            'city' => 'required|min:3',
        ]);
        if($validated){
            $data=[
                'student_name'=>$request->student_name,
                'phone'=>$request->phone,
                'email'=>$request->email,
                'local_city'=>$request->city,
                'course_categories_id'=>$request->course_category,
                'course_duration'=>$request->duration,
                'Lac_description'=>$request->desc,
            ];
            $scourse->update($data);
            return redirect('scourse')->with('msg','Update Successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $scoruse = StudentCourse::find($id);
        if($scoruse->delete()){
            return redirect('scourse')->with('msg','Student Course Delete Successfully');
        }
    }
}
