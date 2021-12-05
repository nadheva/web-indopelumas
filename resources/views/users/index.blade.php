@section('carousel')
<section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url({{('tlandingpage/assets/img/slide/slide1.jpg')}})">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Multi</span></h2>
              <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url({{('tlandingpage/assets/img/slide/slide2.jpg')}})">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Lorem Ipsum Dolor</h2>
              <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url({{('tlandingpage/assets/img/slide/slide3.jpg')}})">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Sequi ea ut et est quaerat</h2>
              <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->
@endsection


<x-guest-layout>
 <!-- ======= About Section ======= -->
 <section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>About</h2>
        <p>Tentang Indopelumas</p>
      </div>

      <div class="row content">
        <div class="col-lg-6">
          <p>
            Visi
          </p>
          <ul>
            <li><i class="ri-check-double-line"></i> Memberikan pelayanan kepada customer sebagai dasar untuk mencapai keberhasilan dan kesuksesan</li>
          </ul>
          <p>
            Misi
          </p>
          <ul>
            <li><i class="ri-check-double-line"></i> Selalu ingin berkembang dan bergerak maju bersama pelanggan</li>
          </ul>
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0">
          <p>
            PT. MITRA ETHANINDO adalah pemegang merk/Principal dari NEBULA LUBRICANTS yang merupakan produk pelumas yang bisa diandalkan. Selain itu perusahaan kami juga berkerjasama dengan beberapa Distributor pelumas di tanah air seperti merk Pertamina, Shell, Exxon Mobil, Eni (Agip) dll untuk mencukupi kebutuhan customer yang datang dari berbagai sektor industri.
            <br>
            Sekarang ini lini produk kami terbagi menjadi dua bagian penting yaitu Oli dan Grease/Minyak Gemuk/Stempet.
            <br>
            Dari pengalaman marketing selama belasan tahun dalam dunia pelumasan, kami telah berhasil melayani jutaan liter permintaan pelumas dari berbagai bidang industri di Indonesia.
            <br>
            Semenjak perusahaan ini berdiri dari tahun 2012 tentunya telah banyak sekali pengalaman kami dalam melayani Customer. Berbekal profesionalisme dan mengupayakan yang terbaik untuk Customer, kami yakin dapat membangun kebersamaan bisnis jangka panjang dengan perusahaan Anda.
            <br>
            Sekarang ini kami telah banyak sekali berkerjasama dengan perusahaan yang bergerak di bidang Transportasi, Proyek industry/Infrastruktur, Mining Coal/Nickel, Power Plant, Perkebunan, Marine, Oil & Gas Service dll.
            <br>
            Dengan mengutamakan kuaitas & harga terbaik kami melayani pengiriman ke seluruh Nusantara.
            <br>
            Rasanya tidak sabar kami untuk dapat berkerjasama dengan perusahaan Anda.
            <br>
            Untuk info produk, spesifikasi dan harga terbaik, segera hubungi marketing kami.
          </p>
          <a href="#" class="btn-learn-more">Learn More</a>
        </div>
      </div>

    </div>
  </section><!-- End About Section -->

  
  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Products</h2>
        <p>Check our Products</p>
      </div>

      {{-- <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">App</li>
            <li data-filter=".filter-card">Card</li>
            <li data-filter=".filter-web">Web</li>
          </ul>
        </div>
      </div> --}}

      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

        <div class="col-lg-4 col-md-6 portfolio-item">
          <img src="{{asset('tlandingpage/assets/img/portfolio/portfolio-1.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Nama Product</h4>
            <p>Product</p>
            <a href="{{asset('assets/img/portfolio/portfolio-1.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item">
          <img src="{{asset('tlandingpage/assets/img/portfolio/portfolio-1.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Nama Product</h4>
            <p>Product</p>
            <a href="{{asset('assets/img/portfolio/portfolio-1.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item">
          <img src="{{asset('tlandingpage/assets/img/portfolio/portfolio-1.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Nama Product</h4>
            <p>Product</p>
            <a href="{{asset('assets/img/portfolio/portfolio-1.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>

        

      </div>

    </div>
  </section><!-- End Portfolio Section -->

  <!-- ======= Testimonials Section ======= -->
  <section id="testimonials" class="testimonials section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Testimonials</h2>
        <p>Testimonials</p>
      </div>

      <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">

          @foreach ($testimonial as $item)
          <div class="swiper-slide">
            <div class="testimonial-wrap">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>{{$item->nama}}</h3>
                <h4>{{$item->perusahaan}}</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  {{$item->isi}}
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>
          </div><!-- End testimonial item -->
          @endforeach   

        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section><!-- End Testimonials Section -->

  <!-- ======= Cta Section ======= -->
  <section id="cta" class="cta">
    <div class="container" data-aos="zoom-in">

      <div class="text-center">
        <h3>Call To Action</h3>
        <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <a class="cta-btn" href="#">Call To Action</a>
      </div>

    </div>
  </section><!-- End Cta Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Contact</h2>
        <p>Contact Us</p>
      </div>

      <div class="row">

        <div class="col-lg-6">

          <div class="row">
            <div class="col-md-12">
              <div class="info-box">
                <i class="bx bx-map"></i>
                <h3>Our Address</h3>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box mt-4">
                <i class="bx bx-envelope"></i>
                <h3>Email Us</h3>
                <p>info@example.com<br>contact@example.com</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box mt-4">
                <i class="bx bx-phone-call"></i>
                <h3>Call Us</h3>
                <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
              </div>
            </div>
          </div>

        </div>

        <div class="col-lg-6">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->
</x-guest-layout>