@extends('front.layouts.master') 
@section('title', $document->meta_title)
@section('meta_keywords', $document->meta_keywords)
@section('meta_description', $document->meta_description)
@section('content') 
<section id="download-document">

  <div class="container">

    <div class="row">

      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-8 mt-5">

        <div class="document-image">

          <h2>{{$document->document_name}}</h2>

          <img src="{{asset($document->image)}}" class="w-100">

        </div>

        <div class="document-content mt-4">

          {!! $document->description !!}

        </div>

      </div>

      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 mt-5">

        <div class="download-doc-form" id="download-main-form">

          <h2>Download Business Document and<br> Save Time & Money</h2>

          <div class="main-form">

            <form>

              <input type="hidden" name="document_center_id" id="document_center_id" value="{{$document->id}}">

              <div class="mt-3">

                <label>Your Name</label>

                <input type="text" class="form-control" name="name" id="name" placeholder="Your Name" value="{{old('name')}}">

                <span id="names" style="color:red;"></span>

              </div>

              <div class="mt-3">

                <label>Mobile Number</label>

                <input type="tel" class="form-control" name="mobile_number" id="mobile_number" placeholder="Mobile Number" maxlength="10" value="{{old('mobile_number')}}">

                <span id="mobile_numbers" style="color:red;"></span>

              </div>

              <div class="mt-3">

                <label>Email ID</label>

                <input type="email" class="form-control" name="email" id="email" placeholder="Email ID" value="{{old('mobile_number')}}">

                <span id="emails" style="color:red;"></span>

              </div>

              

              <div class="mt-4">

                <button type="button" id="enquiry">DOWNLOAD</button>

                <div class="d-flex mt-3 align-items-center justify-content-between">

                  <div>

                    <p>File type <br>

                      <span>

                      @if($document->file_extension == 'xlsx' || $document->file_extension == 'doc')  

                        <i class="fa fa-file-word-o" aria-hidden="true"></i> {{$document->file_extension}} </span>

                      @else

                        <i class="fa fa-file-pdf-o" aria-hidden="true"></i> {{$document->file_extension}} </span>

                      @endif  

                    </p>

                  </div>

                  <div>

                    <p>File size <br>

                      <span>{{$document->file_size}}kb</span>

                    </p>

                  </div>

                  <div>

                    <p>Pages <br>

                      <span>{{$document->page}}</span>

                    </p>

                  </div>

                </div>

              </div>

            </form>

          </div>

        </div>

        <div class="mt-4">

          <a href="#">

            <img src="{{asset('front/img/doc-banner.jpg')}}" class="rounded w-100">

          </a>

        </div>

        <div class="other-documents mt-4">

          <h4>Other related documents</h4>

          <ul class="list-unstyled list-related-docs">

          @foreach($records as $record)  

            <li>

              <a href="{{route('templates.document_details', [$record->category->slug, $record->subcategory->slug, $record->slug])}}">

              @if($record->file_extension == 'doc')  

                 <img src="{{asset('front/img/word.svg')}}">

              @elseif($record->file_extension == 'xlsx')

                 <img src="{{asset('front/img/excel.svg')}}">

              @else

                 <img src="{{asset('front/img/pdf.svg')}}">

              @endif   

               <span> {{$record->document_name}}</span>

              </a>

            </li>

          @endforeach  

            

          </ul>

        </div>

      </div>

    </div>

  </div>

</section>

<section id="most-popular-documents" class="mt-5">

  <div class="container">

    <div class="row justify-content-center">

      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 mt-5 text-center">

        <h2 class="title-bold"> Top 100 Most Popular Business Documents Included </h2>

        <p class="subheading">Over 2,000 document templates to meet your business and legal needs.</p>

      </div>

    </div>

    <div class="row">

    @foreach($categories->subcategory as $sucategory)  

      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 mt-3">

        <a href="{{route('templates.subcategory', [$categories->slug, $sucategory->slug])}}">

          <div class="inner-most-popular">

            <img src="{{asset('front/img/folder-icon.svg')}}">

            <span class="ms-2">{{$sucategory->name}}</span>

            <span class="ms-auto">

              <i class="fa fa-arrow-right" aria-hidden="true"></i>

            </span>

          </div>

        </a>

      </div>

    @endforeach

    </div>

  </div>

</section> 

@include('front.layouts.business-box-corpbiz') @stop