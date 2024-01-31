<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseCategory;
use Illuminate\Http\Request;



class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['courses']=Course::all();
        return view('backend.course.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['categories']=CourseCategory::all();
        return view('backend.course.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
           'course_name'=>'required|min:4',
            'course_fee'=>'required|min:4',
            'image'=>'mimes:jpg,jpeg,png',
            'course_duration'=>'required|min:4',
            'desc'=>'required|min:4',
        ]);

        $filename = time(). "." . $request->image->extension();

       if($validate){
        $data = [
            'image'=>$filename,
            'course_name'=>$request->course_name,
            'course_fee'=>$request->course_fee,
            'course_category_id'=>$request->course_category,
            'course_duration'=>$request->course_duration,
            'description'=>$request->desc,
          ];
       }
      
     
      print_r($data);
    if(Course::create($data)){
        $request->image->move('uploads/',$filename);
        return redirect('course')->with('msg','Course Sussessfully Store');
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
        $courses= Course::find($id);
       $data['course']=$courses;
       return view('backend.course.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $courses = Course::find($id);
        $validated = $request->validate([
            'course_name' => 'required|min:5',
            'course_fee' => 'required|min:10',
            
        ]);
        if($validated){
            $data =[
                'course_name'=>$request->course_name,
                'course_fee'=>$request->course_fee,
                'course_duration'=>$request->course_duration];


                $courses->update($data);
                return redirect('course')->with('msg','Update Successfull Course');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Course::find($id);
        if($category->delete()){
            return redirect('course')->with('msg','Delete Successfully');
        }
    }
}
