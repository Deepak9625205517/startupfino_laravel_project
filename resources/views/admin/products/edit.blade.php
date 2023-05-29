@extends('admin.layouts.master')

@section('content')

<ol class="breadcrumb">
        <li><a href="{{url('/dashboard')}}"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Edit Product</li>
    </ol>
    <section class="content-header">
        <h1>
        <a href="{{route('products.index')}}">
             <button class="btn btn-primary pull-right"><i class='fa fa-arrow-left'></i> Back</button>
         </a>

        </h1>
    </section>
    <section class="content">
    <div class="row">
        
       <div class="col-md-12">
       <!-- @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                </ul>
            </div>
        @endif -->

        
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Basic Information</h3>
                </div>
            <div class="box-body">
            <form action="{{ route('products.update',$product->id) }}" method="POST">
                @csrf
                @method('PUT')

                        <div class="form-group">
                            <label>Prduct Name</label>
                            <input type="text" name="name" value="{{ $product->name }}" class="form-control" placeholder="Name">
                        </div>

                        <div class="form-group">
                            <label>Detail</label>
                            <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail">{{ $product->detail }}</textarea>
                        </div>


                        <div class="box-footer">
                            <button type="submit" name="submit" class="btn btn-primary pull-right">Submit</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

</section>
@stop
