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
  
            <div class="col-lg-5 align-items-stretch video-box" style='background-image: url({{ asset('storage/produk/'.$produk->foto) }});' data-aos="zoom-in" data-aos-delay="100">
            </div>
  
            <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">
  
              <div class="content">
                <h4><strong>{{ $produk->produk }}</strong></h4>
                <h3>Deskripsi</h3>
              </div>
              
              <div class="accordion-list">
                <ul>
                  <li>
                    <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span>Diesel Engine Oil<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                        <table>
                            <tbody>
                            <tr>
                            <td>Colour</td>
                            <td>Visual</td>
                            <td>Black</td>
                            <td>Green</td>
                            <td>Brown</td>
                            </tr>
                            <tr>
                            <td>NLGI Grade</td>
                            <td>ASTM D-217</td>
                            <td>3</td>
                            <td>3</td>
                            <td>3</td>
                            </tr>
                            <tr>
                            <td>Soap Type</td>
                            <td></td>
                            <td>Calcium</td>
                            <td>Calcium</td>
                            <td>Calcium</td>
                            </tr>
                            <tr>
                            <td>Texture</td>
                            <td>Visual</td>
                            <td>Smooth</td>
                            <td>Smooth</td>
                            <td>Smooth</td>
                            </tr>
                                            <tr>
                            <td>Structure</td>
                            <td>Visual</td>
                            <td>Tacky</td>
                            <td>Xtra Tacky</td>
                            <td>Tacky</td>
                            </tr>
                            <tr>
                            <td>Dropping Point &#8451;</td>
                            <td>ASTM D-2265</td>
                            <td>80</td>
                            <td>105</td>
                            <td>110</td>
                            </tr>
                            <tr>
                            <td>Penetration</td>
                            <td></td>
                            <td>220</td>
                            <td>260</td>
                            <td>260</td>
                            </tr>
                            <tr>
                            <td>Water Content (%max)</td>
                            <td></td>
                            <td>2.3</td>
                            <td>2.3</td>
                            <td>2.3</td>
                            </tr>
                            <tr>
                            <td>Rust and Corrosion</td>
                            <td>ASTM D-1743</td>
                            <td>Stable</td>
                            <td>Stable</td>
                            <td>Stable</td>
                            </tr>
                            </tbody>
                            </table>
                    </div>
                  </li>
  
                  <li>
                    <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span> Feugiat scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                      <p>
                        Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                      </p>
                    </div>
                  </li>
  
                  <li>
                    <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span> Dolor sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                      <p>
                        Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                      </p>
                    </div>
                  </li>
  
                </ul>
              </div>
  
            </div>
  
          </div>
  
        </div>
      </section><!-- End Why Us Section -->
</x-guest-layout>