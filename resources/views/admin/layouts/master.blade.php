<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8">

    <title> Startup Fino </title>

    <link href="http://localhost/startupfino/public/front/img/logo.png" rel="shortcut icon" type="image/ico">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

    <meta name="apple-mobile-web-app-capable" content="yes">

    <meta name="apple-touch-fullscreen" content="yes">

    <meta name="apple-mobile-web-app-status-bar-style" content="default">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.4/css/bootstrap.min.css" integrity="sha512-FOS5ANNUsuvefA5Fm6hZBLsxqfF105LIysEgV8VNz29jZLVYIhI+MOLKPBmMXgkHhARFHf5pE7KbXOLE6TXW0A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://transloadit.edgly.net/releases/uppy/v0.29.0/dist/uppy.min.css" rel="stylesheet">

    @if(Auth::user()->is_admin == 2)
      <link href="{{asset('admin/css/user_style.css')}}" rel="stylesheet" type="text/css">
      <link href="{{asset('admin/css/user_style_responsive.css')}}" rel="stylesheet" type="text/css">
    @else
      <link href="{{asset('admin/css/style.css')}}" rel="stylesheet" type="text/css">
      <link href="{{asset('admin/css/style_responsive.css')}}" rel="stylesheet" type="text/css">
    @endif    

   

    <!-- Toaster -->

	

    

	

    <!-- End -->



    <!-- <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> -->



    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic"> -->

    <!-- <link href="https://transloadit.edgly.net/releases/uppy/v0.29.0/dist/uppy.min.css" rel="stylesheet"> -->

    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->



   <style>
.container {
        width: 95%;
        margin: auto;
        font-size: 25px;
      }

      #content {
        border: solid 2px #ccc;
        padding: 10px;
        background-color: #fff;
        margin-bottom: 10px;
      }

      #content p {
        color: #000000;
        margin: 5px;
        padding: 5px;
      }

      #content > p {
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

      .breadcrumb {
        margin-top: 12px;
      }

      .text-danger {
        color: #f00;
      }
	  
/* Customer panel Css */

           

              .docs-box .fa {
                font-size: 40px;
                margin-top: 25px;
                color: #5236ff;
              }

              .docs-box h4 {
                color: #000;
                font-size: 16px;
                font-weight: 700;
                margin-top: 15px;
                text-transform: uppercase;
                font-family: "Inter", sans-serif;
              }

              .docs-box hr {
                width: 251px;
                margin-bottom: 0px !important;
              }

              .docs-card-section {
                margin-top: 20px;
                border-top: 1px solid #f5f5f5ab;
              }

              .docs-card-heading h4 {
                font-size: 18px;
                font-weight: 600;
                margin-bottom: 30px;
                position: relative;
                margin-top: 30px;
              }
 
              a .docs-card:hover {
                box-shadow: 0 0 0 1px #b1b1b4;
              }

              
              .docs-card .fa {
                color: #dcdcdf;
                font-size: 23px;
              }
 

              .docs-template-section {
                margin-top: 20px;
                border-top: 1px solid #f5f5f5ab;
              }

              .docs-template-heading h4 {
                font-size: 18px;
                font-weight: 600;
                margin-bottom: 30px;
                position: relative;
                margin-top: 30px;
              }

           

              a .main-box:hover {
                box-shadow: 0 0 0 1px #b1b1b4;
              }

              

              .main-box .image-box {
                /* text-align: center;
                            background: white;
                            display: inline-block; */
              }

              .document-sub-box h4 {
                font-size: 15px;
                text-align: left;
                line-height: 19px;
                font-weight: 600;
              }

          

              .document-sub-box .mr-3 {
                margin-right: 15px;
                color: #4d5558;
              }

              @media screen and (max-width: 992px) {
                .main-box {
                  width: 100%;
                }
              }

              /* end customer panel css */

    </style>

    <!--Reference to jQuery-->

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> -->

    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>



    <script>
        $(document).ready(function () {
            $("#reset").click(function (e) {
                location.reload();
            });

            $('#table1').DataTable();
        });
    </script>
</head>
<body class="hold-transition skin-black fixed sidebar-mini">
<div class="modal modal-danger fade" id="confirm-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Confirm</h4>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-outline delete">Delete</button>
            </div>
        </div>
    </div>
</div>

<div class="wrapper">

    @include('admin.layouts.header')

    @include('admin.layouts.sidebar')

    <div class="content-wrapper">   
    <div class="row">
      @yield('content')
      </div>
     </div>

    @include('admin.layouts.footer')

</div>





<script src="{{ asset('admin/js/vendor.js') }}" type="text/javascript"></script>

<script src="{{ asset('admin/js/app.js') }}" type="text/javascript"></script>

<script src="{{ asset('admin/js/jquery.min.js') }}" type="text/javascript"></script>

<script src="{{asset('admin/ckeditor/ckeditor.js') }}" type="text/javascript"></script>

<script src="https://transloadit.edgly.net/releases/uppy/v0.29.0/dist/uppy.min.js"></script>

<script type="text/javascript">

    $(function() {

        var url = window.location.href;

        var $match = $('.sidebar a[href="'+ url +'"]');

        if($match.closest('li.treeview').length > 0 ) {

            $match.closest('li.treeview').addClass('active');

        }

        $match.closest('li').addClass('active');

    });

</script>



<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" />

<!--Reference to jQuery-->

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> -->

    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>



    <script>

        $(document).ready(function () {

            $("#reset").click(function (e) {

                location.reload();

            });



            $('#table1').DataTable();



        });

    </script>



<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script> -->

@yield('js')

<script type="text/javascript" >

	$(document).ready(function() {

		$("#category_id").change(function() {

			var id = $("#category_id").val();

			

			console.log(id);

            

    		$.ajaxSetup({

                headers: {

                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')



                }

               });



			$.ajax({

				type: "GET",

				url : "{{url('select-category')}}",

                data: {

                    _token:'{{csrf_field()}}',

                        id: id,

                    },

				success: function(data) {

					console.log(data); 

                    $("#subcategory_id").html(data);

				}

			});



		});



	}); 

</script>

<script>

        $(document).ready(function(){

            function createSlug(value) {

                value = value.replace(/\s\s+/g, ' ');

                let slug = value.split(' ').join('-').toLowerCase();

                slug = slug.replace(/--+/g, '-');

                slug = slug.replace(/%+/g, '-');

                $('#slug').val(slug);

            }



            $('#title').keyup(function(e) {

                createSlug($(this).val());

            });



            $('#slug').keyup(function(e) {

                createSlug($(this).val());

            });

        })

        

</script>

<script>

  @if(Session::get('success'))

  toastr.options =

  {

  	"closeButton" : true,

  	"progressBar" : true

  }

  		toastr.success("{{ $message ?? '' }}");

  @endif



  @if(Session::get('fail'))

  toastr.options =

  {

  	"closeButton" : true,

  	"progressBar" : true

  }

  		toastr.error("{{ $message ?? '' }}");

  @endif



  @if(Session::has('info'))

  toastr.options =

  {

  	"closeButton" : true,

  	"progressBar" : true

  }

  		toastr.info("{{ $message ?? '' }}");

  @endif



  @if(Session::has('warning'))

  toastr.options =

  {

  	"closeButton" : true,

  	"progressBar" : true

  }

  		toastr.warning("{{ $message ?? '' }}");

  @endif



  @foreach (['danger', 'warning', 'success', 'info'] as $msg)

    @if(Session::has('alert-' . $msg))



        toastr.options =

        {

            "closeButton" : true,

            "progressBar" : true

        }

                toastr.success("{{ Session::get('alert-' . $msg) }}");



    @endif

   @endforeach

</script>

<script>

    $(document).ready(function(){

       $('#submit').on('click', function(e) {

        e.preventDefault();

  

            var first_date = $('#first_date').val();        

            var second_date = $('#second_date').val();

        

            $.ajaxSetup({

                headers: {

                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

                }

          });



          $.ajax({

              type: 'GET',

              url: "{{route('getFilter')}}",

              data: {

                "_token":'{{csrf_token()}}',

                first_date   : first_date,

                second_date  : second_date,

              },

              //  dataType: 'html',

               success: function(data){

                console.log(data.total_paid_amount);

                

                if(data.success){

                    $("#total_paid_amount").html(data.total_paid_amount);

                    $("#renewal_amount").html(data.renewal_amount);

                    $("#missed_subscription").html(data.missed_subscription);

                    $("#total_users").html(data.total_users);

                    $("#total_customers").html(data.total_customers);

                    $("#total_new_customers").html(data.total_new_customers);

                    $("#no_of_enquriry").html(data.no_of_enquriry);

                    $("#no_of_document").html(data.no_of_document);

                 

                    

                 }else{

                  swal({

                        title: "Error",

                        text : data.error,

                        icon : "warning",



                        closeModal: true,

                        buttons: {

                            cancel: false,

                            ok:true

                        },

                    }).then((value) => {

                      location.reload();

                    });

                    

                 }      

              },

              error: function(response, status, error){

                  console.log(response.responseJSON.errors);

                  var arr = response.responseJSON.errors;

                  $('#first_date').html(arr.first_name);

                  $('#second_date').html(arr.last_name);

                  

              }

          });

    });

});



        



</script>

<script>



function getDocumentId(docid) {   



    if(document.getElementById('check'+docid).checked)

    {

        document.getElementById('check'+docid).style.color="#3c8dbc";

    }else{



        document.getElementById('check'+docid).style.color="gray";

    }       

        $.ajaxSetup({

                headers: {

                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

                }

          });



          $.ajax({

              type: 'POST',

              url: "{{route('add.fevorite')}}",

              data: {

                "_token":'{{csrf_token()}}',

                doc_id   : docid,

              },

              

               success: function(data){

                console.log(data.success);

                toastr.options =

                {

                    "closeButton" : true,

                    "progressBar" : true

                }

                        toastr.success(data.success);                                  

              }

              

          });

       

        }





/* For Document Search */ 

// var options = {



// url: function(phrase) {

//   return "{{route('filter.documents')}}";

// },



// getValue: function(element) {

//   console.log(element);

//   return element.document_name;

// },



// ajaxSettings: {

//   dataType: "json",

//   method: "GET",

//   data: {

//     dataType: "json"

//   }

// },
// preparePostData: function(data) {

//   data.phrase = $("#search_document_data").val();

//   return data;

// },


// };



// $("#search_document_data").easyAutocomplete(options);



  </script>
  <script type="text/javascript">
  
  $(document).ready(function(){
	
    $(document).on('click', '.pagination a', function(event){
        event.preventDefault(); 
       
        var page = $(this).attr('href').split('page=')[1];
        fetch_user_data(page);
    });

    function fetch_user_data(page)
    {
        $.ajax({
            url:"{{url('pagination-ajax')}}?page="+page,
            success:function(data)
            {
                $('#user_table').html(data);
            }
        });
    }	 
});
  
$(document).ready(function(){  
    $("#dSuggest").keyup(function(){  
        var value = $(this).val().toLowerCase();
    $("#search_data tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
    });  
}); 

// $(document).ready(function(){
//   $("#dSuggest").keyup(function() {
   
    
//   });
// });

  </script>

</body>

</html>

