
@foreach(getSubscription() as $subscription) 

    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 mt-4">

      <div class="n-package-inner n-package-inner-{{(getMaxSubscription() == $subscription->price) ? 'active':''}}">

        @if(getMaxSubscription() == $subscription->price)<span>We Reccommend</span>@endif

          <div class="d-flex align-items-center pb-4 text-center">

            <p class="plan text-center">{{$subscription->title}}</p>

            <p class="ms-auto discount">Save {{$subscription->offers ? $subscription->offers : 0}}%</p>

          </div>

          @if(getMaxSubscription() == $subscription->price)

            <h2 class="title-bold text-center n-sepreate text-white">INR {{($subscription->price == 0) ? '0' : $subscription->price}} / {{$subscription->type}}</h2>

            @else

            <h2 class="title-bold text-center n-sepreate">INR {{($subscription->price == 0) ? '0' : $subscription->price}} / {{$subscription->type}}</h2>

            @endif

            <!-- <h3 class="billed text-center n-sepreate">Billed as INR {{$subscription->monthly ? $subscription->monthly : ''}} per month</h3> -->

          <!-- <ul>

            @if($subscription->categories->count() > 0)

                @foreach($subscription->categories as $value)

                  <li>{{$value->name}}</li>

                @endforeach 

            @endif
            
          </ul> -->
          {!! $subscription->description !!}
          <div class="we-rec-btn">

             @php (isset($enquiryid) && !empty($enquiryid))?$enquiryid:""; @endphp

             <a href="{{url('pay-now/'.base64_encode($subscription->id))}}?enid={{$enquiryid}}">Get Started</a>

          </div>

      </div>

    </div>

@endforeach