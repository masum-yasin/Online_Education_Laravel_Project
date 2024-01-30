@extends('backend.layouts.app')
@section('title','all Course Here')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
       <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Hoverable Table</h4>
              <p class="card-description"> Add class <code>.table-hover</code>
              </p>
              <div class="table-responsive">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>#ID</th>
                      <th>Student Name</th>
                      <th>Phone Number</th>
                      <th>Email</th>
                      <th>Local City</th>
                      <th>Student Course</th>
                      <th>Course Duration</th>
                      <th>Lac Description</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($scourses as $scourse)
                      <tr>
                      <td>{{$scourse['id']}}</td>
                      <td>{{$scourse['student_name']}}</td>
                      <td>{{$scourse['phone']}}</td>
                      <td>{{$scourse['email']}}</td>
                      <td>{{$scourse['local_city']}}</td>
                      <td>{{$scourse->category->name}}</td>
                      <td>{{$scourse['course_duration']}}</td>
                      <td>{{$scourse['Lac_description']}}</td>
                      <td>
                        <a href="scourse/delete/{{$scourse['id']}}"><i class="btn btn-danger">Delete</i></a>
                          <a href="scourse/edit/{{$scourse['id']}}"><i class="btn btn-warning">Edit</i></a>
                      </td>
                      </tr>
                      @endforeach
                      {{-- student_name','phone','email','scourse_category_id','course_duration','Lac_description --}}
                   
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
       
       
      
        
      </div>
    </div>
    
    <!-- partial -->
  </div>
@endsection