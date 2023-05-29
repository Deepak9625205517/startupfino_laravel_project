@extends('admin.layouts.master')
@section('content')
<section class="content">
  <section class="content-header">
    <div class="back-icon"><a href="{{route('pages.index')}}"><i class="fa fa-arrow-left"></i></a></div>
      <div class="home-icon"> <a href="{{url('/dashboard')}}"><i class="fa fa-home"></i></a> </i></div>
      <h1>Home</h1>
      <h2>Pages</h2>
  </section>
<section class="content-header">
   <h1>
      @can('page-create')
      <a href="{{route('pages.create')}}">
      <button class="btn btn-warning"><i class="fa fa-plus"></i> Add</button>
      </a>
      @endcan    
      
   </h1>
</section>
   <div class="box box-primary">
      <div class="box-body">
         
         <div id="content" style="overflow-x:auto;">
            <p><strong>Manage Pages</strong></p>
            <table width="100%" id="table1" class="table-bordered table-striped table-hover table-condensed data-table all-table-design">
               <thead>
                  <tr>
                     <th>No</th>
                     <th>Title</th>
                     <th>Slug</th>
                     <th>Category</th>
                     <th>Status</th>
                     <th>Action</th>
                  </tr>
               </thead>
               <tbody>
                       @foreach($records as $key => $record)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>{{ $record->title}}</td>
                                <td>{{ $record->slug}}</td>
                                <td>{{ $record->category->name ?? ''}}</td>
                               <td>
                                    @if($record->status == 1)
                                     <a href="{{ route('pages.status', [$record->id]) }}" class="btn btn-success">Active</a>
                                    @else
                                    <a href="{{ route('pages.status', [$record->id]) }}" class="btn btn-danger">Inactive</a>
                                    @endif
                                </td>
                                <td>
                                    @can('page-edit')
                                    <a href="{{ route('pages.edit', [$record->id]) }}" class="btn btn-xs btn-success mr-8"><i class="fa fa-edit"></i></a>
                                    @endcan
                                    <form action="{{ route('pages.destroy', [$record->id]) }}" method="POST" style="display: inline-block;">
                                        @method('DELETE')
                                        @csrf
                                        @can('page-delete')
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