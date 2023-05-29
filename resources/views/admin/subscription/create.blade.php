@extends('admin.layouts.master')
@section('content')
<section class="content">
  <section class="content-header">
    <div class="back-icon"><a href="{{route('subscriptions.index')}}"><i class="fa fa-arrow-left"></i></a></div>
      <div class="home-icon"> <a href="{{url('/dashboard')}}"><i class="fa fa-home"></i></a> </i></div>
      <h1>Home</h1>
      <h2>Add Subscription</h2>
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
               <form action="{{ route('subscriptions.store') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="col-md-6">
                     <div class="form-group">
                              <label for="title">Title:</label>
                              <input type="text" class="form-control" id="title" placeholder="Enter Title" name="title" value="{{old('title')}}">
                              <span class="text-danger">{{ $errors->first('title') }}</span>
                     </div>
                  </div>

                  <div class="col-md-6">
                     <div class="form-group">
                              <label for="days">Days:</label>
                              <input type="number" class="form-control" id="days" placeholder="Enter Days" name="days" value="{{old('days')}}">
                              <span class="text-danger">{{ $errors->first('days') }}</span>
                     </div>
                  </div>

                  <div class="col-xs-12 col-sm-12 col-md-12">
                     <div class="form-group">
                           <strong>Category:</strong>
                           <select class="form-control" name="category_id[]" multiple style="height: 180px;">
                                 @foreach(CategoryList() as $cat)
                                  <option value="{{$cat->id}}">{{$cat->name}}</option>
                                 @endforeach
                           </select>      
                     </div>
                  </div>
                  
                  <div class="col-md-12">
                     <div class="form-group">
                              <label for="description">Description:</label>
                              <textarea type="text" class="form-control ckeditor" id="description" placeholder="Enter Description" name="description">{{old('description')}}</textarea>
                              <span class="text-danger">{{ $errors->first('description') }}</span>
                     </div>
                  </div>

                  <div class="col-md-6">
                     <div class="form-group">
                              <label for="type">Yearly Plan:</label>
                              <input type="text" class="form-control" id="type" placeholder="Enter Type (Weekly, Mothly, Quaterly,...Yearly etc)" name="type" value="{{old('type')}}">
                              <span class="text-danger">{{ $errors->first('type') }}</span>
                     </div>
                  </div>

                  <div class="col-md-6">
                     <div class="form-group">
                              <label for="type">Monthly Plan:</label>
                              <input type="text" class="form-control" id="monthly" placeholder="Enter Mothly Plan" name="monthly" value="{{old('monthly')}}">
                              <span class="text-danger">{{ $errors->first('monthly') }}</span>
                     </div>
                  </div>

                  <div class="col-md-6">
                     <div class="form-group">
                              <label for="price">Price:</label>
                              <input type="text" class="form-control" id="price" placeholder="Enter Price" name="price" value="{{old('price')}}">
                              <span class="text-danger">{{ $errors->first('price') }}</span>
                     </div>
                  </div>

                  <div class="col-md-6">
                     <div class="form-group">
                              <label for="price">Offer (%):</label>
                              <input type="text" class="form-control" id="offers" placeholder="Enter Offer" name="offers" value="{{old('offers')}}">
                              <span class="text-danger">{{ $errors->first('offers') }}</span>
                     </div>
                  </div>

                  <!-- <div class="col-md-12">
                     <div class="form-group">
                              <label for="document_quantity">Document's Quantity:</label>
                              <input type="number" class="form-control" id="document_quantity" placeholder="Enter Document's Quantity" name="document_quantity" value="{{old('document_quantity')}}">
                              <span class="text-danger">{{ $errors->first('document_quantity') }}</span>
                     </div>
                  </div> -->

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