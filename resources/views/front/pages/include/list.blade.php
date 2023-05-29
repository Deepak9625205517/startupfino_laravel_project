@foreach($documents as $document)

                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 mt-5">

                          <a href="{{route('templates.document_details', [$categiry->parent->slug, $categiry->slug, $document->slug])}}">

                            <div class="inner-template-image">

                              <img src="{{asset($document->image)}}">

                              <h5>{{$document->document_name}}</h5>

                            </div>

                          </a>

                        </div>                       

                    @endforeach