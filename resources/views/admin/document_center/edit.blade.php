@extends('admin.layouts.master')
@section('content')
<section class="content">
  <section class="content-header">
    <div class="back-icon"><a href="{{route('document-centers.index')}}"><i class="fa fa-arrow-left"></i></a></div>
      <div class="home-icon"> <a href="{{url('/dashboard')}}"><i class="fa fa-home"></i></a> </i></div>
      <h1>Home</h1>
      <h2>Edit Services</h2>
  </section>
   <div class="row">
      
      <div class="col-md-12">
         
         <div class="box">
            <div class="box-header with-border">
               <h3 class="box-title">Basic Information</h3>
            </div>
            <div class="box-body">
             <form action="{{ route('document-centers.update', [$DocumentCenter->id] ) }}" method="post" enctype="multipart/form-data">
                  @csrf
                  <input name="_method" type="hidden" value="PUT">
                  <div class="col-md-6">  
                  <div class="form-group">
                            <label for="parent_category">Category Name</label>
                            <select class="form-control" name="category_id" id="category_id" style="height: 35px;">
                                <option value="">Select category</option>
                                @foreach($categories as $category)
                                    @if (old('category_id') ==$category->id)
                                        <option value="{{$category->id }}" {{($DocumentCenter->category_id == $category->id) ? 'selected': ''}}>{{ $category->name }}</option>
                                    @else
                                        <option value="{{$category->id }}"{{($DocumentCenter->category_id == $category->id) ? 'selected': ''}}>{{ $category->name }}</option>
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
                               @foreach($subcategories as $category)
                                    @if (old('category_id') ==$category->id)
                                        <option value="{{$category->id }}" {{($DocumentCenter->category_id == $category->id) ? 'selected': ''}}>{{ $category->name }}</option>
                                    @else
                                        <option value="{{$category->id }}"{{($DocumentCenter->category_id == $category->id) ? 'selected': ''}}>{{ $category->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                            <span class="text-danger">{{ $errors->first('subcategory_id') }}</span>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                     <label>Document Name</label>
                     <input type="text" class="form-control" name="document_name" id="title" placeholder="Enter Document Name" value="{{old('document_name', $DocumentCenter->document_name)}}">
                     <span class="text-danger">{{ $errors->first('document_name') }}</span>
                  </div>
                </div>
                
                <div class="col-md-6"> 
                  <div class="form-group">
                              <label for="name">Slug:</label>
                              <input type="text" class="form-control" id="slug" placeholder="Enter Document Slug" name="slug" value="{{old('slug', $DocumentCenter->slug)}}">
                              <span class="text-danger">{{ $errors->first('slug') }}</span>
                     </div>
                 </div>

                 <div class="col-md-12">
                  <div class="form-group">
                     <label>Number Of Pages(Documents)</label>
                     <input type="number" class="form-control" name="page" placeholder="Enter Number of Pages document" value="{{old('page', $DocumentCenter->page)}}">
                     <span class="text-danger">{{ $errors->first('page') }}</span>
                  </div>
                </div>

                <!-- <div class="col-md-6">
                  <div class="form-group">
                     <label>Price</label>
                     <input type="text" class="form-control" name="price" placeholder="Enter Price" value="{{old('price', $DocumentCenter->price)}}">
                     <span class="text-danger">{{ $errors->first('price') }}</span>
                  </div>
                </div> -->

                <div class="col-md-6">
                  <div class="form-group">
                     <label>Upload Image</label>
                     <input type="file" class="form-control" name="image" value="{{$DocumentCenter->image}}">
                     <span class="text-danger">{{ $errors->first('image') }}</span>
                     
                     @if($DocumentCenter->image)<img src="{{asset($DocumentCenter->image)}}" alt="{{ $DocumentCenter->document_name}}" width="100" height="100">@endif
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                     <label>Upload PDF</label>
                     <input type="file" class="form-control" name="pdf" value="{{$DocumentCenter->pdf}}">
                     <span class="text-danger">{{ $errors->first('pdf') }}</span>
                     @if($DocumentCenter->pdf)<a href="{{asset($DocumentCenter->pdf)}}" target="_blank" download><i class="fa fa-download"></i></a>@endif
                  </div>
                </div>

                
                <div class="col-md-12">
                  <div class="form-group">
                           <label for="name">Description:</label>
                           <textarea type="text" class="form-control ckeditor" id="description" placeholder="Enter description" name="description">{{old('description', $DocumentCenter->description)}}</textarea>
                           <span class="text-danger">{{ $errors->first('description') }}</span>
                  </div>
                </div>

                <h3>For Seo Part</h3>
                  <div class="col-md-6"> 
                     <div class="form-group">
                              <label for="banner">Meta Title:</label>
                              <input type="text" class="form-control" id="meta_title" placeholder="Meta Title" name="meta_title" value="{{old('meta_title', $DocumentCenter->meta_title)}}">
                              <span class="text-danger">{{ $errors->first('meta_title') }}</span>
                     </div>
                  </div>
                  <div class="col-md-6"> 
                     <div class="form-group">
                              <label for="banner">Meta Keywords:</label>
                              <input type="text" class="form-control" id="meta_keywords" placeholder="Meta Keywords" name="meta_keywords" value="{{old('meta_keywords', $DocumentCenter->meta_keywords)}}">
                              <span class="text-danger">{{ $errors->first('meta_keywords') }}</span>
                     </div>
                  </div>   
                 <div class="col-md-12"> 
                  <div class="form-group">
                            <label for="name">Meta Description:</label>
                            <textarea type="text" class="form-control" id="meta_description" placeholder="Enter Meta Description" name="meta_description">{{old('meta_description', $DocumentCenter->meta_description)}}</textarea>
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