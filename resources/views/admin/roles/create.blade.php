@extends('admin.layouts.master')
@section('content')
<section class="content">
  <section class="content-header">
    <div class="back-icon"><a href="{{route('roles.index')}}"><i class="fa fa-arrow-left"></i></a></div>
      <div class="home-icon"> <a href="{{url('/dashboard')}}"><i class="fa fa-home"></i></a> </i></div>
      <h1>Home</h1>
      <h2>Add Role</h2>
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
               {!! Form::open(array('route' => 'roles.store','method'=>'POST')) !!}
               <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12">
                     <div class="form-group">
                     <label>Role Name</label>
                        {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12">
                     <div class="form-group">
                        <label>Permission:</label><br>
                        
                        @foreach($permission as $value)
                         <div class="col-md-3 padding-bottom-new">{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }}
                          {{ $value->name }}</div>                        
                        @endforeach
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                     <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
               </div>
               {!! Form::close() !!}
            </div>
         </div>
      </div>
   </div>
</section>
@stop