<div class="container-fluid"> 
 <div class="row">
   <form id="form_id">  
    <div class="col-md-5">
       <label>Date Form</label>
       <input type="date" class="form-control getDate" id="first_date" value="{{$inputdate}}">      
    </div>
    <div class="col-md-5">
        <label>Date To</label>
        <input type="date" class="form-control getDate" id="second_date" value="{{$last_date}}">      
    </div>
    <div class="col-md-2">
        <label></label>
        <button type="button" class="btn btn-success form-control getDate" id="submit" style="margin-top: 20px;">Submit</button>      
    </div>
    </form>
 </div>
</div>
<!-- First Row -->

<div class="col-lg-3">
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3 class="text-center">Paid Amount</h3>

                    <p class="text-center" id="total_paid_amount">{{$total_paid_amount}}</p>
                </div>
                <a href="{{route('subscriptions.show')}}" target="_blank" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="small-box bg-green">
                <div class="inner">
                    <h3 class="text-center">Renew Amount</h3>

                    <p class="text-center" id="renewal_amount">{{$renewal_amount}}</p>
                </div>
                <a href="{{route('subscriptions.show')}}" target="_blank" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3 class="text-center">Missed Subscription</h3>

                    <p class="text-center" id="missed_subscription">{{$missed_subscription}}</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="{{route('subscriptions.show')}}" target="_blank" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="small-box bg-red">
                <div class="inner">
                    <h3 class="text-center">Total Users</h3>

                    <p class="text-center" id="total_users">{{$total_users}}</p>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
                <a href="{{route('users.index')}}" target="_blank" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
<!-- End First Row -->

<!-- Second Row -->
<div class="col-lg-3">
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3 class="text-center">Total Customer</h3>

                    <p class="text-center" id="total_customers">{{$total_customers}}</p>
                </div>
                <a href="{{route('customers.index')}}" target="_blank" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="small-box bg-green">
                <div class="inner">
                    <h3 class="text-center">Total New Customer</h3>

                    <p class="text-center" id="total_new_customers">{{$total_new_customers}}</p>
                </div>
                <a href="{{route('customers.index')}}" target="_blank" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3 class="text-center">No. of Enquiry</h3>

                    <p class="text-center" id="no_of_enquriry">{{$no_of_enquriry}}</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="{{route('enquiry.index')}}" target="_blank" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="small-box bg-red">
                <div class="inner">
                    <h3 class="text-center">No. of Documents</h3>

                    <p class="text-center" id="no_of_document">{{$no_of_document}}</p>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
                <a href="{{route('document-centers.index')}}" target="_blank" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
 
<!-- End Second Row -->
<div class="container-fluid">
    

<div class="row">
  <div class="col-lg-6">
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Recent Enquiry</h3>
        <div class="box-tools pull-left">
          <button type="button" class="btn btn-box-tool" data-widget="collapse">
            <i class="fa fa-minus"></i>
          </button>
          <button type="button" class="btn btn-box-tool" data-widget="remove">
            <i class="fa fa-times"></i>
          </button>
        </div>
      </div>
      <div class="box-body">
        <div class="table-responsive">
          <table class="table no-margin">
            <thead>
              <tr>
                <th>Sn.</th>
                <th>Document Name</th>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile Number</th>
              </tr>
            </thead>
            <tbody>
              @foreach($enquriries as $key => $enquririe)  
                <tr>
                  <td>{{$key+1}}</td>
                  <td>{{ !empty($enquririe->documentCenter) ? $enquririe->documentCenter->document_name : 'Contact Us'}}</td>
                  <td>{{ $enquririe->name}}</td>
                  <td>{{ $enquririe->email}}</td>
                  <td>{{ $enquririe->mobile}}</td>
                </tr>
               @endforeach                
            </tbody>
          </table>
        </div>
      </div>
    </div>
   </div>  
   
    <div class="col-lg-6">
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Recent Customer</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse">
              <i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove">
              <i class="fa fa-times"></i>
            </button>
          </div>
        </div>
        <div class="box-body">
          <div class="table-responsive">
            <table class="table no-margin">
              <thead>
                <tr>
                  <th>Sn.</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Mobile Number</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
               @foreach($customers as $key => $customer)  
                <tr>
                  <td>{{$key+1}}</td>
                  <td>{{$customer->name}}</td>
                  <td>{{$customer->email}}</td>
                  <td>{{$customer->mobile_number}}</td>
                  <td>@if($customer->status == 1) <span class="label label-success">Active</span>@else <span class="label label-danger">Inactive</span> @endif</td>
                </tr>
               @endforeach                 
              </tbody>
            </table>
          </div>
        </div>
      </div>
      </div> 

      
   <div class="col-lg-6">
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Recent Subscription</h3>
        <div class="box-tools pull-left">
          <button type="button" class="btn btn-box-tool" data-widget="collapse">
            <i class="fa fa-minus"></i>
          </button>
          <button type="button" class="btn btn-box-tool" data-widget="remove">
            <i class="fa fa-times"></i>
          </button>
        </div>
      </div>
      <div class="box-body">
        <div class="table-responsive">
          <table class="table no-margin">
            <thead>
              <tr>
                <th>Sn.</th>
                <th>Name</th>
                <th>Subs Name</th>
                <th>Expiry Date</th>
                <th>Status</th>
                <th>Transaction Status</th>
              </tr>
            </thead>
            <tbody>
            @foreach($subscriptions as $key => $sub)    
              <tr>
                <td>{{ $key+1 }}</td>
                <td>{{!empty($sub->user) ? $sub->user->name : ''}}</td>
                <td>{{!empty($sub->subscription) ? $sub->subscription->title : ''}}</td>
                <td>{{$sub->last_date}}</td>
                <td>@if($sub->status == 1)<span class="label label-success">Active</span>@else <span class="label label-danger">Inactive</span> @endif</td>
                <td>@if($sub->transaction_status == 1)<span class="label label-success">Paid</span>@else <span class="label label-warning">Unpaid</span> @endif</td>
              </tr>
            @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
   </div>  
    <div class="col-lg-6">
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Renewal Subscription</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse">
              <i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove">
              <i class="fa fa-times"></i>
            </button>
          </div>
        </div>
        <div class="box-body">
          <div class="table-responsive">
            <table class="table no-margin">
              <thead>
              <tr>
                <th>Sn.</th>
                <th>Name</th>
                <th>Subs Name</th>
                <th>Expiry Date</th>
                <th>Status</th>
                <th>Transaction Status</th>
              </tr>
            </thead>
            <tbody>
            @foreach($renewals as $key => $renew)    
              <tr>
                <td>{{ $key+1 }}</td>
                <td>{{!empty($renew) ? $renew->user->name : ''}}</td>
                <td>{{!empty($renew->subscription) ? $renew->subscription->title : ''}}</td>
                <td>{{$renew->last_date}}</td>
                <td>@if($sub->status == 1)<span class="label label-success">Active</span>@else <span class="label label-danger">Inactive</span> @endif</td>
                <td>@if($sub->transaction_status == 1)<span class="label label-success">Paid</span>@else <span class="label label-warning">Unpaid</span> @endif</td>
              </tr>
            @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>

      
</div>