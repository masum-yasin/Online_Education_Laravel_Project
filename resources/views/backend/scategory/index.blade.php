@extends('backend.layouts.app')
@section('title','all Student Category course')
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
                      <th>Student Course Category</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($scategories as $scategory)
                      <tr>
                      <td>{{$scategory['id']}}</td>
                      <td>{{$scategory['scourse_name']}}</td>
                      <td>
                        <a href="scategory/delete/{{$scategory['id']}}"><i class="btn btn-danger">Delete</i></a>
                        <a href="scategory/edit/{{$scategory['id']}}"><i class="btn btn-warning">Edit</i></a>
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