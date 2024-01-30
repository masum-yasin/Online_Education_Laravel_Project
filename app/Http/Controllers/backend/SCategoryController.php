<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;

use App\Models\StudentCategory;

use Illuminate\Http\Request;



class SCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['scategories']=StudentCategory::all();
        return view('backend.scategory.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.scategory.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = ['scourse_name'=>$request->scourse_name];
        // print_r($data);
        if(StudentCategory::insert($data)){
            return redirect('scategory')->with('msg','Student Category Successfully');
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
        $scategorys =StudentCategory::find($id);
        $data['scategory'] = $scategorys;
    //  echo "Bangladesh";
        return view('backend.scategory.edit',$data);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
    $scategory = StudentCategory::find($id);

    $validated = $request->validate([
        'course_name' => 'required|min:6|max:50',
    ]);
    if($validated){
        $data = [
            "scourse_name" => $request->scourse_name,
        ];
        $scategory->update($data);
        return redirect('scategory')->with('msg','Updated Successfully');
    }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $scategory = StudentCategory::find($id);
        if($scategory->delete()){
            return redirect('scategory')->with('msg','Delete Successfully');
        }
    }
}
