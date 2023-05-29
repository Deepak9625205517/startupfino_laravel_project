@extends('admin.layouts.master')
@section('content')
<section class="content">
  <section class="content-header">
    <div class="back-icon"><a href="{{route('permissions.index')}}"><i class="fa fa-arrow-left"></i></a></div>
      <div class="home-icon"> <a href="{{url('/dashboard')}}"><i class="fa fa-home"></i></a> </i></div>
      <h1>Home</h1>
      <h2>Permission</h2>
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
               <form action="{{ route('permissions.store') }}" method="POST">
                  @csrf
                  <div class="form-group">
                            <label for="name">Permission Name:</label>
                            <input type="name" class="form-control" id="name" placeholder="Enter Permission Name" name="name">
                            <span class="text-danger">{{ $errors->first('name') }}</span>
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