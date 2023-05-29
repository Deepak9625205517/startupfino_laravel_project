@extends('admin.layouts.master')
@section('content')
<section class="content">
  <section class="content-header">
    <div class="back-icon"><a href="{{route('pages.index')}}"><i class="fa fa-arrow-left"></i></a></div>
      <div class="home-icon"> <a href="{{url('/dashboard')}}"><i class="fa fa-home"></i></a> </i></div>
      <h1>Home</h1>
      <h2>Edit Page</h2>
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
             <form action="{{ route('pages.update', [$edit->id] ) }}" method="post" enctype="multipart/form-data">
                  @csrf
                  <input name="_method" type="hidden" value="PUT">
                  <div class="col-md-6">
                     <div class="form-group">
                              <label for="title">Page Title:</label>
                              <input type="text" class="form-control title" id="title" placeholder="Enter Title" name="title" value="{{old('title', $edit->title)}}">
                              <span class="text-danger">{{ $errors->first('title') }}</span>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group">
                              <label for="slug">Slug:</label>
                              <input type="text" class="form-control slug" id="slug" name="slug" placeholder="Enter slug" value="{{old('slug', $edit->slug)}}">
                              <span class="text-danger">{{ $errors->first('slug') }}</span>
                     </div>
                  </div>

                  <div class="col-md-6">  
                  <div class="form-group">
                            <label for="parent_category">Category Name</label>
                            <select class="form-control" name="category_id" id="category_id" style="height: 35px;">
                                <option value="">Select category</option>
                                @foreach($categories as $category)
                                    @if (old('category_id') ==$category->id)
                                        <option value="{{$category->id }}" {{($edit->category_id == $category->id) ? 'selected': ''}}>{{ $category->name }}</option>
                                    @else
                                        <option value="{{$category->id }}"{{($edit->category_id == $category->id) ? 'selected': ''}}>{{ $category->name }}</option>
                                    @endif
                                @endforeach                                
                            </select>
                            <span class="text-danger">{{ $errors->first('category_id') }}</span>
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

                  <div class="col-md-12">
                     <div class="form-group">
                              <label for="description">Description:</label>
                              <textarea type="text" class="form-control ckeditor" id="description" placeholder="Enter Description" name="description">{{{ old('description', $edit->description) }}}</textarea>
                              <span class="text-danger">{{ $errors->first('description') }}</span>
                     </div>
                  </div>

                  <div class="col-md-12">
                     <div class="form-group">
                              <label for="short_description">Short Description:</label>
                              <textarea type="text" class="form-control ckeditor" id="short_description" placeholder="Enter Short Description" name="short_description">{{{ old('short_description', $edit->short_description) }}}</textarea>
                              <span class="text-danger">{{ $errors->first('short_description') }}</span>
                     </div>
                  </div>

                  <div class="col-md-12">
                     <div class="form-group">
                              <label for="long_description">Long Description:</label>
                              <textarea type="text" class="form-control ckeditor" id="long_description" placeholder="Enter Long Description" name="long_description">{{{ old('long_description', $edit->long_description) }}}</textarea>
                              <span class="text-danger">{{ $errors->first('long_description') }}</span>
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