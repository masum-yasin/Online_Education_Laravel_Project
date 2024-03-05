@extends('backend.layouts.app')
@section('title','all Course Here')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
     
       <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <a href="{{route('schedule.create')}}" class="btn btn-sm btn-success mb-3" style="float: right">Add Course Schedule</a>
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
                      <th>start Time</th>
                      <th>End Time</th>
                      <th>Course Category</th>
                       <th>status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($schedules as $schedule)
                      <tr>
                      <td>{{$schedule['id']}}</td>
                      <td>{{$schedule['start_time']}}</td>
                      <td>{{$schedule['ending_time']}}</td>
                      <td>{{$schedule->category->name}}</td>
                      <td>{{$schedule->status== 1 ? 'Active' :'Inactive'}}</td>
                      
                      <td class="d-flex justify-content-lg-center g-2"> 
                       
                          <form action="{{route('schedule.destroy',$schedule->id)}}" method="post">
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