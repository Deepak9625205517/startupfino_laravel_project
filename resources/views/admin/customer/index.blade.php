@extends('admin.layouts.master')
@section('content')
<section class="content">
  <section class="content-header">
    <div class="back-icon"><a href="{{route('customers.index')}}"><i class="fa fa-arrow-left"></i></a></div>
      <div class="home-icon"> <a href="{{url('/dashboard')}}"><i class="fa fa-home"></i></a> </i></div>
      <h1>Home</h1>
      <h2>Customer</h2>
  </section>
<section class="content-header">
   <h1>
      
      <a href="{{route('customers.create')}}">
      <button class="btn btn-warning"><i class="fa fa-plus"></i> Add</button>
      </a>
      
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
            <p><strong>Manage Customer</strong></p>
            <table width="100%" id="table1" class="table-bordered table-striped table-hover table-condensed data-table all-table-design">
               <thead>
                  <tr>
                     <th>No</th>
                     <th>Name</th>
                     <th>Email</th>
                     <th>Mobile Number</th>
                     <th>Roles</th>
                     <th>Status</th>
                     <th width="280px">Action</th>
                  </tr>
               </thead>
               <tbody>
               @foreach ($data as $key => $user)
                  <tr>
                     <td>{{ ++$i }}</td>
                     <td>{{ $user->name }}</td>
                     <td>{{ $user->email }}</td>
                     <td>{{ $user->mobile_number }}</td>
                     <td>
                        
                        @if(!empty($user->getRoleNames()))
                        @foreach($user->getRoleNames() as $v)
                           <label class="badge badge-success">{{ $v }}</label>
                        @endforeach
                        @endif
                     </td>
                     <td>
                           @if($user->status == 1)
                              <a href="{{ route('customers.status', [$user->id]) }}" class="btn btn-success">Active</a>
                           @else
                           <a href="{{ route('customers.status', [$user->id]) }}" class="btn btn-danger">Inactive</a>
                           @endif
                        </td>
                     <td>
                        <!-- <a class="btn btn-warning" href="{{ route('customers.show',$user->id) }}">Show</a> -->
                         <a class="btn btn-success mr-8" href="{{ route('customers.edit',$user->id) }}"><i class="fa fa-edit"></i></a>
                        {!! Form::open(['method' => 'DELETE','route' => ['customers.destroy', $user->id],'style'=>'display:inline']) !!}
                          <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this?');"><i class="fa fa-trash"></i></button>
                        {!! Form::close() !!}
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