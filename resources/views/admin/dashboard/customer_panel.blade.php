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
              .doc_tow {
                  width: 100%;
                  border-radius: inherit;
                  object-fit: cover;
                  object-position: top;
              }

              /* end customer panel css */
     
    </style>
<!-- New Card Section start -->
<!-- New Card Section start -->
<section>
              <div class="container">
                
                <p class="core_pc">8 Core Business Modules</p>
                <div class="row">
                @foreach(getCategoryList() as $value)   
                  <div class="col-md-6">
                    <a href="{{ route('documentCategoryList.index', [base64_encode($value->id)]) }}">
                    <div class="docs-box">
                        <i class="{{!empty($value->icon_code) ? $value->icon_code : 'fa fa-group'}}"></i>
                        <hr />
                        <h4>{{$value->name}}</h4>
                      </div>
                    </a>
                  </div>
                @endforeach  
                </div>
              </div>
            </section>


<section class="docs-card-section">
  <div class="container">
  <div class="docs-card-heading">
    <h4>
      <i class="fa fa-file" aria-hidden="true"></i>&nbsp; Document
      Types
    </h4>
  </div>
    <div class="row"> 
        @foreach(getSubCategoryList() as $subc) 
            <div class="col-md-3">
                <a href="{{route('documentListSubcategory.index', [base64_encode($subc->parent_id), base64_encode($subc->id)])}}">
                <div class="docs-card">
                    <i class="fa fa-folder"></i>
                    <p>{{$subc->name}}</p>
                </div>
                </a>
            </div> 
        @endforeach 
    </div>
  </div>
</section>

<section class="docs-template-section">
  <div class="container">
  <div class="docs-template-heading">
                  <h4>
                    <i class="fa fa-file-pdf-o" aria-hidden="true"></i> &nbsp;
                    Top 50 Templates
                  </h4>
                </div>
    <div class="row" id="getDocumentList">
    

    </div>
    <!-- Data Loader -->
    <!-- <div class="auto-load text-center">
            <svg version="1.1" id="L9" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                x="0px" y="0px" height="60" viewBox="0 0 100 100" enable-background="new 0 0 0 0" xml:space="preserve">
                <path fill="#000"
                    d="M73,50c0-12.7-10.3-23-23-23S27,37.3,27,50 M30.9,50c0-10.5,8.5-19.1,19.1-19.1S69.1,39.5,69.1,50">
                    <animateTransform attributeName="transform" attributeType="XML" type="rotate" dur="1s"
                        from="0 50 50" to="360 50 50" repeatCount="indefinite" />
                </path>
            </svg>
        </div>
         -->
  </div>
</section>
<!-- New Card Section End -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
  var ENDPOINT = "{{ url('document-list') }}";

var page = 1;

infinteLoadMore(page);

$(window).scroll(function () {

    if ($(window).scrollTop() + $(window).height() >= $(document).height()) {

        page++;

        infinteLoadMore(page);

    }

});

function infinteLoadMore(page) {

    $.ajax({

        type: 'GET',

        url: '{{url("document-list")}}?page=' + page,

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

            $("#getDocumentList").append(response);

        })

        .fail(function (jqXHR, ajaxOptions, thrownError) {

            console.log('Server error occured');

        });

}


</script>