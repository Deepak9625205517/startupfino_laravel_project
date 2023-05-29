@extends('admin.layouts.master')
@section('content')
<section class="content">
  <section class="content-header">
    <div class="back-icon"><a href="{{route('testmonials.index')}}"><i class="fa fa-arrow-left"></i></a></div>
      <div class="home-icon"> <a href="{{url('/dashboard')}}"><i class="fa fa-home"></i></a> </i></div>
      <h1>Home</h1>
      <h2>Testimonial</h2>
  </section>
<section class="content-header">
   <h1>
      @can('testmonial-create')
      <a href="{{route('testmonials.create')}}">
      <button class="btn btn-warning"><i class="fa fa-plus"></i> Add</button>
      </a>
      @endcan    
      
   </h1>
</section>
   <div class="box box-primary">
      <div class="box-body">
         <!-- @if ($message = Session::get('success'))
         <div class="alert alert-success">
            <p>{{ $message }}</p>
         </div>
         @endif -->
         <div id="content" style="overflow-x:auto;">
            <p><strong>Manage Testimonial</strong></p>
            <table width="100%" id="table1" class="table-bordered table-striped table-hover table-condensed data-table all-table-design">
               <thead style="background:#00c0ef;color:#fff;">
                  <tr>
                     <th>No</th>
                     <th>Name</th>
                     <th>Designation</th>
                     <th>Image</th>
                     <th>Status</th>
                     <th>Action</th>
                  </tr>
               </thead>
               <tbody>
                       @foreach($records as $key => $record)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>{{ $record->name}}</td>
                                <td>{{ $record->designation}}</td>         
                                <td><img src="{{asset($record->image)}}" alt="{{$record->title}}" width="100" height="100"></td>
                                <td>
                                    @if($record->status == 1)
                                     <a href="{{ route('testmonials.status', [$record->id]) }}" class="btn btn-success">Active</a>
                                    @else
                                    <a href="{{ route('testmonials.status', [$record->id]) }}" class="btn btn-danger">Inactive</a>
                                    @endif
                                </td>
                                <td>
                                    @can('testmonial-edit')
                                    <a href="{{ route('testmonials.edit', [$record->id]) }}" class="btn btn-xs btn-success mr-8"><i class="fa fa-edit"></i></a>
                                    @endcan
                                    <form action="{{ route('testmonials.destroy', [$record->id]) }}" method="POST" style="display: inline-block;">
                                        @method('DELETE')
                                        @csrf
                                        @can('testmonial-delete')
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