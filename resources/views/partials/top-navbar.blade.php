

<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">ECO Buddy</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="/" class="active">Home<br></a></li>
          <li><a href="{{ route('about-page')}}">About</a></li>
          <li><a href="">Clubs</a></li>
          <li><a href="">Trainers</a></li>
          <li><a href="">Events</a></li>
          <li><a href="">Donation</a></li>
          <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Dropdown 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul>
          </li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      
      @if (Auth::check())
        
        <!-- User is logged in -->
        <p class="btn-getstarted">Welcome {{ Auth::user()->name }}</p>
        <a class="btn-getstarted" href="{{ route('logout-btn') }}" >Logout</a>
        <!-- <form id="logout-form" action="" method="POST" style="display: none;">
          @csrf
        </form> -->
      @else
        <!-- User is not logged in -->
        <a class="btn-getstarted" href="{{ route('login-page')}}">Login</a>
      @endif

    </div>
  </header>