@extends('admin.layouts.master')
@section('content')
<section class="content">
  <section class="content-header">
    <div class="back-icon"><a href="{{route('document-centers.index')}}"><i class="fa fa-arrow-left"></i></a></div>
      <div class="home-icon"> <a href="{{url('/dashboard')}}"><i class="fa fa-home"></i></a> </i></div>
      <h1>Home</h1>
      <h2>Add Services</h2>
  </section>
<section class="content-header">
     @can('category-create')
         <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#myModal"><i class="fa fa-plus"></i> Category & Subcategory</button>
      @endcan 
         
</section>
   <div class="row">
      
      <div class="col-md-12">
        
         <div class="box">
            <div class="box-header with-border">
               <h3 class="box-title">Basic Information</h3>
            </div>
            <div class="box-body">
               <form action="{{ route('document-centers.store') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                <div class="col-md-6">  
                  <div class="form-group">
                            <label for="parent_category">Category Name</label>
                            <select class="form-control" name="category_id" id="category_id" style="height: 35px;">
                                <option value="">Select category</option>
                                @foreach($categories as $category)
                                    @if (old('category_id') ==$category->id)
                                        <option value="{{$category->id }}" selected>{{ $category->name }}</option>
                                    @else
                                        <option value="{{$category->id }}">{{ $category->name }}</option>
                                    @endif
                                @endforeach                                
                            </select>
                            <span class="text-danger">{{ $errors->first('category_id') }}</span>
                  </div>
                </div>  

                <div class="col-md-6">
                  <div class="form-group">
                            <label for="parent_category">Subcategory Name</label>
                            <select class="form-control" name="subcategory_id" id="subcategory_id"  style="height: 35px;">
                                <option value="">Select</option>
                                
                            </select>
                            <span class="text-danger">{{ $errors->first('subcategory_id') }}</span>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                     <label>Document Name</label>
                     <input type="text" class="form-control" name="document_name" id="title" placeholder="Enter Document Name" value="{{old('document_name')}}">
                     <span class="text-danger">{{ $errors->first('document_name') }}</span>
                  </div>
                </div>
                <div class="col-md-6"> 
                  <div class="form-group">
                              <label for="name">Slug:</label>
                              <input type="text" class="form-control" id="slug" placeholder="Enter Document Slug" name="slug" value="{{old('slug')}}">
                              <span class="text-danger">{{ $errors->first('slug') }}</span>
                     </div>
                 </div>
                <div class="col-md-6">
                  <div class="form-group">
                     <label>Upload Image</label>
                     <input type="file" class="form-control" name="image">
                     <span class="text-danger">{{ $errors->first('image') }}</span>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                     <label>Upload PDF</label>
                     <input type="file" class="form-control" name="pdf">
                     <span class="text-danger">{{ $errors->first('pdf') }}</span>
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group">
                     <label>Number Of Pages(Documents)</label>
                     <input type="number" class="form-control" name="page" placeholder="Enter Number of Pages document" value="{{old('page')}}">
                     <span class="text-danger">{{ $errors->first('page') }}</span>
                  </div>
                </div>

                <!-- <div class="col-md-6">
                  <div class="form-group">
                     <label>Price</label>
                     <input type="text" class="form-control" name="price" placeholder="Enter Price" value="{{old('price')}}">
                     <span class="text-danger">{{ $errors->first('price') }}</span>
                  </div>
                </div> -->

                <div class="col-md-12">
                  <div class="form-group">
                           <label for="name">Description:</label>
                           <textarea type="text" class="form-control ckeditor" id="description" placeholder="Enter description" name="description">{{old('description')}}</textarea>
                           <span class="text-danger">{{ $errors->first('description') }}</span>
                  </div>
                </div>

                <h3>For Seo Part</h3>
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

<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <div class="row">
         <div class="col-md-11">
           <h4 class="modal-title text-center"><strong>Add Category & Subcategory</strong></h4>
          </div>  
          <div class="col-md-1">
            <button type="button" class="btn-close pull-right" data-bs-dismiss="modal">X</button>
           </div>  
         </div>   
      </div>

      <!-- Modal body -->
      <div class="modal-body">
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
                  <div class="col-md-6">   
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
                  <div class="col-md-6"> 
                     <div class="form-group">
                              <label for="banner">Banner:</label>
                              <input type="file" class="form-control" id="banner" placeholder="Enter banner" name="banner" value="{{old('banner')}}">
                              <span class="text-danger">{{ $errors->first('banner') }}</span>
                     </div>
                  </div>   
                 <div class="col-md-12"> 
                  <div class="form-group">
                            <label for="name">Description:</label>
                            <textarea type="text" class="form-control ckeditor" id="description" placeholder="Enter description" name="description">{{old('description')}}</textarea>
                            <span class="text-danger">{{ $errors->first('description') }}</span>
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
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
@stop
