@extends('backend.layouts.app')
@section('title','Student course Category')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title">Student Course Category</h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Forms</a></li>
          
          </ol>
        </nav>
      </div>
      @if (session('msg'))
      <div class="alert alert-danger">
        {{session('msg')}}
      </div>
          
      @endif
      <div class="row">
        
        <div class="col-12 grid-margin stretch-card">
        
          <div class="card">
            <div class="card-body">
             <form class="forms-sample" method="post"  action="{{route('scategory.update',['id'=>$scategory['id']])}}">
              @csrf
                <div class="form-group">
                  <label for="exampleInputName1"> Student Course Category</label>
                  <input type="text" class="form-control" id="exampleInputName1" placeholder="Student Course Category" name="scourse_name" value="{{old('scourse_name')? old('scourse_name'):$scategory['scourse_name']}}">
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