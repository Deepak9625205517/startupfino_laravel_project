<style>
  .download-part {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 5px 15px;
    background: #ffffff;
    border-bottom: 1px solid #dcdcdf;
  }

  
  .document-name {
    display: flex;
    align-items: center;
  }

  .document-icon {
    display: flex;
    align-items: center;
  }

  .box {
    display: flex;
  }


  .mr-15 {
    margin-right: 15px;
    font-size: 16px;
  }


  .document-list .mr-3 {
    margin-right: 15px;
    color: #4d5558;
  }

  .document-show {
    background: #ffffff;
    margin-top: 80px;
    overflow-y: scroll;
    max-height: 900px;
  }



  .document-icon input[type=checkbox],
  input[type=radio] {
    margin: -2px 0 0;
    margin-top: 1px\9;
    line-height: normal;
    font-size: 19px;
  }

  .skin-black .left_cust {
    position: absolute;
    left: 1px;
    top: -8px;
  }

  .skin-black .cust_p {
    padding: 17px 20px;
  }

  .container {
      width: 1000px;
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

    .breadcrumb {
      margin-top: 12px;
    }

    .text-danger {
      color: #f00;
    }
    .fixed-sec{
        width: 51.3% !important;
    }
</style>
 @extends('admin.layouts.master') @section('content') 
 <section class="content">
  <div class="row">
    <div class="col-md-8">
    <div class="fixed-sec">
       <section class="content-header">
                <div class="back-icon">
                  <a href="{{route('documentListSubcategory.index', [base64_encode($category->parent->id), base64_encode($category->id)] )}}"><i class="fa fa-arrow-left"></i></a>
                </div>
                <div class="home-icon"> <a href="{{url('/dashboard')}}"><i class="fa fa-home"></i></a> </i></div>
                <h1>Home</h1>
                <h2><a href="{{route('documentCategoryList.index', [base64_encode($category->parent->id)])}}">{{$category->parent->name}}</a></h2>
                <h3><a href="{{route('documentListSubcategory.index', [base64_encode($category->parent->id), base64_encode($category->id)])}}">{{$category->name}}</a></h3>
                <h4 class="active">{{$doc->document_name}}</h4>
              </section>
    
      <div class="download-part">
        <div class="document-name">
          <div class="mr-15">
            <i class="fa fa-file"></i>
          </div>
          <div>
            <h4>{{$doc->document_name}}</h4>
          </div>
        </div>
        @php 
        
        if(!empty($checksubscription)){
           $category_id_list = \DB::table('category_subscription')->whereIn('subscription_id', $checksubscription)->pluck('category_id');
              
              $key = in_array($doc->category_id, $category_id_list->toArray());  
                       
           }else{
            $key = "";
           } 
       @endphp      
        <div class="document-icon">
          
        @if(Auth::user()->is_admin == 1)
                    <div class="mr-15 print-back">                  
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

                        <!-- <div class="mr-15">
                          <a type="button" href="#!" class="btn btn-primary">Edit</a>
                        </div> -->

                  <div class="mr-15 print-back">
                    <a type="button" href="{{asset($doc->pdf)}}" target="_blank">
                      <i class="fa fa-print"></i>
                    </a>
                  </div>
                  <div>
                    <a type="button" href="{{asset($doc->pdf)}}" class="btn btn-success" download>Download</a>
                  </div>
        @else

        
              @if(!empty($checksubscription) && !empty($key) || $key === 0)
                    
                   @if( CheackSubscriptionDateExist($checksubscription) )
                      <div class="mr-15 print-back">                  
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

                        <!-- <div class="mr-15">
                          <a type="button" href="#!" class="btn btn-primary">Edit</a>
                        </div> -->

                          <div class="mr-15 print-back">
                            <a type="button" href="{{asset($doc->pdf)}}" target="_blank">
                              <i class="fa fa-print"></i>
                            </a>
                          </div>
                          <div>
                            <a type="button" href="{{asset($doc->pdf)}}" class="btn btn-success" download>Download</a>
                          </div>
                    @else
                    
                    <div class="mr-15 print-back">                  
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

                      <!-- <div class="mr-15">
                        <a type="button" href="#!" class="btn btn-primary">Edit</a>
                      </div> -->

                      <div class="mr-15 print-back">
                          <i class="fa fa-print"></i>            
                      </div>
                      <div>
                        <a type="button" href="{{route('subscription')}}" class="btn btn-success" onclick="alert('Your Plan has been Expired, Please renew it.')">Download</a>
                      </div>
                    @endif
            @else

                <div class="mr-15 print-back">                  
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

                <!-- <div class="mr-15">
                   <a type="button" href="#!" class="btn btn-primary">Edit</a>
                </div> -->

              <div class="mr-15 print-back">
                  <i class="fa fa-print"></i>            
              </div>
              <div>
                <a type="button" href="{{route('subscription')}}" class="btn btn-success">Download</a>
              </div>              
            @endif
        @endif
        </div>
      </div>
      </div>
      <div class="document-show">
        <img src="{{asset($doc->image)}}" class="img-responsive">
      </div>
    </div>

    <div class="col-md-4">
      <!-- @if ($message = Session::get('fail'))
         <div class="alert alert-danger"><p>{{ $message }}</p></div>
         @endif -->
      <div class="box side-list">
        <div class="row">
        @foreach($records as $record)    
          <div class="col-sm-12">
            <div class="document-list">
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
               <a href="{{route('document.view', [base64_encode($record->category_id), base64_encode($record->subcategory_id), base64_encode($record->id)])}}"><h4>{{$record->document_name}}</h4></a>
              </div>
            </div>
          </div>
        @endforeach
        </div>
      </div>
    </div>
  </div>
</section> 
@endsection