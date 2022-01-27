<!-- Navbar -->
    <nav
      class="navbar navbar-expand-lg navbar-light fixed-top "
      style="background-color: white"
    >
      <div class="container">
        <img class="logo" src="{{asset('assets/img/logo.png')}}" width="10.5%" alt="">
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto me-auto">
            <li class="nav-item">
              <a class="nav-link p-teks" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link p-teks" href="/about-us">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link p-teks" href="/menu-products/category/1">Product</a>
            </li>
            <li class="nav-item">
              <a class="nav-link p-teks" href="/menu-campaign">Our Campaign</a>
            </li>
            <li class="nav-item">
              <a class="nav-link p-teks" href="/contact">Contact Us</a>
            </li>
  </ul>

    @guest
    @if (Route::has('login'))
    <li class="nav-item " style="list-style-type: none;">
      <a href="{{ route('login') }}" class="nav-link account-auth-login" style="color:#315343; font-size: 15px">Login</a>
    </li>
    @endif

    @if (Route::has('register'))
    <li class="nav-item" style="list-style-type: none;">
      <a href="{{ route('register') }}" class="nav-link account-auth-register text-white" style="font-size: 15px">Register</a>
    </li>
    @endif

    @else
     <li class="nav-item dropdown " style="list-style-type: none;">
        <a class="p-text" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="text-decoration: none; color: black; font-size:16px" >
        <img src="{{ URL::to('/') }}/assets/img/user-icon.png" alt="" style="width: 27px">
          {{ Auth::user()->name }}
        </a>

      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{ route('logout') }}"
           onclick="event.preventDefault();
           document.getElementById('logout-form').submit();">
           {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
        </form>
        </div>
     </li>
       @endguest

          <!-- <ul class="navbar-nav">
            
           
          </ul> -->
 
        </div>
      </div>
    </nav>
    <!-- End Navbar -->