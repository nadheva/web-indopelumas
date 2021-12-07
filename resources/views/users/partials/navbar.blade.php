<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo">
        <a href="index.html">
          <img src="{{asset('tlandingpage/assets/img/indopelumas.png')}}"  >
        </a>
      </h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto {{ Request::routeIs('landingpage') ? 'active' : '' }}" href="{{route('landingpage')}}">Home</a></li>
          <li><a class="nav-link scrollto {{ Request::routeIs('aboutus') ? 'active' : '' }}" href="{{route('aboutus')}}">About</a></li>
          <li class="dropdown"><a href="#"><span>Product</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{url('product/Nebula-Oil')}}">Nebula Oil</a></li>
              <li><a href="{{url('product/Pertamina-Oil')}}">Pertamina Oil</a></li>
              <li><a href="{{url('product/Shell-Oil')}}">Shell Oil</a></li>
              <li><a href="{{url('product/Mobil-Oil')}}">Mobil Oil</a></li>
              <li><a href="{{url('product/Eni-Oil')}}">Eni Oil</a></li>
              <li><a href="{{url('product/Total-Oil')}}">Total Oil</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto {{ Request::routeIs('testimonial') ? 'active' : '' }}" href="{{URL('about-us#testimonials')}}">Customer Testimonials</a></li>
          <li><a class="nav-link scrollto {{ Request::routeIs('artikel') ? 'active' : '' }}" href="{{route('artikel')}}">News & Articles</a></li>
          <li><a class="nav-link scrollto {{ Request::routeIs('contactus') ? 'active' : '' }}" href="{{route('contactus')}}">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->