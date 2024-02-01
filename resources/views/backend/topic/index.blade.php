{{-- @extends('backend.layouts.app')
@section('title','all Course Here')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
     
       <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <a href="{{route('topic.create')}}" class="btn btn-sm btn-success mb-3" style="float: right">Add Course Lesson</a>
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
                      <th>Lesson Name</th>
                      <th>Course Category</th>
                      <th>Description</th>
                      <th>status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($lessons as $lesson)
                      <tr>
                      <td>{{$lesson['id']}}</td>
                      <td>{{$lesson['lesson_name']}}</td>
                      <td>{{$lesson->lesson->name}}</td>
                      <td>{{$lesson['description']}}</td>
                      <td>{{$lesson->status== 1 ? 'Active' :'Inactive'}}</td>
                      
                      <td class="d-flex justify-content-lg-center g-2"> 
                        <a href="{{route('lesson.edit',$lesson->id)}}"><i class="btn btn-success p-3">Edit</i></a>
                          <form action="{{route('lesson.destroy',$lesson->id)}}" method="post">
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
@endsection --}}