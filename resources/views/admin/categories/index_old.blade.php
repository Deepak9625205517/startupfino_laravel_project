@extends('admin.layouts.master')
@section('content')
<ol class="breadcrumb">
   <li><a href="{{url('/dashboard')}}"><i class="fa fa-home"></i> Home</a></li>
   <li class="active">Categories</li>
</ol>
<section class="content-header">
   <h1>
      @can('category-create')
      <a href="{{route('categories.create')}}">
      <button class="btn btn-warning"><i class="fa fa-plus"></i> Add</button>
      </a>
      @endcan    
      <a href="{{route('categories.index')}}">
      <button class="btn btn-primary pull-right"><i class='fa fa-arrow-left'></i> Back</button>
      </a>
   </h1>
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
            <p><strong>Manage Categories</strong></p>
            <table id="table1" class="table-bordered table-striped table-hover table-condensed data-table all-table-design">
               <thead style="background:#00c0ef;color:#fff;">
                  <tr>
                     <th>No</th>
                     <th>Category Name</th>
                     <th>Slug</th>
                     <th>Parent Category</th>
                     <th>Banner</th>
                     <th>Price</th>
                     <th>Description</th>
                     <th>Status</th>
                     <th>Action</th>
                  </tr>
               </thead>
               <tbody>
                       @foreach($categories as $key => $category)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>{{ $category->name}}</td>
                                <td>{{ $category->slug}}</td>
                                <td>
                                    @if ($category->parent)
                                        {{ $category->parent->name}}
                                    @endif
                                </td>
                                @if($category->banner)
                                <td><img src="{{asset($category->banner)}}" alt="{{ $category->name}}" width="100" height="100"></td>
                                @else
                                <td></td>
                                @endif
                                <td>{!! $category->price !!}</td>
                                <td>{!! $category->description !!}</td>
                                <td>
                                    @if($category->status == 1)
                                     <a href="{{ route('categories.status', [$category->id]) }}" class="btn btn-success">Active</a>
                                    @else
                                    <a href="{{ route('categories.status', [$category->id]) }}" class="btn btn-danger">Inactive</a>
                                    @endif
                                </td>
                                <td>
                                    @can('category-edit')
                                    <a href="{{ route('categories.edit', ['category'=> $category->id]) }}" class="btn btn-xs btn-info"><i class="fa fa-edit"></i></a>
                                    @endcan
                                    <form action="{{ route('categories.destroy', ['category'=> $category->id]) }}" method="POST" style="display: inline-block;">
                                        @method('DELETE')
                                        @csrf
                                        @can('category-delete')
                                        <button class="btn btn-xs btn-danger" onclick="return confirm('Are you sure you want to delete this?');"><i class="fa fa-trash"></i></button>
                                        @endcan
                                    </form>
                                </td>
                            </tr>
                            @endforeach
               </tbody>
            </table>
         </div>
      </div>
   </div>
</section>
@stop
@section('js')
@endsection