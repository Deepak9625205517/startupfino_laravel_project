@foreach($records as $record)
                <div class="col-md-4">
                <a href="{{route('document.view', [base64_encode($record->category_id), base64_encode($record->subcategory_id), base64_encode($record->id)])}}">  
                  <div class="main-box">
                    <div class="image-box">
                      <div class="edit1">
                      @if(!empty($record->like))  
                            @if($record->like->like == 1)             
                              <input type="checkbox" class="form-check-input fa fa-bookmark add-fav favourite-box" onclick="getDocumentId({{$record->id}})" id="check{{$record->id}}" name="option1" value="{{$record->id}}" checked  style="color:#3c8dbc;">
                              @else
                              <input type="checkbox" class="form-check-input fa fa-bookmark add-fav favourite-box" onclick="getDocumentId({{$record->id}})" id="check{{$record->id}}" name="option1" value="{{$record->id}}">
                              @endif
                            @else
                        <input type="checkbox" class="form-check-input fa fa-bookmark add-fav favourite-box" onclick="getDocumentId({{$record->id}})" id="check{{$record->id}}" name="option1" value="{{$record->id}}">
                        @endif
                        </div>
                        @if(!empty($record->image))    
                          <img src="{{asset($record->image)}}" class="doc_tow img-responsive">
                        @else
                          <img src="{{asset('document/image/doc.jpg')}}" class="doc_tow img-responsive">
                        @endif
                    </div>
                    <div class="document-sub-box">
                      <div class="mr-3">
                        @if($record->file_extension == 'doc')  
                            <img src="{{asset('front/img/word.svg')}}"style="width: 30px;">
                        @elseif($record->file_extension == 'xlsx')
                            <img src="{{asset('front/img/excel.svg')}}"style="width: 30px;">
                        @else
                            <img src="{{asset('front/img/pdf.svg')}}" style="width: 30px;">
                        @endif
                      </div>
                      <div>
                      <h4>{{$record->document_name}}</h4>
                      </div>
                    </div>
                  </div>
                </a>  
                </div>
              @endforeach 