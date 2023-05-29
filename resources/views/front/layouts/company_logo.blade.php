<div id="news-carousel" class="d-flex justify-content-between align-items-center news-img mt-5">
    <div class="owl-carousel">
    @foreach(CompanyLogo() as $logo)
        <div class="item">
            <div class="news-slider"><img src="{{asset($logo->image)}}" title="{{$logo->company_name}}" class="img-fluid"></div>
        </div>
    @endforeach    
    </div>
</div>

    

    