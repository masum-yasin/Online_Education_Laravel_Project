<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseCategory;
use App\Models\Instructor;
use App\Models\Lesson;
use App\Models\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class InstructorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function login()
    {
        return view('backend.instructor.login');
    }

    public function LoginStore(Request $request)
    {
        $user = $request->all();

        // dd($user);
        if (Auth::guard('instructor')->attempt(['email' => $user['email'], 'password' => $user['password']])) {
            // echo " welcome instructor  ";
            // return view('backend.instructor.insdashboard');
            return redirect()->route('insdashboard');
        } else {
            return redirect()->back();
        }
    }



    public function Insdashboard()
    {
        return view('backend.instructor.insdashboard');
    }
    



    public function index()
    {
        $instructors = Instructor::get();
        return view('backend.instructor.index', compact('instructors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = CourseCategory::get();
        $lessons = Lesson::get();
        $topics = Topic::get();
        $courses =Course::get(); 
        return view('backend.instructor.create', compact('categories', 'lessons', 'topics','courses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'photo' => 'mimes:jpg,jpeg,png',
            'name' => 'required|min:4|max:100',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'desc' => 'required|min:4|max:500',
            'title' => 'required|min:4|max:150',
           
        ]);

        $filename = time() . "." . $request->photo->extension();

        if ($validate) {
            $data = [

                'photo' => $filename,
                'instructor_name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'phone' => $request->phone,
                'course_categories_id' => $request->course_category,
                'lessons_id' => $request->lesson,
                'topics_id' => $request->topic,
                'descritption' => $request->desc,
                'title' => $request->title,
                'course_id' => $request->course,
               

               

            ];
        }

        //    print_r($data);
        if (Instructor::create($data)) {
            $request->photo->move('uploads/', $filename);
            return redirect()->route('instructor.index')->with('msg', 'Instructor Inserted Sussessfully Store');
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
        $topics = Topic::get();
        $courses =Course::get(); 
        $instructors = Instructor::find($id);
        return view('backend.instructor.edit', compact('categories', 'lessons', 'topics', 'instructors','courses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $instructors = Instructor::find($id);
        $validate = $request->validate([
            'photo' => 'mimes:jpg,jpeg,png',
            'name' => 'required|min:4|max:100',
            'email' => 'required|min:4',
            'phone' => 'required|numeric',
            'desc' => 'required|min:4|max:500',
            'title' => 'required|min:4|max:150',
        ]);

        $filename = time() . "." . $request->photo->extension();

        if ($validate) {
            $data = [
                'photo' => $filename,
                'instructor_name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'course_categories_id' => $request->course_category,
                'lessons_id' => $request->lesson,
                'topics_id' => $request->topic,
                'description' => $request->desc,
                'title' => $request->title,
                'course_id' => $request->course,
             
             

            ];
        }

        //    print_r($data);
        $instructors->update($data);
        $request->photo->move('uploads/', $filename);
        return redirect()->route('instructor.index')->with('msg', 'Instructor Update Sussessfully Store');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $instructors = Instructor::find($id);
        if ($instructors->delete());
        return redirect()->route('instructor.index')->with('msg', 'Instructor Delete Successfully');
    }
    public function logout(){
        
        Auth::guard('instructor')->logout();
        return redirect()->route('instructorLoginForm');
    }
}
