@extends('front.layouts.master') @section('content') 

<section id="templates" class="mt-5">

  <div class="container">

    <div class="row justify-content-center">

      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

        <div class="nav-tab-template">

        <a href="{{route('templates')}}">Templates</a> > {{$categiry->parent ? $categiry->parent->name : ''}} > {{$categiry->name}}
         
        </div>

        <div class="nav-template-inner">

          <div class="tab-content" id="nav-tabContent">

            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

              <div class="template-section">

                <div class="row">

                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">

                    <div class="inner-only">

                      <div class="row">

                      @foreach($documents as $document)

                              <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 mt-5">

                                <a href="{{route('templates.document_details', [$categiry->parent->slug, $categiry->slug, $document->slug])}}">

                                  <div class="inner-template-image">

                                    <img src="{{asset($document->image)}}" loading="lazy">

                                    <h5>{{$document->document_name}}</h5>

                                  </div>

                                </a>

                              </div>                       

                              @endforeach     

                      </div>

                    </div>

                  </div>

                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 mt-5">

                    <div class="n-if-not-found">

                      <img src="{{asset($categiry->banner)}}">
                  
                      {!! $categiry->parent->description !!}

                      <a href="{{route('subscription')}}">Download Template</a>

                    </div>

                  </div>

                </div>

              </div>

            </div>

            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">...</div>

            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>

          </div>

        </div>

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

        url: '{{url("load-more-document-list/".$categiry->id)}}?page=' + doc_page,

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

            $("#sub_category_document_list").append(response);

        })

        .fail(function (jqXHR, ajaxOptions, thrownError) {

            console.log('Server error occured');

        });

}
</script>