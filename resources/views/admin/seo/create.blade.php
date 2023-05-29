@extends('admin.layouts.master')
@section('content')
<section class="content">
  <section class="content-header">
    <div class="back-icon"><a href="{{route('seo-pages.index')}}"><i class="fa fa-arrow-left"></i></a></div>
      <div class="home-icon"> <a href="{{url('/dashboard')}}"><i class="fa fa-home"></i></a> </i></div>
      <h1>Home</h1>
      <h2>Add Seo Page</h2>
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
               <form action="{{ route('seo-pages.store') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="col-md-6">
                     <div class="form-group">
                              <label for="title">Meta Title:</label>
                              <input type="text" class="form-control title" id="meta_title" placeholder="Enter Meta Title" name="meta_title" value="{{old('meta_title')}}">
                              <span class="text-danger">{{ $errors->first('meta_title') }}</span>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group">
                          <label for="parent_category">Page Name</label>
                            <select class="form-control" name="page_id" id="page_id" style="height: 35px;">
                                <option value="">Select Page</option>
                                 @foreach($pages as $page)
                                       @if (old('page_id') ==$page->id)
                                          <option value="{{$page->id }}" selected>{{ $page->title }}</option>
                                       @else
                                          <option value="{{$page->id }}">{{ $page->title }}</option>
                                       @endif
                                 @endforeach                                
                            </select>
                            <span class="text-danger">{{ $errors->first('page_id') }}</span>
                     </div>
                  </div>

                  <div class="col-md-12">
                     <div class="form-group">
                              <label for="description">Meta Description:</label>
                              <textarea type="text" class="form-control ckeditor" id="meta_description" placeholder="Enter Meta Description" name="meta_description">{{{ old('meta_description') }}}</textarea>
                              <span class="text-danger">{{ $errors->first('meta_description') }}</span>
                     </div>
                  </div>

                  <div class="col-md-12">
                     <div class="form-group">
                              <label for="short_description">Meta Keywords:</label>
                              <textarea type="text" class="form-control ckeditor" id="meta_keyword" placeholder="Enter Meta Keyword" name="meta_keyword">{{{ old('meta_keyword') }}}</textarea>
                              <span class="text-danger">{{ $errors->first('meta_keyword') }}</span>
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