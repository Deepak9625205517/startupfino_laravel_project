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


</style> @extends('admin.layouts.master') @section('content')
<section class="content">
  <section class="content-header">
    <div class="back-icon"><a href="{{url('/dashboard')}}"><i class="fa fa-arrow-left"></i></a></div>
      <div class="home-icon"> <a href="{{url('/dashboard')}}"><i class="fa fa-home"></i></a> </i></div>
      <h1>Home</h1>
      <h2>Fevorite</h2>
  </section>

  <div class="row">
    <div class="col-md-12">
      <!-- @if ($message = Session::get('fail'))
         <div class="alert alert-danger"><p>{{ $message }}</p></div>
         @endif -->
      <div class="box">
       @foreach($records as $record)
       
        <div class="col-md-4">
        <a href="{{route('document.view', [base64_encode($record->DocumentCenter->category_id), base64_encode($record->DocumentCenter->subcategory_id), base64_encode($record->DocumentCenter->id)])}}">  
          <div class="main-box">
            <div class="image-box">
               <div class="edit">
                 
                 @if($record->like == 1)
                  <input type="checkbox" class="form-check-input fa fa-bookmark add-fav favourite-box" onclick="getDocumentId({{$record->DocumentCenter->id}})" id="check{{$record->DocumentCenter->id}}" name="option1" value="{{$record->DocumentCenter->id}}" checked style="color:#3c8dbc;">
                  @else
                  <input type="checkbox" class="form-check-input fa fa-bookmark add-fav favourite-box" onclick="getDocumentId({{$record->DocumentCenter->id}})" id="check{{$record->DocumentCenter->id}}" name="option1" value="{{$record->DocumentCenter->id}}">
                  @endif

                </div>
                @if(!empty($record->DocumentCenter->image))    
                  <img src="{{asset($record->DocumentCenter->image)}}" class="doc_tow img-responsive">
                @else
                  <img src="{{asset('document/image/doc.jpg')}}" class="doc_tow img-responsive">
                @endif
            </div>
            <div class="document-sub-box">
              <div class="mr-3">
                @if($record->DocumentCenter->file_extension == 'doc')  
                    <img src="{{asset('front/img/word.svg')}}"style="width: 30px;">
                @elseif($record->DocumentCenter->file_extension == 'xlsx')
                    <img src="{{asset('front/img/excel.svg')}}"style="width: 30px;">
                @else
                    <img src="{{asset('front/img/pdf.svg')}}" style="width: 30px;">
                @endif
              </div>
              <div>
              <h4>{{$record->DocumentCenter ? $record->DocumentCenter->document_name : ''}}</h4>
              </div>
            </div>
          </div>
        </a>  
        </div>
       @endforeach 
       
      </div>
    </div>

</section>
@stop