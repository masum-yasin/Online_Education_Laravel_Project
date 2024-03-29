@extends('backend.layouts.app')
@section('title','New Course Add')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <a href="{{route('category.index')}}" class="btn btn-sm btn-success mb-3" style="float: right">ALL Course Category</a>
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
          @if (session('msg'))
          <div class="alert alert-danger">
            {{session('msg')}}
          </div>
              @endif
          <div class="card">
            <div class="card-body">
             <form class="forms-sample" method="post" action="{{route('category.store')}}">
              @csrf
                <div class="form-group">
                  <label for="exampleInputName1">Course Category</label>
                  <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="category">
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