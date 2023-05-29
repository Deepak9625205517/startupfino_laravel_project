@extends('admin.layouts.master')
@section('content')
<ol class="breadcrumb">
   <li><a href="{{url('/dashboard')}}"><i class="fa fa-home"></i> Home</a></li>
   <li class="active">Product</li>
</ol>
<section class="content-header">
   <h1>
      @can('product-create')
      <a href="{{route('products.create')}}">
      <button class="btn btn-warning"><i class="fa fa-plus"></i> Add</button>
      </a>
      @endcan    
      <a href="{{route('products.index')}}">
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
            <p><strong>Manage Product</strong></p>
            <table id="table1" class="table-bordered table-striped table-hover table-condensed data-table all-table-design">
               <thead style="background:#00c0ef;color:#fff;">
                  <tr>
                     <th>No</th>
                     <th>Name</th>
                     <th>Details</th>
                     <th width="280px">Action</th>
                  </tr>
               </thead>
               <tbody>
                  @foreach ($products as $product)
                  <tr>
                     <td>{{ ++$i }}</td>
                     <td>{{ $product->name }}</td>
                     <td>{{ $product->detail }}</td>
                     <td>
                        <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                           <!-- <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a> -->
                           @can('product-edit')
                           <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}"><i class="fa fa-edit"></i></a>
                           @endcan
                           @csrf
                           @method('DELETE')
                           @can('product-delete')
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