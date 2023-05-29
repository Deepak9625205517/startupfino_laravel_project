@extends('admin.layouts.master')
@section('content')
<section class="content">
  <section class="content-header">
    <div class="back-icon"><a href="{{route('subscriptions.index')}}"><i class="fa fa-arrow-left"></i></a></div>
      <div class="home-icon"> <a href="{{url('/dashboard')}}"><i class="fa fa-home"></i></a> </i></div>
      <h1>Home</h1>
      <h2>Subscription Details</h2>
  </section>
   <div class="box box-primary">
      <div class="box-body">
         <!-- @if ($message = Session::get('success'))
         <div class="alert alert-success">
            <p>{{ $message }}</p>
         </div>
         @endif -->
         <div id="content" style="overflow-x:auto;">
            <p><strong>Manage Subscription Details</strong></p>
            <table id="table1" class="table-bordered table-striped table-hover table-condensed data-table all-table-design">
               <thead style="background:#000;color:#fff;">
                  <tr>
                     <th>No</th>
                     <th>Name</th>
                     <th>Transaction No.</th>
                     <th>Subscribe Category</th>
                     <th>Plan Name</th>
                     <th>Price</th>
                     <th>Plan Date</th>
                     <th>Expiry Date</th>
                     <th>Days</th>
                     <th>Payment Status</th>
                     <th>Status</th>
                  </tr>
               </thead>
               <tbody>
                       @foreach($records as $key => $record)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>{{ $record->first_name}} {{$record->last_name}}</td>
                                <td>{{ $record->transaction_id}}</td>
                                <td>                        
                                    @foreach($record->subscription->categories as $v)
                                       <label class="badge badge-success">{{ $v->name }}</label><br>
                                    @endforeach
                                 </td>
                                <td>{!! $record->subscription ? $record->subscription->title :'' !!}</td>
                                <td>₹{!! $record->price !!}</td>
                                <td>{!! date('d-m-Y', strtotime($record->subscription_date)) !!}</td>
                                <td>{!! date('d-m-Y', strtotime($record->last_date)) !!}</td>
                                <td>{!! $record->days !!}</td>
                                <td>
                                @if($record->transaction_status == 1)
                                     <a class="btn btn-success">Payment Success</a>
                                    @else
                                    <a class="btn btn-danger" style="color:white;">Payment Failed</a>
                                    @endif
                                </td>
                                <td>
                                 @if(Auth::user()->is_admin == 1)
                                    @if($record->status == 1)
                                     <a href="{{ route('subscriptions.user.status', [$record->id]) }}" class="btn btn-success">Active</a>
                                    @else
                                    <a href="{{ route('subscriptions.user.status', [$record->id]) }}" class="btn btn-danger">Inactive</a>
                                    @endif
                                 @else
                                    @if($record->status == 1)
                                     <a class="btn btn-success">Active</a>
                                    @else
                                    <a class="btn btn-danger">Inactive</a>
                                    @endif
                                 @endif
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