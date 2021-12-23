@extends('layouts.default')  
  
  <!-- Navbar -->
    <nav
      class="navbar navbar-expand-lg navbar-light fixed-top p-3"
      style="background-color: white"
    >
      <div class="container">
        <a class="navbar-brand" href="/">Tasanesia</a>
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
              <a class="nav-link p-text" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link p-text" href="#">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link p-text" href="">Product</a>
            </li>
            <li class="nav-item">
              <a class="nav-link p-text" href="/campaign-menu">Our Campaign</a>
            </li>
            <li class="nav-item">
              <a class="nav-link p-text menu-contact-us" href="/contact">Contact Us</a>
            </li>
  </ul>

    @guest
    @if (Route::has('login'))
    <li class="nav-item " style="list-style-type: none;">
      <a href="{{ route('login') }}" class="nav-link p-text account-auth-login" style="color:#28a745">Login</a>
    </li>
    @endif

    @if (Route::has('register'))
    <li class="nav-item" style="list-style-type: none;">
      <a href="{{ route('register') }}" class="nav-link p-text account-auth-register text-white">Register</a>
    </li>
    @endif

    @else
     <li class="nav-item dropdown " style="list-style-type: none;">
        <a class="p-text" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="text-decoration: none; color: black" >
        <img src="{{ URL::to('/') }}/assets/img/user-icon.png" alt="" style="width: 20px">
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