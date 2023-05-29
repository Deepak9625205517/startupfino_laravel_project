<section class="fixed-top">
    <div class="container-fluid">
      <div class="row">
        <nav class="navbar navbar-expand-lg navbar-light bg-light ">
          <div class="container-fluid">
            <a class="navbar-brand" href="#"> 
              <span class="logo"><img src="img/logo.png" class="img-logo" alt="" /></span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto d-flex align-items-center mb-2 mb-lg-0 popover__wrapper">
                <li class="nav-item">
                @if(Auth::user()->is_admin == 2)
                  <a href="{{url('my-team')}}" class="nav-link invite-user">Invite User</a>
                @endif  
                </li>
                <li class="nav-item">
                  <div class="acc_tltp">
                    <a href="#!" class="nav-link">{{Auth::user()->name}}</a>
                    <img class="log_prof nav-link img-fluid" src="{{asset('admin/img/log-user.png')}}" alt="" />
                  </div>
                </li>             
                  <div class="popover__wrapper">                   
                    <div class="popover__content">
                      <p class="popover__message mt-2">Help</p>
                       <hr>
                      <p class="popover__message mb-2"><a class="text-center" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">

                                   <i class="fa fa-sign-out" aria-hidden="true"></i> Log Out

                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">

                                    @csrf

                                </form></p>
                    </div>
                  </div>               
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </section>