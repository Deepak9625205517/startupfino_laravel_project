@extends('admin.layouts.master')
@section('content')
<section class="content">
  <section class="content-header">
    <div class="back-icon"><a href="{{route('categories.index')}}"><i class="fa fa-arrow-left"></i></a></div>
      <div class="home-icon"> <a href="{{url('/dashboard')}}"><i class="fa fa-home"></i></a> </i></div>
      <h1>Home</h1>
      <h2>Add Category</h2>
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
               <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="col-md-6">
                     <div class="form-group">
                              <label for="name">Category Name:</label>
                              <input type="text" class="form-control" id="title" placeholder="Enter Category Name" name="name" value="{{old('name')}}">
                              <span class="text-danger">{{ $errors->first('name') }}</span>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group">
                              <label for="name">Slug:</label>
                              <input type="text" class="form-control" id="slug" placeholder="Enter Category Slug" name="slug" value="{{old('slug')}}">
                              <span class="text-danger">{{ $errors->first('slug') }}</span>
                     </div>
                  </div>
                  <div class="col-md-12">   
                     <div class="form-group">
                              <label for="parent_category">Parent Category:</label>
                              <select class="form-control" name="parent_category" style="height: 35px;">
                                 <option value="">Select a category</option>
                                 @foreach($categories as $category)
                                       @if (old('parent_category') == $category->id)
                                             <option value="{{$category->id }}" selected>{{ $category->name }}</option>
                                          @else
                                             <option value="{{$category->id }}">{{ $category->name }}</option>
                                          @endif
                                 @endforeach
                              </select>
                              <span class="text-danger">{{ $errors->first('parent_category') }}</span>
                     </div>
                  </div>
                  
                  <div class="col-md-12">
                  <div class="form-group">
                            <label for="name">Description:</label>
                            <input type="hidden" id="description" name="description" style="display:none" />
                            <input type="hidden" id="description___Config" value="" style="display:none" />
                            <iframe id="description___Frame" src="{{asset('admin/fckeditor/editor/fckeditor.html?InstanceName=description&amp;Toolbar=Default')}}" width="100%" height="320px" frameborder="0" scrolling="no"></iframe>
                            <span class="text-danger">{{ $errors->first('description') }}</span>
                  </div>
                  </div>
                  <div class="col-md-12">
                  <div class="form-group">
                            <label for="name">Short Description:</label>
                            <input type="hidden" id="short_description" name="short_description" style="display:none" />
                            <input type="hidden" id="short_description___Config" value="" style="display:none" />
                            <iframe id="short_description___Frame" src="{{asset('admin/fckeditor/editor/fckeditor.html?InstanceName=short_description&amp;Toolbar=Default')}}" width="100%" height="320px" frameborder="0" scrolling="no"></iframe>
                            <span class="text-danger">{{ $errors->first('short_description') }}</span>
                  </div>
                  </div>
                  <div class="col-md-12">
                  <div class="form-group">
                            <label for="name">Long Description:</label>
                            <input type="hidden" id="long_description" name="long_description" style="display:none" />
                            <input type="hidden" id="long_description___Config" value="" style="display:none" />
                            <iframe id="long_description___Frame" src="{{asset('admin/fckeditor/editor/fckeditor.html?InstanceName=long_description&amp;Toolbar=Default')}}" width="100%" height="320px" frameborder="0" scrolling="no"></iframe>
                            <span class="text-danger">{{ $errors->first('long_description') }}</span>
                  </div>
                  </div>
                  <div class="col-md-12">
                  <div class="form-group">
                            <label for="name">Too Long Description:</label>
                            <input type="hidden" id="sidebar_description" name="sidebar_description" style="display:none" />
                            <input type="hidden" id="sidebar_description___Config" value="" style="display:none" />
                            <iframe id="sidebar_description___Frame" src="{{asset('admin/fckeditor/editor/fckeditor.html?InstanceName=sidebar_description&amp;Toolbar=Default')}}" width="100%" height="320px" frameborder="0" scrolling="no"></iframe>
                            <span class="text-danger">{{ $errors->first('sidebar_description') }}</span>
                  </div>
                  </div>
                  <div class="col-md-12"> 
                  <h3>For Seo Part</h3>
                  </div>
                  <div class="col-md-6"> 
                     <div class="form-group">
                              <label for="banner">Meta Title:</label>
                              <input type="text" class="form-control" id="meta_title" placeholder="Meta Title" name="meta_title" value="{{old('meta_title')}}">
                              <span class="text-danger">{{ $errors->first('meta_title') }}</span>
                     </div>
                  </div>
                  <div class="col-md-6"> 
                     <div class="form-group">
                              <label for="banner">Meta Keywords:</label>
                              <input type="text" class="form-control" id="meta_keywords" placeholder="Meta Keywords" name="meta_keywords" value="{{old('meta_keywords')}}">
                              <span class="text-danger">{{ $errors->first('meta_keywords') }}</span>
                     </div>
                  </div>   
                 <div class="col-md-12"> 
                     <div class="form-group">
                              <label for="name">Meta Description:</label>
                              <textarea type="text" class="form-control" id="meta_description" placeholder="Enter Meta Description" name="meta_description">{{old('meta_description')}}</textarea>
                              <span class="text-danger">{{ $errors->first('meta_description') }}</span>
                     </div>
                  </div>
                  <div class="box-footer text-center">
                     <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</section>
@stop
<script type="text/javascript" src="{{asset('admin/fckeditor/fckeditor.js')}}"></script>