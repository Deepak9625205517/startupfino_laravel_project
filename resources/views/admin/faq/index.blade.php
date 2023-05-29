@extends('admin.layouts.master')

@section('content')

<section class="content">
  <section class="content-header">
    <div class="back-icon"><a href="{{route('faq.index')}}"><i class="fa fa-arrow-left"></i></a></div>
      <div class="home-icon"> <a href="{{url('/dashboard')}}"><i class="fa fa-home"></i></a> </i></div>
      <h1>Home</h1>
      <h2>FAQ</h2>
  </section>

<section class="content-header">

   <h1>


      <a href="{{route('faq.create')}}">

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

            <p><strong>Manage Faq</strong></p>

            <table width="100%" id="table1" class="table-bordered table-striped table-hover table-condensed data-table all-table-design">

               <thead style="background:#00c0ef;color:#fff;">
                  <tr>
                     <th>No</th>
                     <th>Question</th>
                     <th>Answer</th>
                     <th>Status</th>
                     <th  style="width: 70px;">Action</th>
                  </tr>
               </thead>
               <tbody>
                       @foreach($records as $key => $v)
                            <tr>
                                <td>{{ ++$key }}</td>

                                <td>{{ $v->questions}}</td>
                                <td>{!! $v->answer !!}</td>
                                <td>
                                    @if($v->status == 1)
                                     <a href="{{ route('faq.status', $v->id) }}" class="btn btn-success">Active</a>
                                    @else
                                    <a href="{{ route('faq.status', $v->id) }}" class="btn btn-danger">Inactive</a>
                                    @endif
                                </td>
                                <td>

                                    

                                    <a href="{{ route('faq.edit', $v->id) }}" class="btn btn-xs btn-success mr-8"><i class="fa fa-edit"></i></a>

                                    <form action="{{ route('faq.destroy', $v->id) }}" method="POST" style="display: inline-block;">

                                        @method('DELETE')

                                        @csrf

                                       

                                        <button class="btn btn-xs btn-danger" onclick="return confirm('Are you sure you want to delete this?');"><i class="fa fa-trash"></i></button>


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