@extends('admin.layouts.master')
@section('content')
<section class="content">
  <section class="content-header">
    <div class="back-icon"><a href="{{route('seo-pages.index')}}"><i class="fa fa-arrow-left"></i></a></div>
      <div class="home-icon"> <a href="{{url('/dashboard')}}"><i class="fa fa-home"></i></a> </i></div>
      <h1>Home</h1>
      <h2>Seo Page</h2>
  </section>
<section class="content-header">
   <h1>
      @can('seo-page-create')
      <a href="{{route('seo-pages.create')}}">
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
            <p><strong>Manage Seo Page</strong></p>
            <table width="100%" id="table1" class="table-bordered table-striped table-hover table-condensed data-table all-table-design">
               <thead style="background:#00c0ef;color:#fff;">
                  <tr>
                     <th>No</th>
                     <th>Page Name</th>
                     <th>Meta Title</th>
                     <th>Meta Keyword</th>
                     <th>Meta Description</th>
                     <th>Action</th>
                  </tr>
               </thead>
               <tbody>
                       @foreach($records as $key => $record)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>{{ $record->page->title ?? ''}}</td>
                                <td>{{ $record->meta_title}}</td>
                                <td>{!! $record->meta_keyword !!}</td>
                                <td>{!! $record->meta_description !!}</td>
                                
                                <td>
                                    @can('seo-page-edit')
                                    <a href="{{ route('seo-pages.edit', [$record->id]) }}" class="btn btn-xs btn-info"><i class="fa fa-edit"></i></a>
                                    @endcan
                                    <form action="{{ route('seo-pages.destroy', [$record->id]) }}" method="POST" style="display: inline-block;">
                                        @method('DELETE')
                                        @csrf
                                        @can('seo-page-delete')
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