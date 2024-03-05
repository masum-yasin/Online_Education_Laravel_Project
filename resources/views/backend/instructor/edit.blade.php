@extends('backend.layouts.app')
@section('title','Student course Category')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <a href="{{route('instructor.index')}}" class="btn btn-sm btn-success mb-3" style="float: right">ALL Course Lesson</a>
      <div class="page-header">
        <h3 class="page-title">All Course Lesson</h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Forms</a></li>
        </ol>
        </nav>
      </div>
      @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
      </div>
          
      @endif
      @if (session('msg'))
      <div class="alert alert-danger">
        {{session('msg')}}
      </div>
          
      @endif
      <div class="row">
        
        <div class="col-12 grid-margin stretch-card">
        
          <div class="card">
            <div class="card-body">
             <form class="forms-sample" method="post" action="{{route('instructor.update',$instructors->id)}}" enctype="multipart/form-data">
              @csrf
              <input type="hidden" name="_method" value="PATCH">
                <div class="form-group">
                  <label for="exampleInputName1">Instructor Name</label>
                  <input type="text" class="form-control" id="exampleInputName1" placeholder="Instructor Name" name="name" value="{{old("name",$instructors->instructor_name)}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputName1">Instructor Phone</label>
                  <input type="number" class="form-control" id="exampleInputName1" placeholder="Instructor Name" name="phone" value="{{old("phone",$instructors->phone)}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputName1">Instructor Email</label>
                  <input type="email" class="form-control" id="exampleInputName1" placeholder="Instructor Name" name="email" value="{{old("email",$instructors->email)}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputName1">Instructor Photo</label>
                  <input type="file" class="form-control" id="exampleInputName1" placeholder="Instructor Name" name="photo" value="{{old("photo",$instructors->photo)}}">
                </div>
              
               
               
                <div class="form-group mt-4">
                    <label for="exampleInputName1">Course Category</label>
                    <select name="course_category" id="">
                      <option value="selected">Course Selected</option>
                      @foreach ($categories as $category)
                      <option value="{{$category->id}}" @selected(old('course_category',$instructors->course_categories_id==$category->id))>{{$category->name}}</option>
                      @endforeach
                </select>
                  </div>
                 <div class="form-group">
                    <label for="exampleInputName1">Description</label>
                    <textarea name="desc" id="" cols="60" rows="6">{{old('desc',$instructors->description)}}</textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputName1">Lesson Number</label>
                    <select name="lesson" id="">
                      <option value="selected">Course Selected</option>
                      @foreach ($lessons as $lesson)
                      <option value="{{$lesson->id}}" @selected(old('lesson',$instructors->lessons_id==$lesson->id))>{{$lesson->lesson_number}}</option>
                      @endforeach
                   </select>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputName1">Lesson Number</label>
                    <select name="course" id="">
                      <option value="selected">Course Selected</option>
                      @foreach ($courses as $course)
                      <option value="{{$course->id}}" @selected(old('course',$instructors->course_id==$course->id))>{{$course->course_number}}</option>
                      @endforeach
                   </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputName1">Instructor Title</label>
                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Instructor Name" name="title" value="{{old("title",$instructors->title)}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputName1">Topic</label>
                    <select name="topic" id="">
                      <option value="selected">Course Selected</option>
                      @foreach ($topics as $topic)
                      <option value="{{$topic->id}}" @selected(old('topic',$instructors->topics_id==$topic->id))>{{$topic->topic_title}}</option>
                      @endforeach
                   </select>
                  </div>
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <button class="btn btn-dark">Cancel</button>
              </form>
            </div>
          </div>
        </div>
        
      
      
      </div>
    </div>
   
  </div>
@endsection