@extends('admin.layouts.master')
@section('content')
<ol class="breadcrumb">
   <li><a href="{{url('/dashboard')}}"><i class="fa fa-home"></i> Home</a></li>
   <li class="active">Cache Clear</li>
</ol>

<section class="content">
   <div class="box box-primary">
      <div class="box-body">
         @if ($message = Session::get('success'))
         <div class="alert alert-success">
            <p>{{ $message }}</p>
         </div>
         @endif
         <div id="content" style="overflow-x:auto;">
            <p><strong>Manage Permission</strong></p>
            <th>asdfas</th>
            <th>asdfasf</th>
         </div>
      </div>
   </div>
</section>
@stop
@section('js')
@endsection