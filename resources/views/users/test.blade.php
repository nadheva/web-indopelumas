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
                <li>
                  <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span>Diesel Engine Oil<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                    <div class="card">
                      <div class="card-header" id="headingOne">
                          <h5 class="mb-0">
                              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#m1" aria-expanded="false"
                                  aria-controls="collapseOne">
                                  Diesel Engine Oils
                              </button>
                          </h5>
                      </div>
                      <div id="m1" class="collapse" aria-labelledby="headingOne" data-parent="#accordion" style="">
                          <div class="card-body">
                              <h6>Typical Properties</h6>
                              <table>
                                  <tbody>
                                      <tr>
                                          <th>No</th>
                                          <th>Jenis Pelumas</th>
                                          <th>Kemasan</th>
                                          <th>Satuan(ltr)</th>
                                      </tr>
                                      <tr>
                                          <td>1</td>
                                          <td>Mobil Delvac MX 15W-40</td>
                                          <td>Drum</td>
                                          <td>208</td>
                                      </tr>
                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>
              
                  <div class="card">
                      <div class="card-header" id="headingThree">
                          <h5 class="mb-0">
                              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#m2" aria-expanded="false"
                                  aria-controls="collapseThree">
                                  Marine/Power Station Diesel Engine Oils
                              </button>
                          </h5>
                      </div>
                      <div id="m2" class="collapse" aria-labelledby="headingThree" data-parent="#accordion" style="">
                          <div class="card-body">
                              <h6>Typical Properties</h6>
                              <p>
                              <table>
                                  <tbody>
                                      <tr>
                                          <th>No</th>
                                          <th>Jenis Pelumas</th>
                                          <th>Kemasan</th>
                                          <th>Satuan(ltr)</th>
                                      </tr>
                                      <tr>
                                          <td>1</td>
                                          <td>Mobilgard 412</td>
                                          <td>Drum</td>
                                          <td>208</td>
                                      </tr>
                                      <tr>
                                          <td>2</td>
                                          <td>Mobilgard 430</td>
                                          <td>Drum</td>
                                          <td>208</td>
                                      </tr>
                                      <tr>
                                          <td>3</td>
                                          <td>Mobilgard 440</td>
                                          <td>Drum</td>
                                          <td>208</td>
                                      </tr>
                                  </tbody>
                              </table>
                              </p>
                          </div>
                      </div>
                  </div>
              
                  <div class="card">
                      <div class="card-header" id="headingThree">
                          <h5 class="mb-0">
                              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#m3" aria-expanded="false"
                                  aria-controls="collapseThree">
                                  Hydraulic Oils
                              </button>
                          </h5>
                      </div>
                      <div id="m3" class="collapse" aria-labelledby="headingThree" data-parent="#accordion" style="">
                          <div class="card-body">
                              <h6>Typical Properties</h6>
                              <p>
                              <table>
                                  <tbody>
                                      <tr>
                                          <th>No</th>
                                          <th>Jenis Pelumas</th>
                                          <th>Kemasan</th>
                                          <th>Satuan(ltr)</th>
                                      </tr>
                                      <tr>
                                          <td>1</td>
                                          <td>Mobil DTE Oil 24</td>
                                          <td>Drum</td>
                                          <td>208</td>
                                      </tr>
                                      <tr>
                                          <td>2</td>
                                          <td>Mobil DTE Oil 25</td>
                                          <td>Drum</td>
                                          <td>208</td>
                                      </tr>
                                      <tr>
                                          <td>3</td>
                                          <td>Mobil DTE Oil 26</td>
                                          <td>Drum</td>
                                          <td>208</td>
                                      </tr>
                                      <tr>
                                          <td>4</td>
                                          <td>Mobil DTE Oil 27</td>
                                          <td>Drum</td>
                                          <td>208</td>
                                      </tr>
                                      <tr>
                                          <td>5</td>
                                          <td>Mobil DTE 11M</td>
                                          <td>Drum</td>
                                          <td>208</td>
                                      </tr>
                                      <tr>
                                          <td>6</td>
                                          <td>Mobil DTE 13M</td>
                                          <td>Drum</td>
                                          <td>208</td>
                                      </tr>
                                      <tr>
                                          <td>7</td>
                                          <td>Mobil DTE 15M</td>
                                          <td>Drum</td>
                                          <td>208</td>
                                      </tr>
                                      <tr>
                                          <td>8</td>
                                          <td>Mobil DTE 16M</td>
                                          <td>Drum</td>
                                          <td>208</td>
                                      </tr>
                                      <tr>
                                          <td>9</td>
                                          <td>Mobil DTE 18M</td>
                                          <td>Drum</td>
                                          <td>208</td>
                                      </tr>
                                      <tr>
                                          <td>10</td>
                                          <td>Mobil DTE 19M</td>
                                          <td>Drum</td>
                                          <td>208</td>
                                      </tr>
                                  </tbody>
                              </table>
                              </p>
                          </div>
                      </div>
                  </div>
              
                  <div class="card">
                      <div class="card-header" id="headingThree">
                          <h5 class="mb-0">
                              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#m4" aria-expanded="false"
                                  aria-controls="collapseThree">
                                  Industrial Gear Oils
                              </button>
                          </h5>
                      </div>
                      <div id="m4" class="collapse" aria-labelledby="headingThree" data-parent="#accordion" style="">
                          <div class="card-body">
                              <h6>Typical Properties</h6>
                              <p>
                              <table>
                                  <tbody>
                                      <tr>
                                          <th>No</th>
                                          <th>Jenis Pelumas</th>
                                          <th>Kemasan</th>
                                          <th>Satuan(ltr)</th>
                                      </tr>
                                      <tr>
                                          <td>1</td>
                                          <td>Mobilgear 626</td>
                                          <td>Drum</td>
                                          <td>208</td>
                                      </tr>
                                  </tbody>
                              </table>
                              </p>
                          </div>
                      </div>
                  </div>
              
                  <div class="card">
                      <div class="card-header" id="headingThree">
                          <h5 class="mb-0">
                              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#m5" aria-expanded="false"
                                  aria-controls="collapseThree">
                                  Compressor Oils
                              </button>
                          </h5>
                      </div>
                      <div id="m5" class="collapse" aria-labelledby="headingThree" data-parent="#accordion" style="">
                          <div class="card-body">
                              <h6>Typical Properties</h6>
                              <p>
                              <table>
                                  <tbody>
                                      <tr>
                                          <th>No</th>
                                          <th>Jenis Pelumas</th>
                                          <th>Kemasan</th>
                                          <th>Satuan(ltr)</th>
                                      </tr>
                                      <tr>
                                          <td>1</td>
                                          <td>Mobil Rarus 424</td>
                                          <td>Drum</td>
                                          <td>208</td>
                                      </tr>
                                      <tr>
                                          <td>2</td>
                                          <td>Mobil Rarus 425</td>
                                          <td>Drum</td>
                                          <td>208</td>
                                      </tr>
                                      <tr>
                                          <td>3</td>
                                          <td>Mobil Rarus 426</td>
                                          <td>Drum</td>
                                          <td>208</td>
                                      </tr>
                                      <tr>
                                          <td>4</td>
                                          <td>Mobil Rarus 427</td>
                                          <td>Drum</td>
                                          <td>208</td>
                                      </tr>
                                      <tr>
                                          <td>5</td>
                                          <td>Mobil Rarus 429</td>
                                          <td>Drum</td>
                                          <td>208</td>
                                      </tr>
                                      <tr>
                                          <td>6</td>
                                          <td>Mobil Gargoyle Arctic 300</td>
                                          <td>Drum</td>
                                          <td>208</td>
                                      </tr>
                                      <tr>
                                          <td>7</td>
                                          <td>Mobil Gargoyle Arctic 155</td>
                                          <td>Drum</td>
                                          <td>208</td>
                                      </tr>
                                      <tr>
                                          <td>8</td>
                                          <td>Mobil Gargoyle Arctic 226</td>
                                          <td>Drum</td>
                                          <td>208</td>
                                      </tr>
                                      <tr>
                                          <td>9</td>
                                          <td>Mobil Gargoyle Arctic 230</td>
                                          <td>Drum</td>
                                          <td>208</td>
                                      </tr>
                                  </tbody>
                              </table>
                              </p>
                          </div>
                      </div>
                  </div>
              
                  <div class="card">
                      <div class="card-header" id="headingThree">
                          <h5 class="mb-0">
                              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#m6" aria-expanded="false"
                                  aria-controls="collapseThree">
                                  Turbin Circulation Oils
                              </button>
                          </h5>
                      </div>
                      <div id="m6" class="collapse" aria-labelledby="headingThree" data-parent="#accordion" style="">
                          <div class="card-body">
                              <h6>Typical Properties</h6>
                              <p>
                              <table>
                                  <tbody>
                                      <tr>
                                          <th>No</th>
                                          <th>Jenis Pelumas</th>
                                          <th>Kemasan</th>
                                          <th>Satuan(ltr)</th>
                                      </tr>
                                      <tr>
                                          <td>1</td>
                                          <td>Mobil DTE Oil Light</td>
                                          <td>Drum</td>
                                          <td>208</td>
                                      </tr>
                                      <tr>
                                          <td>2</td>
                                          <td>Mobil DTE Oil Medium</td>
                                          <td>Drum</td>
                                          <td>208</td>
                                      </tr>
                                      <tr>
                                          <td>3</td>
                                          <td>Mobil DTE Oil Heavy Medium</td>
                                          <td>Drum</td>
                                          <td>208</td>
                                      </tr>
                                      <tr>
                                          <td>4</td>
                                          <td>Mobil DTE Oil Heavy</td>
                                          <td>Drum</td>
                                          <td>208</td>
                                      </tr>
                                      <tr>
                                          <td>5</td>
                                          <td>Mobil DTE Oil Extra Heavy</td>
                                          <td>Drum</td>
                                          <td>208</td>
                                      </tr>
                                  </tbody>
                              </table>
                              </p>
                          </div>
                      </div>
                  </div>
              
                  <div class="card">
                      <div class="card-header" id="headingThree">
                          <h5 class="mb-0">
                              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#m7" aria-expanded="false"
                                  aria-controls="collapseThree">
                                  Transmission Oils
                              </button>
                          </h5>
                      </div>
                      <div id="m7" class="collapse" aria-labelledby="headingThree" data-parent="#accordion" style="">
                          <div class="card-body">
                              <h6>Typical Properties</h6>
                              <p>
                              <table>
                                  <tbody>
                                      <tr>
                                          <th>No</th>
                                          <th>Jenis Pelumas</th>
                                          <th>Kemasan</th>
                                          <th>Satuan(ltr)</th>
                                      </tr>
                                      <tr>
                                          <td>1</td>
                                          <td>Mobil ATF 220</td>
                                          <td>Drum</td>
                                          <td>208</td>
                                      </tr>
                                      <tr>
                                          <td>2</td>
                                          <td>Mobil HD 80W-90</td>
                                          <td>Drum</td>
                                          <td>208</td>
                                      </tr>
                                      <tr>
                                          <td>3</td>
                                          <td>Mobil HD 85W-140</td>
                                          <td>Drum</td>
                                          <td>208</td>
                                      </tr>
                                  </tbody>
                              </table>
                              </p>
                          </div>
                      </div>
                  </div>
              
                  <div class="card">
                      <div class="card-header" id="headingThree">
                          <h5 class="mb-0">
                              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#m8" aria-expanded="false"
                                  aria-controls="collapseThree">
                                  Gas Engine Oils
                              </button>
                          </h5>
                      </div>
                      <div id="m8" class="collapse" aria-labelledby="headingThree" data-parent="#accordion" style="">
                          <div class="card-body">
                              <h6>Typical Properties</h6>
                              <p>
                              <table>
                                  <tbody>
                                      <tr>
                                          <th>No</th>
                                          <th>Jenis Pelumas</th>
                                          <th>Kemasan</th>
                                          <th>Satuan(ltr)</th>
                                      </tr>
                                      <tr>
                                          <td>1</td>
                                          <td>Mobil Pegasus 805</td>
                                          <td>Drum</td>
                                          <td>208</td>
                                      </tr>
                                  </tbody>
                              </table>
                              </p>
                          </div>
                      </div>
                  </div>
              
                  <div class="card">
                      <div class="card-header" id="headingThree">
                          <h5 class="mb-0">
                              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#m9" aria-expanded="false"
                                  aria-controls="collapseThree">
                                  Greases
                              </button>
                          </h5>
                      </div>
                      <div id="m9" class="collapse" aria-labelledby="headingThree" data-parent="#accordion" style="">
                          <div class="card-body">
                              <h6>Typical Properties</h6>
                              <p>
                              <table>
                                  <tbody>
                                      <tr>
                                          <th>No</th>
                                          <th>Jenis Pelumas</th>
                                          <th>Kemasan</th>
                                          <th>Satuan(ltr)</th>
                                      </tr>
                                      <tr>
                                          <td>1</td>
                                          <td>Mobil Grease XHP 222</td>
                                          <td>Drum</td>
                                          <td>208</td>
                                      </tr>
                                      <tr>
                                          <td>2</td>
                                          <td>Mobil CMP Grease</td>
                                          <td>Drum</td>
                                          <td>208</td>
                                      </tr>
                                      <tr>
                                          <td>3</td>
                                          <td>Mobillux EP 0</td>
                                          <td>Drum</td>
                                          <td>208</td>
                                      </tr>
                                      <tr>
                                          <td>4</td>
                                          <td>Mobillux EP 1</td>
                                          <td>Drum</td>
                                          <td>208</td>
                                      </tr>
                                      <tr>
                                          <td>5</td>
                                          <td>Mobillux EP 2</td>
                                          <td>Drum</td>
                                          <td>208</td>
                                      </tr>
                                      <tr>
                                          <td>6</td>
                                          <td>Mobillux EP 3</td>
                                          <td>Drum</td>
                                          <td>208</td>
                                      </tr>
                                  </tbody>
                              </table>
                              </p>
                          </div>
                      </div>
                  </div>
                  <div class="card">
                      <div class="card-header" id="headingThree">
                          <h5 class="mb-0">
                              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#m10" aria-expanded="false"
                                  aria-controls="collapseThree">
                                  Syntetics Oils
                              </button>
                          </h5>
                      </div>
                      <div id="m10" class="collapse" aria-labelledby="headingThree" data-parent="#accordion" style="">
                          <div class="card-body">
                              <h6>Typical Properties</h6>
                              <p>
                              <table>
                                  <tbody>
                                      <tr>
                                          <th>No</th>
                                          <th>Jenis Pelumas</th>
                                          <th>Kemasan</th>
                                          <th>Satuan(ltr)</th>
                                      </tr>
                                      <tr>
                                          <td>1</td>
                                          <td>Mobil SHC 624</td>
                                          <td>Drum</td>
                                          <td>208</td>
                                      </tr>
                                      <tr>
                                          <td>2</td>
                                          <td>Mobil SHC 626</td>
                                          <td>Drum</td>
                                          <td>208</td>
                                      </tr>
                                      <tr>
                                          <td>3</td>
                                          <td>Mobil SHC 627</td>
                                          <td>Drum</td>
                                          <td>208</td>
                                      </tr>
                                      <tr>
                                          <td>4</td>
                                          <td>Mobil SHC 629</td>
                                          <td>Drum</td>
                                          <td>208</td>
                                      </tr>
                                      <tr>
                                          <td>5</td>
                                          <td>Mobil SHC 630</td>
                                          <td>Drum</td>
                                          <td>208</td>
                                      </tr>
                                      <tr>
                                          <td>6</td>
                                          <td>Mobil SHC 632</td>
                                          <td>Drum</td>
                                          <td>208</td>
                                      </tr>
                                      <tr>
                                          <td>7</td>
                                          <td>Mobil SHC 634</td>
                                          <td>Drum</td>
                                          <td>208</td>
                                      </tr>
                                      <tr>
                                          <td>8</td>
                                          <td>Mobil SHC 636</td>
                                          <td>Drum</td>
                                          <td>208</td>
                                      </tr>
                                      <tr>
                                          <td>9</td>
                                          <td>Mobil SHC 639</td>
                                          <td>Drum</td>
                                          <td>208</td>
                                      </tr>
                                      <tr>
                                          <td>10</td>
                                          <td>Mobil Rarus SHC 1026</td>
                                          <td>Drum</td>
                                          <td>208</td>
                                      </tr>
                                      <tr>
                                          <td>11</td>
                                          <td>Mobil Rarus SHC 824</td>
                                          <td>Drum</td>
                                          <td>208</td>
                                      </tr>
                                      <tr>
                                          <td>12</td>
                                          <td>Mobil Rarus SHC 826</td>
                                          <td>Drum</td>
                                          <td>208</td>
                                      </tr>
                                      <tr>
                                          <td>13</td>
                                          <td>Mobil Rarus SHC 827</td>
                                          <td>Drum</td>
                                          <td>208</td>
                                      </tr>
                                      <tr>
                                          <td>14</td>
                                          <td>Mobil Rarus SHC 829</td>
                                          <td>Drum</td>
                                          <td>208</td>
                                      </tr>
                                      <tr>
                                          <td>15</td>
                                          <td>Mobil Jet Oil II</td>
                                          <td>Drum</td>
                                          <td>208</td>
                                      </tr>
                                      <tr>
                                          <td>16</td>
                                          <td>Mobil Glygoyle 11</td>
                                          <td>Drum</td>
                                          <td>208</td>
                                      </tr>
                                      <tr>
                                          <td>17</td>
                                          <td>Mobil Glygoyle 22</td>
                                          <td>Drum</td>
                                          <td>208</td>
                                      </tr>
                                      <tr>
                                          <td>18</td>
                                          <td>Mobil Glygoyle 30</td>
                                          <td>Drum</td>
                                          <td>208</td>
                                      </tr>
                                      <tr>
                                          <td>19</td>
                                          <td>Mobil Glygoyle HE 320</td>
                                          <td>Drum</td>
                                          <td>208</td>
                                      </tr>
                                      <tr>
                                          <td>20</td>
                                          <td>Mobil Glygoyle HE 460</td>
                                          <td>Drum</td>
                                          <td>208</td>
                                      </tr>
                                      <tr>
                                          <td>21</td>
                                          <td>Mobil Glygoyle HE 680</td>
                                          <td>Drum</td>
                                          <td>208</td>
                                      </tr>
                                      <tr>
                                          <td>22</td>
                                          <td>Mobil Glygoyle Arctic SHC 226E</td>
                                          <td>Drum</td>
                                          <td>208</td>
                                      </tr>
                                      <tr>
                                          <td>23</td>
                                          <td>Mobilgear SHC 150</td>
                                          <td>Drum</td>
                                          <td>208</td>
                                      </tr>
                                      <tr>
                                          <td>24</td>
                                          <td>Mobilgear SHC 220</td>
                                          <td>Drum</td>
                                          <td>208</td>
                                      </tr>
                                      <tr>
                                          <td>25</td>
                                          <td>Mobilgear SHC 320</td>
                                          <td>Drum</td>
                                          <td>208</td>
                                      </tr>
                                      <tr>
                                          <td>26</td>
                                          <td>Mobilgear SHC 460</td>
                                          <td>Drum</td>
                                          <td>208</td>
                                      </tr>
                                      <tr>
                                          <td>27</td>
                                          <td>Mobilgear SHC 680</td>
                                          <td>Drum</td>
                                          <td>208</td>
                                      </tr>
                                      <tr>
                                          <td>28</td>
                                          <td>Mobil Grease 28</td>
                                          <td>Drum</td>
                                          <td>208</td>
                                      </tr>
                                  </tbody>
                              </table>
                              </p>
                          </div>
                      </div>
                  </div>
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