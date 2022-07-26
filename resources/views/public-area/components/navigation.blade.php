 <!-- ======= Header ======= -->
 <header id="header" class="header fixed-top" data-scrollto-offset="0">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>HeroBiz<span>.</span></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>

          <li><a class="nav-link scrollto" href="{{ $cRout == 'home'? '':route('home-index') }}">Home</i></a>
          <li><a class="nav-link scrollto" href="{{ $cRout == 'home' ? '':route('home-index') }}#about">About</a></li>
          <li><a class="nav-link scrollto" href="{{ $cRout == 'home' ? '':route('home-index') }}#services">Services</a></li>
          <li><a class="nav-link scrollto" href="{{ $cRout == 'home' ? '':route('home-index') }}#portfolio">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="{{ $cRout == 'home' ? '':route('home-index') }}#team">Team</a></li>
          <li><a class="nav-link scrollto" href="{{ route('request-index') }}">Request Membership</a></li>
          <li><a href="{{ route('bloger-index') }}">Blog</a></li>
          <li><a class="nav-link scrollto" href="{{ route('contact-index') }}">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle d-none"></i>
      </nav><!-- .navbar -->

      {{-- {{ $cRout == 'register' ? '':''}} --}}
    <div>
      <a class="btn btn-primary scrollto" href="{{ route('login') }}">Login</a>
      <a class="btn-getstarted scrollto" href="{{ route('register') }}">Get Started</a>
    </div>
    </div>
  </header><!-- End Header -->
