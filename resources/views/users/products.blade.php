<x-guest-layout>
    
  <!-- ======= Cta Section ======= -->
  <section id="cta" class="cta mt-4">
    <div class="container" data-aos="zoom-in">

      <div class="text-center">
        <h3>Call To Action</h3>
        <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <a class="cta-btn" href="#">Our Products</a>
      </div>

    </div>
  </section><!-- End Cta Section -->

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
</x-guest-layout>