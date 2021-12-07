<x-guest-layout>
    <section id="portfolio-details" class="portfolio-details mt-5 pt-5">
        <div class="container">
  
          <div class="row gy-4">
  
            <div class="col-lg-6">
              <div class="portfolio-details-slider swiper">
  
                  <div class="swiper-slide">
                    <img src="{{ asset('storage/berita/'.$news->foto) }})" alt="">
                  </div>
                <div class="swiper-pagination"></div>
              </div>
            </div>
  
            <div class="col-lg-6">
              {{-- <div class="portfolio-info">
                <h3>Project information</h3>
                <ul>
                  <li><strong>Category</strong>: Web design</li>
                  <li><strong>Client</strong>: ASU Company</li>
                  <li><strong>Project date</strong>: 01 March, 2020</li>
                  <li><strong>Project URL</strong>: <a href="#">www.example.com</a></li>
                </ul>
              </div> --}}
              <div class="portfolio-description">
                <h2>{{ $news->judul }}</h2>
                <p align="justify">
                  {{ $news->isi }}
                </p>
              </div>
            </div>
  
          </div>
  
        </div>
      </section> 
</x-guest-layout>