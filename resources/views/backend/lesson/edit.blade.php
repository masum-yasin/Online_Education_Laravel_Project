@extends('backend.layouts.app')
@section('title','Student course Category')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <a href="{{route('lesson.index')}}" class="btn btn-sm btn-success mb-3" style="float: right">ALL Course Lesson</a>
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
             <form class="forms-sample" method="post" action="{{route('lesson.update',$lessons->id)}}" enctype="multipart/form-data">
              @csrf
              <input type="hidden" name="_method" value="PATCH">
                <div class="form-group">
                  <label for="exampleInputName1">Lesson Name</label>
                  <input type="text" class="form-control" id="exampleInputName1" placeholder="Course Lesson" name="lesson_name" value="{{old('lesson',$lessons->lesson_name)}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Course Category</label>
                    <select name="course_category" id="">
                      <option value="selected">Course Selected</option>
                      @foreach ($categories as $category)
                      <option value="{{$category->id}}" @if ($category->id==$lessons->course_categories_id) selected
                        @endif>{{$category->name}}</option>
                      @endforeach
                   

                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputName1">Lesson Description</label>
                    <textarea name="desc" id="" cols="60" rows="6">{{$lessons->description ? $lessons->description:old('desc')}}</textarea>
                  </div>
                <button type="submit" class="btn btn-primary mr-2">UPDATE</button>
                <button class="btn btn-dark">Cancel</button>
              </form>
            </div>
          </div>
        </div>
        
      
      
      </div>
    </div>
   
  </div>
@endsection