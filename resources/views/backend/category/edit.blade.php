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
          @if (session('msg'))
          <div class="alert alert-danger">
            {{session('msg')}}
          </div>
              
          @endif
          <div class="card">
            <div class="card-body">
             <form class="forms-sample" method="post"  action="{{route('category.update',['id'=>$single['id']])}}">
              @csrf
                <div class="form-group">
                  <label for="exampleInputName1">Course Category</label>
                  <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="name" value="{{old('name')? old('name'):$single['name']}}">
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