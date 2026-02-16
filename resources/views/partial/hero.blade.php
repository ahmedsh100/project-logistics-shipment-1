  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="{{ route('home') }}" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">Logis</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{ route('home') }} " class="active">Home<br></a></li>
          <li><a href="{{ route('about') }}" class="active">About</a></li>
          <li><a href="{{ route('services') }}" class="active">Services</a></li>
          <li><a href="{{ route('pricing') }}" class="active">Pricing</a></li>
          <li><a href="{{ route('contact') }}" class="active">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
      <a class="btn-getstarted" href="{{ route('get-quote') }}">Get a Quote</a>

    </div>
  </header>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade" style="background-image: url('{{ asset('assets/img/page-title-bg.jpg') }}');">
      <div class="container position-relative">
        <h1>
            @if(request()->route()->getName() == 'about')
                    About
                @elseif (request()->route()->getName() == 'services')
                    Services
                @elseif (request()->route()->getName() == 'pricing')
                    Pricing
                @elseif (request()->route()->getName() == 'contact')
                    Contact
                 @elseif (request()->route()->getName() == 'home')
                    Home
                @endif</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ route('home') }}" class="active">Home</a></li>
            <li class="current">
                @if(request()->route()->getName() == 'about')
                    About
                @elseif (request()->route()->getName() == 'services')
                    Services
                @elseif (request()->route()->getName() == 'pricing')
                    Pricing
                @elseif (request()->route()->getName() == 'contact')
                    Contact
                @endif
            </li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->
