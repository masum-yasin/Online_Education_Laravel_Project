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
              
             
              <form class="forms-sample" method="post" action="{{route('scourse.store')}}">
                @csrf
                <div class="form-group">
                  <label for="exampleInputName1">Student Name</label>
                  <input type="text" class="form-control" id="exampleInputName1" placeholder=" Student Name" name="student_name">
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Phone Number</label>
                    <input type="number" class="form-control" id="exampleInputName2" placeholder="Phone Number" name="phone">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputName1">Email</label>
                    <input type="email" class="form-control" id="exampleInputName2" placeholder="Email" name="email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputName1">Local City</label>
                    <input type="text" class="form-control" id="exampleInputName2" placeholder="Local City" name="city">
                  </div>
                
                <div class="form-group">
                    <label for="exampleInputName1">Course Category ID</label>
                    <select name="scourse_category" id="exampleInputName3" class="form-control">
                            <option value="selected">Course Selected</option>
                            @foreach ($categories as $category)
                              <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                    </select>
                  
                  </div>
                <div class="form-group">
                  <label for="exampleInputEmail3">Course Duration</label>
                  <input type="text" class="form-control" id="exampleInputEmail4" placeholder="Course Duration" name="duration">
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
               
                <div class="form-group">
                  <label for="exampleTextarea1">Lac_description</label>
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
    
  </div>
@endsection