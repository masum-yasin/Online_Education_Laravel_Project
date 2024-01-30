<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\CourseCategory;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['categories'] = CourseCategory::all();
        return view('backend.category.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = ['name'=>$request->category];
        // print_r($data);
        if(CourseCategory::insert($data)){
            return redirect('category')->with('msg','Store Successfully Category');
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
        $category = CourseCategory::find($id);
        $data['single'] = $category;
        return view('backend.category.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $category = CourseCategory::find($id);
        $validated = $request->validate([
            'name' => 'required|min:4|max:80',
        ]);
        if($validated){
            $data =[
                'name'=>$request->name,
            ];
            $category->update($data);
            return redirect('category')->with('msg','Update Successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = CourseCategory::find($id);
        if($category->delete()){
            return redirect('category')->with('msg','Delete Successfully');
        }
    }
}
