@extends('admin.layouts.master')
@section('content')
<section class="content">
  <section class="content-header">
    <div class="back-icon"><a href="{{route('company-logos.index')}}"><i class="fa fa-arrow-left"></i></a></div>
      <div class="home-icon"> <a href="{{url('/dashboard')}}"><i class="fa fa-home"></i></a> </i></div>
      <h1>Home</h1>
      <h2>Edit Company Logo</h2>
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
             <form action="{{ route('company-logos.update', [$edit->id] ) }}" method="post" enctype="multipart/form-data">
                  @csrf
                  <input name="_method" type="hidden" value="PUT">
                  <div class="col-md-6">
                     <div class="form-group">
                              <label for="company_name">Company Name:</label>
                              <input type="text" class="form-control company_name" id="company_name" placeholder="Enter Company Name" name="company_name" value="{{old('company_name', $edit->company_name)}}">
                              <span class="text-danger">{{ $errors->first('company_name') }}</span>
                     </div>
                  </div>
                   <div class="col-md-6">
                     <div class="form-group">
                              <label for="slug">Image:</label>
                              <input type="file" class="form-control" id="image" placeholder="Enter image" name="image" value="{{old('image', $edit->image)}}">
                              <span class="text-danger">{{ $errors->first('image') }}</span>
                              <img src="{{asset($edit->image)}}" alt="{{$edit->title}}" width="100" height="100">
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