@foreach($results as $key => $doc)    
      <div class="col-md-4">
        <a href="{{route('document.view', [base64_encode($doc->category_id), base64_encode($doc->subcategory_id), base64_encode($doc->id)])}}">
          <div class="main-box">
            <div class="image-box">
            <div class="edit">
                   @if(!empty($doc->like))  
                       @if($doc->like->like == 1)             
                        <input type="checkbox" class="form-check-input fa fa-bookmark add-fav favourite-box" onclick="getDocumentId({{$doc->id}})" id="check{{$doc->id}}" name="option1" value="{{$doc->id}}" checked  style="color:#3c8dbc;">
                        @else
                        <input type="checkbox" class="form-check-input fa fa-bookmark add-fav favourite-box" onclick="getDocumentId({{$doc->id}})" id="check{{$doc->id}}" name="option1" value="{{$doc->id}}">
                        @endif
                      @else
                       <input type="checkbox" class="form-check-input fa fa-bookmark add-fav favourite-box" onclick="getDocumentId({{$doc->id}})" id="check{{$doc->id}}" name="option1" value="{{$doc->id}}">
                      @endif
                </div>

            @if(!empty($doc->image))    
              <img src="{{asset($doc->image)}}" class="doc_tow img-responsive" loading="lazy">
            @else
              <img src="{{asset('document/image/doc.jpg')}}" class="doc_tow img-responsive" loading="lazy">
            @endif
            </div>
            <div class="document-sub-box">
              <div class="mr-3">
              @if($doc->file_extension == 'doc')  
                    <img src="{{asset('front/img/word.svg')}}"style="width: 30px;" loading="lazy">
                @elseif($doc->file_extension == 'xlsx')
                    <img src="{{asset('front/img/excel.svg')}}"style="width: 30px;" loading="lazy">
                @else
                    <img src="{{asset('front/img/pdf.svg')}}" style="width: 30px;" loading="lazy">
                @endif
              </div>
              <div>
                <h4>{{$doc->document_name}}</h4>
              </div>
            </div>
          </div>
        </a>
      </div>
    @endforeach  