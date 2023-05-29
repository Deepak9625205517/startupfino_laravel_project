@extends('admin.layouts.master')
@section('content')
<section class="content">
  <section class="content-header">
    <div class="back-icon"><a href="{{route('states.index')}}"><i class="fa fa-arrow-left"></i></a></div>
      <div class="home-icon"> <a href="{{url('/dashboard')}}"><i class="fa fa-home"></i></a> </i></div>
      <h1>Home</h1>
      <h2>Edit State</h2>
  </section>
   <div class="row">
      
      <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
               <h3 class="box-title">Basic Information</h3>
            </div>
            <div class="box-body">
             <form action="{{ route('states.update', [$edit->id] ) }}" method="post">
                  @csrf
                  <input name="_method" type="hidden" value="PUT">
                  <div class="col-md-12">
                     <div class="form-group">
                              <label for="title">State Name:</label>
                              <input type="text" class="form-control title" id="name" placeholder="Enter Meta Title" name="name" value="{{old('name', $edit->name)}}">
                              <span class="text-danger">{{ $errors->first('name') }}</span>
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