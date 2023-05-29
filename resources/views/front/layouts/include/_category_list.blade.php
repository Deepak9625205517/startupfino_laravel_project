<section id="top-documents" class="mt-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 mt-5 text-center">
        <h2 class="title-bold"> Top Quality Document Templates for Every Step of Your Business. </h2>
        <p class="subheading">Over 2,000 document templates to meet your business and legal needs.</p>
      </div>
    </div>
    <div class="row">
    @foreach(getSubCategoryDocumentList() as $d)
    @foreach($d->subcategory as $subdocument)
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 mt-3">
        <a href="{{route('templates.subcategory', [$subdocument->slug])}}">
          <div class="download-top-document">
            <img src="{{asset($subdocument->banner)}}">
            <span>{{$subdocument->name}}</span>
          </div>
        </a>
      </div>
    @endforeach
    @endforeach
    </div>
  </div>
</section>