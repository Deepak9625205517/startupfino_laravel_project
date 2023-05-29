<style>
  .document-sub-box {
    display: flex;
    align-items: center;
    background: #e9e9e9;
    padding: 15px 15px;
    height: 55px;
  }

  .document-sub-box .mr-3 {
    margin-right: 15px;
    color: #4d5558;
  }

  .document-sub-box h4 {
    font-size: 14px;
    text-align: left;
    line-height: 19px;
  }

  .box .main-box:hover {
    box-shadow: 0 0 0 1px #b1b1b4;
  }

  .container {
      width: 1000px;
      margin: auto;
      font-size: 25px;
    }


    #content {
      border: solid 2px #CCC;
      padding: 10px;
      background-color: #FFF;
      margin-bottom: 10px;
    }

    #content p {
      color: #000000;
      margin: 5px;
      padding: 5px;
    }

    #content>p {
      color: #000000;
      margin: 5px;
      font-size: 20px;
    }

    #content #table2 tr {
      background-color: #f1ebeb;
    }

    #content #table3 tr {
      background-color: #c5f3c8;
    }

    #content #table4 tr {
      background-color: #f3c5f3;
    }

    

    .text-danger {
      color: #f00;
    }

</style> 
@extends('admin.layouts.master') @section('content') 

<section class="content">
        <div class="row">
          <div class="col-md-12">
          <section class="content-header mb-2">
              <div class="back-icon"><a href="{{route('documentCategoryList.index', [base64_encode($category->parent->id)])}}"><i class='fa fa-arrow-left'></i></a></div>
              <div class="home-icon"> <a href="{{url('/dashboard')}}"><i class="fa fa-home"></i></a> </i></div>
              <h1>Home</h1>
              <h2><a href="{{route('documentCategoryList.index', [base64_encode($category->parent->id)])}}">{{$category->parent->name}}</a></h2>
            </section>
            <div class="box" id="document_lists_data">
     
            
       
            </div>
          </div>
	   	</div>  
  </section>

@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
/* Subcategory WISE */  
  var doc_page = 1;

  infinteLoadMoreDocuments(doc_page);

$(window).scroll(function () {

    if ($(window).scrollTop() + $(window).height() >= $(document).height()) {

        doc_page++;

        infinteLoadMoreDocuments(doc_page);

    }

});

function infinteLoadMoreDocuments(doc_page) {
    $.ajax({

        type: 'GET',

        url: '{{url("category-document-list/".$category->parent->id)}}?page=' + doc_page,

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

            $("#document_lists_data").append(response);

        })

        .fail(function (jqXHR, ajaxOptions, thrownError) {

            console.log('Server error occured');

        });

}
</script>