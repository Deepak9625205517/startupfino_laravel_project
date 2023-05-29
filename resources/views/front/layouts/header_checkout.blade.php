<header class="nav-sec bg-white">
  <nav class="navbar navbar-expand-lg bg-white align-items-center">
    <div class="container">
      <a class="navbar-brand" href="{{route('index')}}"><img src="{{asset('front/img/logo.png')}}" /></a>
      
      
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          
        <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('index')}}"
                  >Home</a
                >
              </li>
			  <li class="nav-item dropdown">
        
                <a
                  class="nav-link dropdown-toggle"
                  href="{{route('templates')}}"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  Templates
                </a>
                <ul class="dropdown-menu">
                  @foreach(CategoryList() as $category)
                  <li>
                    <a class="dropdown-item" href="#">{{$category->name}}</a>
                  </li>
                  @endforeach
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('subscription')}}">Pricing</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Company</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{route('about-us')}}">About Us</a></li>
                  <li><a class="dropdown-item" href="{{route('blog')}}">Blogs</a></li>
                  <li><a class="dropdown-item" href="{{route('contact-us')}}">Contact Us</a></li>
                </ul>
              </li>

          <li class="nav-item ms-2 hide-mob" style="display: flex;justify-content: center;align-items: center;">
            <a class="nav-link" data-bs-toggle="collapse" href="#searchbox" role="button" aria-expanded="false"
              aria-controls="searchbox"><i class="fa fa-search"></i></a>
            <div class="search-input-box collapse" id="searchbox">
              <form action="{{route('search.document')}}" method="post">
                @csrf
                <div class="position-relative n-search-bar">
                  <input type="text" class="form-control" id="example-ajax-post" name="document_name" placeholder="Search for a template" required>
                  <div id="myDropdown"></div>
                  <button type="submit" name="document_search" class="search_btn">
                    <i class="fa fa-search"></i>
                  </button>
                  <span class="close_custom" onclick="close_custom()"><i class="fa fa-times"></i></span>
                </div>
              </form>
            </div>
          </li>
          @if(!empty(Auth::user()->name))
            <li class="nav-item dropdown ms-2 me-2">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="fa fa-user-circle-o" aria-hidden="true" style="font-size: 25px;margin-top: 10px;"></i>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{route('dashboard')}}">Dashboard</a></li>
                  <li><a class="dropdown-item" href="{{ route('profile.index') }}">My Profile</a></li>
                  <li>
                      <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none">
                        @csrf
                      </form>
                  </li>
                </ul>
                @endif
              </li>

        </ul> -->
                

        <!-- @if(empty(Auth::user()->name))       
         <a href="{{route('customerLogin')}}"><button type="button"
            class="btn btn-outline-light btn-login mx-2 hide-mob">
            Login
          </button></a>
        @endif 
        <a href="{{route('subscription')}}"><button type="button" class="btn btn btn-free">
            Try for Free
          </button></a> -->
      </div>
    </div>
  </nav>
</header>


<!-- 

<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><button class="btn btn-outline-light btn-login mx-2 hide-mob">{{ __('Logout') }}</button></a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none">
            @csrf
          </form>
 -->