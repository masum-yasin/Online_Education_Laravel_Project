@extends('backend.layouts.app')
@section('title','all Course Here')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
     
       <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <a href="{{route('instructor.create')}}" class="btn btn-sm btn-success mb-3" style="float: right">Add Instructor</a>
              <h4 class="card-title">Hoverable Table</h4>
              <p class="card-description"> Add class <code>.table-hover</code>
              </p>
              @if (session('msg'))
              <div class="alert alert-danger">
                {{session('msg')}};
              </div>
                  
              @endif
              <div class="table-responsive">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>#ID</th>
                      <th>Instructor Name</th>
                      <th>Email</th>
                      <th>Phone Number</th>
                      <th>Photo</th>
                      <th>course_category</th>
                      <th>lesson number</th>
                      <th>Topic</th>
                      <th>title</th>
                      <th>description</th>
                      <th>status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($instructors as $instructor)
                      <tr>
                      <td>{{$instructor['id']}}</td>
                      <td>{{$instructor['instructor_name']}}</td>
                      <td>{{$instructor['email']}}</td>
                      <td>{{$instructor['phone']}}</td>
                 
                      <td><img src="{{asset('uploads/'.$instructor->photo)}}" alt="" style="width: 50px; height:50px"></td>
                      <td>{{$instructor->category->name}}</td>
                      <td>{{$instructor->lesson->lesson_number}}</td>
                      <td>{{$instructor->topic->topic_title}}</td>
                      <td>{{$instructor['title']}}</td>
                      <td>{{$instructor['description']}}</td>
                    
                      <td>{{$instructor->status== 1 ? 'Active' :'Inactive'}}</td>
                      
                      <td class="d-flex justify-content-lg-center g-2"> 
                        <a href="{{route('instructor.edit',$instructor->id)}}"><i class="btn btn-success p-3">Edit</i></a>
                          <form action="{{route('instructor.destroy',$instructor->id)}}" method="post">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                           <button type="submit" class="btn btn-sm btn-danger p-3">DELETE</button>
                          </form>
                      </td>
                      </tr>
                      @endforeach
                   
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