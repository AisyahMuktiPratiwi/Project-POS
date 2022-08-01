<nav class="navbar navbar-expand-lg main-navbar" style="background-color: rgb(255, 139, 86)">
    <form class="form-inline mr-auto">
      <ul class="navbar-nav mr-3" style="background-color: rgb(255, 139, 86)">
        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars" style="background-color: rgb(255, 139, 86)"></i></a></li>
        <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
      </ul>

    </form>
    <ul class="navbar-nav navbar-right" style="background-color: rgb(255, 139, 86)">

      <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
        <img alt="image" src="{{ asset('stisla/img/avatar/mutho.jpg') }}" class="rounded-circle mr-1">
        <div class="d-sm-none d-lg-inline-block">Hi, {{ Auth::user()->name }}</div></a>
        <div class="dropdown-menu dropdown-menu-right" >
          <div class="dropdown-title"><span  style="color:rgb(250, 0, 0)" >Logged in 5 min ago</span></div>
          <a href="features-profile.html" class="dropdown-item has-icon">
            <i class="far fa-user" style="color: rgb(250, 0, 0)"></i><span style="color: rgb(250, 0, 0)">Profile</span>
          </a>
          <a href="features-activities.html" class="dropdown-item has-icon">
            <i class="fas fa-bolt" style="color: rgb(250, 0, 0)"></i><span style="color: rgb(250, 0, 0)">Activities</span>
          </a>
          <a href="features-settings.html" class="dropdown-item has-icon">
            <i class="fas fa-cog"style="color: rgb(250, 0, 0)"></i><span style="color: rgb(250, 0, 0)">Settings</span>
          </a>
          <div class="dropdown-divider"></div>
          <form id="logout-form" action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt" style="color: rgb(250, 0, 0)"></i> <span style="color: rgb(250, 0, 0)"> Logout</span>
            </button>
        </form>

        </div>
      </li>
    </ul>
  </nav>
