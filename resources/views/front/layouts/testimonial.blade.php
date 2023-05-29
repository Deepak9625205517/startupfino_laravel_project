@foreach(getTestmonial() as $testimonial)  
          <div class="item text-center">
              <div class="text-center center-block mt-3">
                <img src="{{asset($testimonial->image)}}" alt="{{$testimonial->name}}">
                <img class="test-img2 img-fluid" src="{{asset('front/img/test-def-img.png')}}" alt="" />
                <div class="mt-4 mb-4">
                    <h4>{{$testimonial->name}}, <span>{{$testimonial->designation}}</span></h4>
                    <img src="{{asset('front/img/Star.svg')}}" alt="">                     
                </div>
                <p>{!! $testimonial->description !!}</p>
              </div>
          </div>
          @endforeach          