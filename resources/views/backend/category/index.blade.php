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
                      <th>Course Category</th>
                        <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($categories as $category)
                        
                 
                    <tr>
                      <td>{{$category['id']}}</td>
                      <td>{{$category['name']}}</td>
                          <td>
                            <a href="category/delete/{{$category['id']}}"><i class="btn btn-danger">Delete</i></a>
                              <a href="category/edit/{{$category['id']}}"><i class="btn btn-warning">Edit</i></a>
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