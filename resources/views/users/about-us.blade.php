<x-guest-layout>

  <!-- ======= Cta Section ======= -->
  <section id="cta" class="cta mt-4">
    <div class="container" data-aos="zoom-in">

      <div class="text-center">
        <h3>Call To Action</h3>
        <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <a class="cta-btn" href="#">Call To Action</a>
      </div>

    </div>
  </section><!-- End Cta Section -->

  <!-- ======= About Section ======= -->
 <section id="about" class="about mt-4">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2></h2>
        <p>Indopelumas</p>
      </div>

      <div class="row content">
        <div class="col-lg-12 pt-4 pt-lg-0">
          <p>
            Indopelumas adalah pemegang merk atau principal dari Nebula Lubricant yakni produk pelumas atau disebut juga oli, yang bisa diandalkan. Saat ini lini produk yang dipasarkan terbagi menjadi dua bagian penting yaitu oli dan grease yang lazim disebut sebagai minyak gemuk atau stempet
            <br> <br>
            Dari pengalaman marketing selama belasan tahun dalam dunia pelumasan, kami telah berhasil melayani jutaan liter permintaan pelumas untuk berbagai bidang industri di Indonesia. Berbekal etos kerja dan profesionalisme. Selalu mengupayakan yang terbaik untuk setiap pelanggan. Kami yakin dapat membangun kebersamaan bisnis jangka panjang dengan perusahaan Anda.
            <br> <br>
            Dengan bisnis utama sebagai distributor Nebula Oil, jual oli mesin industri, menjual oli mesin, menjual oli mesin pabrik serta memasarkan oli untuk truk atau kendaraan berat sejenis, saat ini kami banyak bekerjasama dengan perusahaan yang bergerak di bidang transportasi, proyek dan dunia industry, perusahaan yang bergerak pada bidang infrastuktur, tambang batu bara, nickel, power plant, perkebunan di berbagai daerah, termasuk usaha pada bidang perkapalan serta oil and gas service, dan lain-lain memenuhi kebutuhan mereka atas berbagai jenis pelumas dan Nebula Grease (minyak gemuk).
            <br><br>
            Dengan mengutamakan kualitas produk dan harga jual terbaik kami melayani pengiriman ke seluruh daerah di Indoensia, dari ujung timur hingga ke sisi barat nusantara.
          </p>
        </div>
      </div>

    </div>
  </section><!-- End About Section -->

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
                <img src="{{asset('storage/testimonial/'.$item->foto)}}" class="testimonial-img" alt="">
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

</x-guest-layout>