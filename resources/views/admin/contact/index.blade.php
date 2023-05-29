@extends('admin.layouts.master')

@section('content')
<ol class="breadcrumb">
   <li><a href="{{url('/dashboard')}}"><i class="fa fa-home"></i> Home</a></li>
   <li class="active">Contact</li>
</ol>

<section class="content">
   <div class="box box-primary">
      <div class="box-body">
      <div class="flash-message">
            @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                @if(Session::has('alert-' . $msg))

                <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }}
                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                </p>
                @endif
            @endforeach
        </div>
         <div id="content" style="overflow-x:auto;">
            <p><strong>Manage Contact</strong></p>
            <table id="table1" class="table-bordered table-striped table-hover table-condensed data-table all-table-design">
               <thead style="background:#00c0ef;color:#fff;">
                  <tr>
                     <th>No</th>
                     <th>Name</th>
                     <th>Email</th>
                     <th>Mobile Number</th>
                     <th>Description</th>
                  </tr>
               </thead>
               <tbody>
                       @foreach($records as $key => $record)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>{{ $record->first_name.' '.$record->last_name}}</td>
                                <td>{{ $record->email}}</td>
                                <td>{{ $record->mobile_number}}</td>
                                <td>{{ $record->description}}</td>
                            </tr>
                            @endforeach
               </tbody>
            </table>
         </div>
      </div>
   </div>
</section>

<!-- Start Modal -->
<div class="modal fade" id="question" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <!-- <h5 class="modal-title" id="exampleModalLabel">Question</h5> -->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                </div>
                <div class="modal-body" id="show-data">

                    </video>
                </div>

            </div>
        </div>
    </div>
<!-- End Model -->

@stop
  
  
<script>
   $('#question').on('shown.bs.modal', function (e) {
        var button = e.relatedTarget;

         console.log($(button).attr('data-id'));
        if (button != null) {
            $("#show-data").html('<video width="100%" controls="" id="user-intro-video_show"><source id="show_video" src="'+ $(button).attr('src') +'" type="video/webm"></video>');
        }
    });
</script>