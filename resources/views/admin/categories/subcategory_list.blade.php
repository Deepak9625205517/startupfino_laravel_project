 
@extends('admin.layouts.master')
@section('content')
<section class="content">
  <section class="content-header">
    <div class="back-icon"><a href="{{route('categories.index')}}"><i class="fa fa-arrow-left"></i></a></div>
      <div class="home-icon"> <a href="{{url('/dashboard')}}"><i class="fa fa-home"></i></a> </i></div>
      <h1>Home</h1>
      
      <h2><a href="{{ route('subCategoryList.index', [$id]) }}">{{$parent}}</a></h2>
      
  </section>

<ol class="breadcrumb">
   <li><a href="{{url('/dashboard')}}"><i class="fa fa-home"></i> Home</a></li>
   <li class="active"><a href="{{ route('subCategoryList.index', [$id]) }}">{{$parent}}</a></li>
</ol>
<section class="content-header">   
@can('category-create')
      <a href="{{route('categories.create')}}">
      <button class="btn btn-warning"><i class="fa fa-plus"></i> Add</button>
      </a>
      @endcan 
        
</section>
   <div class="row">
      
      <div class="col-md-12">
      
         <!-- @if ($message = Session::get('fail'))
         <div class="alert alert-danger">
            <p>{{ $message }}</p>
         </div>
         @endif -->
         <div class="box">
            @foreach($records as $record) 
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                    
                    <div class="document-box">
                    <div class="d-flex mr-3">
                    <span class="me5"><img  src="{{asset('front/img/folder-icon.svg')}}" alt=""></span>
                    <span>{{$record->name}}</span></div>
                    <div>
                    @can('category-edit')<a href="{{ route('categories.edit', ['category'=> $record->id]) }}" class="btn btn-xs btn-success"><i class="fa fa-edit"></i></a>@endcan

                    <form action="{{ route('categories.destroy', ['category'=> $record->id]) }}" method="POST" style="display: inline-block; margin-bottom:0px;">
                        @method('DELETE')
                        @csrf
                        @can('category-delete')<button class="btn btn-xs btn-danger" onclick="return confirm('Are you sure you want to delete this?');"><i class="fa fa-trash"></i></button>@endcan
                    @can('category-show')<a href="{{ route('categories.show', ['category'=> $record->id]) }}" class="btn btn-xs btn-warning"><i class="fa fa-eye"></i></a>@endcan
                    </div>
                    </div>
                </div>
            @endforeach    
        </div>
      </div>
   </div>
</section>
@stop