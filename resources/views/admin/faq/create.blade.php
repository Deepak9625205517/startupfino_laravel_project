@extends('admin.layouts.master')
@section('content')
<section class="content">
  <section class="content-header">
    <div class="back-icon"><a href="{{route('faq.index')}}"><i class="fa fa-arrow-left"></i></a></div>
      <div class="home-icon"> <a href="{{url('/dashboard')}}"><i class="fa fa-home"></i></a> </i></div>
      <h1>Home</h1>
      <h2>FAQ</h2>
  </section>
   <div class="row">
      
      <div class="col-md-12">
         <!-- @if (count($errors) > 0)
         <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
               @foreach ($errors->all() as $error)
               <li>{{ $error }}</li>
               @endforeach
            </ul>
         </div>
         @endif -->
         <div class="box">
            <div class="box-header with-border">
               <h3 class="box-title">Basic Information</h3>
            </div>
            <div class="box-body">
               <form action="{{ route('faq.store') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="col-md-12">
                     <div class="form-group">
                              <label for="questions">Question:</label>
                              <input type="text" class="form-control" id="questions" placeholder="Enter Category Name" name="questions" value="{{old('questions')}}">
                              <span class="text-danger">{{ $errors->first('questions') }}</span>
                     </div>
                  </div>
                  <div class="col-md-12">
                  <div class="form-group">
                            <label for="name">Answer:</label>
                            <textarea type="text" class="form-control ckeditor" id="answer" placeholder="Enter Answer" name="answer">{{old('answer')}}</textarea>
                            <span class="text-danger">{{ $errors->first('answer') }}</span>
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