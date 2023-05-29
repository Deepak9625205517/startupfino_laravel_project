<aside class="main-sidebar">
  <section class="sidebar">
    <ul class="sidebar-menu tree" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>
      <li>
        <a href="{{url('/dashboard')}}">
          <i class="fa fa-dashboard"></i>
          <span>Dashboard</span>
          <span class="pull-right-container">
        </a>
      </li> 
      
      <li class="treeview">
        <a href="#">
          <i class="fa fa-tasks"></i>
          <span>Manage User</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-down pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li>
            <a href="{{ route('users.index') }}">
              <i class="fa fa-circle-o"></i>
              <span>Users</span>
            </a>
          </li>
          <li>
            <a href="{{ route('permissions.index') }}">
              <i class="fa fa-circle-o"></i>
              <span>Permission</span>
            </a>
          </li>
          <li>
            <a href="{{ route('roles.index') }}">
              <i class="fa fa-circle-o"></i>
              <span>Role</span>
            </a>
          </li>
          <li>
            <a href="{{ route('logActivity.index') }}">
              <i class="fa fa-circle-o"></i>
              <span>Log Activity</span>
            </a>
          </li>
          <li>
            <a href="{{ route('loginhistory.index') }}">
              <i class="fa fa-circle-o"></i>
              <span>Login Actiity</span>
            </a>
          </li>
        </ul>
      </li>
      <!-- <li><a href="{{ route('categories.index') }}"><i class="fa fa-archive" aria-hidden="true"></i><span>Category</span> -->
      <!-- <i class="fa fa-angle-down right"></i> -->
      <!--</a></li> -->
     <!-- <li class="treeview">
        <a href="#">
          <i class="fa fa-home"></i>
          <span>CMS</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-down pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li>
            <a href="{{ route('pages.index') }}">
              <i class="fa fa-circle-o"></i>
              <span>Pages</span>
            </a>
          </li>
          <li>
            <a href="{{ route('home.page.create') }}">
              <i class="fa fa-circle-o"></i>
              <span>Home Page</span>
            </a>
          </li>
          <li>
            <a href="{{ route('seo-pages.index') }}">
              <i class="fa fa-circle-o"></i>
              <span>Seo</span>
            </a>
          </li>
          <li>
            <a href="{{ route('company-logos.index') }}">
              <i class="fa fa-circle-o"></i>
              <span>Client Logo</span>
            </a>
          </li>
          <li>
            <a href="{{ route('testmonials.index') }}">
              <i class="fa fa-circle-o"></i>
              <span>Testimonial</span>
            </a>
          </li>
          <li>
            <a href="{{ route('faq.index') }}">
              <i class="fa fa-circle-o"></i>
              <span>FAQ</span>
            </a>
          </li>
        </ul>
      </li> -->
     <!-- <li class="treeview">
        <a href="#">
          <i class="fa fa-star"></i>
          <span>Master</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-down pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li>
            <a href="{{ route('states.index') }}">
              <i class="fa fa-circle-o"></i>
              <span>State</span>
            </a>
          </li>
          <li>
            <a href="{{ route('cities.index') }}">
              <i class="fa fa-circle-o"></i>
              <span>City</span>
            </a>
          </li>
          <li>
            <a href="{{ route('enquiry.index') }}">
              <i class="fa fa-circle-o"></i>
              <span>Enquiry</span>
            </a>
          </li>
        </ul>
      </li>-->
     
      <li>
        <a href="{{ route('categories.index') }}">
          <i class="fa fa-archive" aria-hidden="true"></i>
          <span>Services Category</span>
          <span class="pull-right-container">
            <!-- <i class="fa fa-angle-down pull-right"></i> -->
        </a>
      </li>
      <!-- <li>
        <a href="{{ route('document-centers.index') }}">
          <i class="fa fa-book" aria-hidden="true"></i>
          <span>Services</span>
          <span class="pull-right-container">
             <i class="fa fa-angle-down pull-right"></i>
        </a>        
      </li> -->
      <li class="header">New Settings</li>
      <li>
        <a href="{{ route('setting.index') }}">
          <i class="fa fa-fw fa-cogs" aria-hidden="true"></i>
          <span>New Settings</span>
          <!-- <i class="fa fa-angle-down right"></i> -->
        </a>
      </li> 
     
      
     
      </li>
      
    </ul>
  </section>
</aside>