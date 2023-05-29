@extends('admin.layouts.master')
@section('content')
<section class="content">
  <section class="content-header">
    <div class="back-icon"><a href="{{route('roles.index')}}"><i class="fa fa-arrow-left"></i></a></div>
      <div class="home-icon"> <a href="{{url('/dashboard')}}"><i class="fa fa-home"></i></a> </i></div>
      <h1>Home</h1>
      <h2>Role</h2>
  </section>
<section class="content-header">
   <h1>
      @can('role-create')
      <a href="{{ route('roles.create') }}">
      <button class="btn btn-warning"><i class="fa fa-plus"></i> Create New Role</button>
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
            <p><strong>Manage Role</strong></p>
            <table width="100%" id="table1" class="table-bordered table-striped table-hover table-condensed data-table all-table-design">
               <thead style="background:#00c0ef;color:#fff;">
                  <tr>
                     <th>No</th>
                     <th>Name</th>
                     <th width="280px">Action</th>
                  </tr>
               </thead>
               <tbody>
                  @foreach ($roles as $key => $role)
                  <tr>
                     <td>{{ ++$key }}</td>
                     <td>{{ $role->name }}</td>
                     <td>
                        <form action="{{ route('roles.destroy',$role->id) }}" method="POST">
                           <!-- <a class="btn btn-info" href="{{ route('roles.show',$role->id) }}">Show</a> -->
                           @can('role-edit')
                           <a class="btn btn-success me2" href="{{ route('roles.edit',$role->id) }}"><i class="fa fa-edit"></i></a>
                           @endcan
                           @csrf
                           @method('DELETE')
                           @can('role-delete')
                           <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this?');"><i class="fa fa-trash"></i></button>
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