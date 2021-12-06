<x-guest-layout>
    @push('css')
    <style>
        table{
        background-color: #f9f9ff;
        }
        th, td {
        border: 1px solid #e6e6e6;
        padding: 15px;
        color: black;
        }
    </style>
    @endpush
    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg mt-5 pt-5">
        <div class="container-fluid" data-aos="fade-up">
  
          <div class="row">
  
  
          </div>
  
        </div>
      </section><!-- End Why Us Section -->

      <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg mt-5 pt-5">
      <div class="container-fluid" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-5 align-items-stretch video-box" style='background-image: url({{ asset('storage/produk/'.$produk->foto) }});' data-aos="zoom-in" data-aos-delay="100">
          </div>

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">

            <div class="content">
              <h4><strong>{{ $produk->produk }}</strong></h4>
              <h3>Deskripsi</h3>
            </div>
            
            <div class="accordion-list">
              <ul>
                @foreach ($isi as $item)
                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>{{ $loop->iteration }}</span> {{ $item->judul }} <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                    {!! $item->isi !!}
                  </div>
                </li>
                @endforeach
              </ul>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->
</x-guest-layout>