@extends('admin.layouts.master')
@section('content')
<section class="content">
  <section class="content-header">
    <div class="back-icon"><a href="{{route('testmonials.index')}}"><i class="fa fa-arrow-left"></i></a></div>
      <div class="home-icon"> <a href="{{url('/dashboard')}}"><i class="fa fa-home"></i></a> </i></div>
      <h1>Home</h1>
      <h2>Add Testimonial</h2>
  </section>

   <div class="row">
      
      <div class="col-md-12">
      
         <!-- @if ($message = Session::get('fail'))
         <div class="alert alert-danger">
            <p>{{ $message }}</p>
         </div>
         @endif -->
         <div class="box">
            <div class="box-header with-border">
               <h3 class="box-title">Basic Information</h3>
            </div>
            <div class="box-body">
               <form action="{{ route('testmonials.store') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="col-md-6">
                     <div class="form-group">
                              <label for="name">Name:</label>
                              <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" value="{{old('name')}}">
                              <span class="text-danger">{{ $errors->first('name') }}</span>
                     </div>
                  </div>

                  <div class="col-md-6">
                     <div class="form-group">
                              <label for="designation">Designation:</label>
                              <input type="text" class="form-control" id="designation" placeholder="Enter designation" name="designation" value="{{old('designation')}}">
                              <span class="text-danger">{{ $errors->first('designation') }}</span>
                     </div>
                  </div>

                  <div class="col-md-12">
                     <div class="form-group">
                              <label for="description">Description:</label>
                              <textarea type="text" class="form-control ckeditor" id="description" placeholder="Enter Description" name="description">{{old('description')}}</textarea>
                              <span class="text-danger">{{ $errors->first('description') }}</span>
                     </div>
                  </div>
                  
                  <div class="col-md-12">
                     <div class="form-group">
                              <label for="slug">Image:</label>
                              <input type="file" class="form-control" id="image" placeholder="Enter image" name="image" value="{{old('image')}}">
                              <span class="text-danger">{{ $errors->first('image') }}</span>
                     </div>
                  </div>

                  <div class="box-footer">
                     <button type="submit" name="submit" class="btn btn-primary pull-left">Submit</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</section>
@stop