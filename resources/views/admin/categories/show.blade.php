@extends('admin.layouts.master')

@section('content')

<style>

    .dataTables_length{

        display:none;

    }

    .dataTables_filter{

        display:none;

    }

    .odd{

        display:none;

    }

    .dataTables_info{

        display:none;

    }

    .dataTables_paginate{

        display:none;

    }

    .content-header {

    margin-bottom: 50px !important;

}

</style>
<section class="content">
  <section class="content-header">
    <div class="back-icon"><a href="{{route('categories.index')}}"><i class="fa fa-arrow-left"></i></a></div>
      <div class="home-icon"> <a href="{{url('/dashboard')}}"><i class="fa fa-home"></i></a> </i></div>
      <h1>Home</h1>
      @if($category->parent)
      <h2><a href="{{route('subCategoryList.index', [$category->parent_id])}}">{{$category->parent->name}}</a></h2>
      @endif
  </section>
  


<section class="content">

   <div class="box box-primary">

      <div class="box-body">

         <!-- @if ($message = Session::get('success'))

         <div class="alert alert-success">

            <p>{{ $message }}</p>

         </div>

         @endif -->

         <div id="content" style="overflow-x:auto;">

            <p><strong>Show Categories</strong></p>

            <table id="table1" class="table table-hover table-striped data-table all-table-design">

               <tbody>

                  <tr>

                     <td>Category Name</td>

                     <td>{{ $category->name}}</td>

                  </tr>

                  <tr>   

                     <td>Slug</td>

                     <td>{{ $category->slug}}</td>                     

                  </tr>

                  <tr>

                     <td>Parent Category</td>

                     <td>

                        @if ($category->parent)

                              {{ $category->parent->name}}

                        @endif

                     </td>

                  </tr>

                  <tr>   

                     <td>Banner</td>

                     @if($category->banner)

                     <td><img src="{{asset($category->banner)}}" alt="{{ $category->name}}" width="100" height="100"></td>

                     @else

                     <td></td>

                     @endif

                  </tr>

                  <tr>   

                     <td>Price</td>

                     <td>{!! $category->price !!}</td>

                  </tr>

                  <tr>

                     <td>Description</td>

                     <td>{!! $category->description !!}</td>

                  </tr>

                  <tr>

                  @if(Auth::user()->is_admin == 1)   

                     <td>Status</td>

                     <td>

                        @if($category->status == 1)

                           <a href="{{ route('categories.status', [$category->id]) }}" class="btn btn-success">Active</a>

                        @else

                        <a href="{{ route('categories.status', [$category->id]) }}" class="btn btn-danger">Inactive</a>

                        @endif

                     </td>   

                  @else

                     <td>Status</td>

                     <td>

                        @if($category->status == 1)

                           <a href="#" class="btn btn-success">Active</a>

                        @else

                        <a href="#" class="btn btn-danger">Inactive</a>

                        @endif

                     </td>

                  @endif

                  </tr>

               </tbody>

               

            </table>

         </div>

      </div>

   </div>

</section>

@stop