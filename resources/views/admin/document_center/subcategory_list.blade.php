<style>

.docs-template-heading {
margin-left: 20px;
}

  .document-box {
    display: flex;
    align-items: center;
    background: #e9e9e9;
    padding: 12px 15px;
    margin-top: 20px;
    border-radius: 4px;
    justify-content: space-between;
  }
  .document-box h4 {
    font-size: 14px;
  }
  .document-box .mr-3 {
    margin-right: 15px;
    color: #4d5558;
  }
  .mr-8 {
    margin-right: 8px;
  }

  a .docs-card {
    color: black;
  }
  a .docs-card:hover {
    box-shadow: 0 0 0 1px #b1b1b4;
  }
  .docs-card {
    display: flex;
    align-items: center;
    height: 60px;
    background: #e7e7e7 !important;
    border-radius: 4px;
    margin-bottom: 20px;
    padding: 0px 20px;
    margin-top: 25px;
  }
  .docs-card .fa {
    color: #b3b3b3 !important;
    font-size: 23px;
  }
  .docs-card p {
    font-size: 16px !important;
    font-weight: 600;
    margin-left: 20px;
    margin-bottom: 0px;
  }
</style>
@extends('admin.layouts.master')
@section('content')
<section class="content">
  <section class="content-header">
    <div class="back-icon"><a href="{{url('/dashboard')}}"><i class="fa fa-arrow-left"></i></a></div>
      <div class="home-icon"> <a href="{{url('/dashboard')}}"><i class="fa fa-home"></i></a> </i></div>
      <h1>Home</h1>
      <h2>{{$parent}}</h2>
  </section>
  <section class="content-header">
    <h1>
        @can('document-center-create')
        <a href="{{route('document-centers.create')}}">
        <button class="btn btn-warning"><i class="fa fa-plus"></i> Add</button>
        </a>
        
        @endcan
    </h1>
    <input type="hidden" id="category_id" value="{{$id}}">
  </section>

   <div class="row">
      
      <div class="col-md-12">
         <div class="box">
            @foreach($records as $record) 
              <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                <a href="{{route('documentListSubcategory.index', [base64_encode($record->parent_id), base64_encode($record->id)])}}">
                <div class="docs-card">
                    <img  src="{{asset('front/img/folder-icon.svg')}}" alt="">
                    <p>{{$record->name}}</p>
                </div>
                </a>
            </div> 
            @endforeach    
        </div>
      </div>

   </div>
</section>

<section class="docs-template-section">
  <div class="container">
    <div class="docs-template-heading">
      <h4><i class="fa fa-file-pdf-o" aria-hidden="true"></i> &nbsp;Top 50 Templates</h4>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-12">
        <div class="box" id="getDocumentSubcategoryList">
    
           <!--  -->
           
           <!--  -->

        </div>
      </div>
     </div>

    </div>
</section>
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
/* Subcategory WISE */  
  var sub_page = 1;

  infinteLoadMoreSubcategory(sub_page);

$(window).scroll(function () {

    if ($(window).scrollTop() + $(window).height() >= $(document).height()) {

        sub_page++;

        infinteLoadMoreSubcategory(sub_page);

    }

});

function infinteLoadMoreSubcategory(sub_page) {
    $.ajax({

        type: 'GET',

        url: '{{url("sub-category-document-list/".base64_decode($id))}}?page=' + sub_page,

        data: {},

        dataType: 'html',

        })

        .done(function (response) {

            console.log("length : " +  response.length);

            if (response.length == 0) {

                $('.auto-load').html("We don't have more data to display :(");

                return;

            }

            $('.auto-load').hide();

            $("#getDocumentSubcategoryList").append(response);

        })

        .fail(function (jqXHR, ajaxOptions, thrownError) {

            console.log('Server error occured');

        });

}
</script>

