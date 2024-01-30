@extends('backend.layouts.app')
@section('title','New Course Add')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title"> Add New Course </h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Forms</a></li>
          
          </ol>
        </nav>
      </div>
      <div class="row">
        
        <div class="col-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              
             
              <form class="forms-sample" method="post" action="{{route('scourse.update',['id'=>$single['id']])}}">
                @csrf
                <div class="form-group">
                  <label for="exampleInputName1">Student Name</label>
                  <input type="text" class="form-control" id="exampleInputName1" placeholder=" Student Name" name="student_name" value="{{old('student_name')? old('student_name'):$single['student_name']}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Phone Number</label>
                    <input type="number" class="form-control" id="exampleInputName2" placeholder="Phone Number" name="phone" value="{{old('phone')? old('phone'):$single['phone']}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputName1">Email</label>
                    <input type="email" class="form-control" id="exampleInputName2" placeholder="Email" name="email" value="{{old('email')? old('email'):$single['email']}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputName1">Local City</label>
                    <input type="text" class="form-control" id="exampleInputName2" placeholder="Local City" name="city" value="{{old('local_city')? old('local_city'):$single['local_city']}}">
                  </div>
               
                <div class="form-group">
                  <label for="exampleInputEmail3">Course Duration</label>
                  <input type="text" class="form-control" id="exampleInputEmail4" placeholder="Course Duration" name="duration" value="{{old('course_duration')? old('course_duration'):$single['course_duration']}}">
                </div>

               
                {{-- <div class="form-group">
                  <label for="exampleSelectGender">Gender</label>
                  <select class="form-control" id="exampleSelectGender">
                    <option>Male</option>
                    <option>Female</option>
                  </select>
                </div> 
                 <div class="form-group">
                  <label>File upload</label>
                  <input type="file" name="img[]" class="file-upload-default">
                  <div class="input-group col-xs-12">
                    <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                    <span class="input-group-append">
                      <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                    </span>
                  </div>
                </div> --}}
               
               
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