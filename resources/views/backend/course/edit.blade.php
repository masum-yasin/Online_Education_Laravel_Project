@extends('backend.layouts.app')
@section('title','New Course Add')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
     <div class="page-header">

        <a href="{{route('course.create')}}" class="btn btn-sm btn-success mb-3 p-2" style="float: right;">Add Course Details</a>
        <h3 class="page-title"> Add New Course Detail</h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
          
          
          </ol>
        </nav>
      </div>
      <div class="row">
        
        <div class="col-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              
             
              <form class="forms-sample" method="post" action="{{route('course.update',['id'=>$course['id']])}}" >
                @csrf
                <div class="form-group">
                  <label for="exampleInputName1">Course Name</label>
                  <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="course_name" value="{{old('course_name')? old('course_name'):$course['course_name']}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Course Fee</label>
                    <input type="text" class="form-control" id="exampleInputName2" placeholder="Course Fee" name="course_fee"value="{{old('course_fee')? old('course_fee'):$course['course_fee']}}">
                  </div>
                
                <div class="form-group">
                    <label for="exampleInputName1">Course Category ID</label>
                    <select name="course_category" id="exampleInputName3" class="form-control">
                            <option value="selected">Course Selected</option>
                            @foreach ($categories as $category)
                              <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                    </select>
                  
                  </div>
                <div class="form-group">
                  <label for="exampleInputEmail3">Course Duration</label>
                  <input type="text" class="form-control" id="exampleInputEmail4" placeholder="Course Duration" name="course_duration"value="{{old('course_duration')? old('course_duration'):$course['course_duration']}}" >
                </div>
                <div class="form-group">
                  <label for="exampleInputName1">Video</label>
                  <input type="text" class="form-control" id="exampleInputName1" placeholder="Instructor Name" name="video" value="{{old("video",$instructors->video)}}">
                </div>
               <div class="form-group">
                  <label for="exampleTextarea1">Description</label>
                  <textarea class="form-control" id="exampleTextarea7" name="desc" rows="4"></textarea>
                </div>
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <button class="btn btn-dark">Cancel</button>
              </form>
            </div>
          </div>
        </div>
        
      
      
      </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:../../partials/_footer.html -->
   
    <!-- partial -->
  </div>
@endsection