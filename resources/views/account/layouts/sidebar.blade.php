<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 top_bg">
            <div class="acc_tab_list"  id="fixed2" >
              <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a href="{{route('user.account')}}" class="nav-link float-left {{request()->is('user-account') ? 'active' : ''}}">
                  Personal information
                </a>
                <a href="{{url('business-information')}}" class="nav-link float-left {{request()->is('business-information') ? 'active' : ''}}">
                  Business Information
                </a>
                @if(Auth::user()->is_admin == 2)
                <a href="{{url('my-team')}}" class="nav-link float-left {{request()->is('my-team') ? 'active' : ''}}">
                  My Team
                </a>
                <a href="{{route('billing')}}" class="nav-link float-left {{request()->is('billing') ? 'active' : ''}}">
                  Billing
                </a>
                
                @if(CheackSubscriptioinUser())
                    <a href="{{route('license')}}" class="nav-link float-left {{request()->is('license') ? 'active' : ''}}">
                      My Plan
                    </a>
                @else
                    <a href="{{route('subscription')}}" class="nav-link float-left {{request()->is('subscription') ? 'active' : ''}}">
                      My Plan
                    </a>
                @endif
                @endif  
              </div>
            </div>
          </div>