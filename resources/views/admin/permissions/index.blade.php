@extends('admin.layouts.master')
@section('content')
<section class="content">
  <section class="content-header">
    <div class="back-icon"><a href="{{route('permissions.index')}}"><i class="fa fa-arrow-left"></i></a></div>
      <div class="home-icon"> <a href="{{url('/dashboard')}}"><i class="fa fa-home"></i></a> </i></div>
      <h1>Home</h1>
      <h2>Permission</h2>
  </section>
<section class="content-header">
   <h1>
      @can('permission-create')
      <a href="{{route('permissions.create')}}">
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
            <p><strong>Manage Permission</strong></p>
            <table width="100%" id="table1" class="table-bordered table-striped table-hover table-condensed data-table all-table-design">
               <thead style="background:#00c0ef;color:#fff;">
                  <tr>
                     <th>No</th>
                     <th>Name</th>
                     <th>Guard Name</th>
                     <th>Action</th>
                  </tr>
               </thead>
               <tbody>
                       @foreach($permissions as $key => $permission)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>{{ $permission->name}}</td>
                                <td>{{ $permission->guard_name}}</td>
                                
                                <td>
                                    @can('permission-edit')
                                    <a href="{{ route('permissions.edit', [$permission->id]) }}" class="btn btn-success me2"><i class="fa fa-edit"></i></a>
                                    @endcan
                                    <form action="{{ route('permissions.destroy', [$permission->id]) }}" method="POST" style="display: inline-block;">
                                        @method('DELETE')
                                        @csrf
                                        @can('permission-delete')
                                        <button class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this?');"><i class="fa fa-trash"></i></button>
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