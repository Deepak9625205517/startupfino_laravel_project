@foreach($results as $key => $doc)    
      <div class="col-md-3">
        <a href="{{route('document.view', [base64_encode($doc->category_id), base64_encode($doc->subcategory_id), base64_encode($doc->id)])}}">
          <div class="main-box">
            <div class="image-box">
            @if(!empty($doc->image))    
              <img src="{{asset($doc->image)}}" class="img-responsive" loading="lazy">
            @else
              <img src="{{asset('document/image/doc.jpg')}}" class="img-responsive" loading="lazy">
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