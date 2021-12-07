<?php

namespace Database\Seeders;

use App\Models\IsiProduk;
use Illuminate\Database\Seeder;

class IsiProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        IsiProduk::create([
            'judul' => 'Diesel Engine Oil',
            'isi' => '
            <div class="card-body">
              <h4>Premium Racing</h4>
              <div class="download_right" align="right">
                                            <a class="boxed-btn3-line" href="https://drive.google.com/file/d/1UkobVoO6iztKwjCnkU0MhSekIij88DyM/view?usp=sharing" target="_blank">Download File</a>
                                        </div>
              <h6>Typical Properties</h6>
              <table>
                <tbody>
                <tr>
                <td>SAE Viscosity Grade</td>
                <td>SAE J 3000</td>
                <td>SAE 10</td>
                <td>SAE 30</td>
                <td>SAE 40</td>
                <td>SAE 50</td>
                </tr>
                <tr>
                <td>API Service</td>
                <td>SAE J 183</td>
                <td>CF/SF</td>
                <td>CF/SF</td>
                <td>CF/SF</td>
                <td>CF/SF</td>
                </tr>
                <tr>
                <td>Density @ 15 &#8451;</td>
                <td>ASTM D 1298</td>
                <td>0.883</td>
                <td>0.892</td>
                <td>0.895</td>
                <td>0.900</td>
                </tr>
                <tr>
                <td>Flash Point, &#8451;</td>
                <td>ASTM D 92</td>
                <td>232</td>
                <td>236</td>
                <td>248</td>
                <td>250</td>
                </tr>
                <tr>
                <td>Pour Point, &#8451;</td>
                <td>ASTM D 97</td>
                <td>-10</td>
                <td>-12</td>
                <td>-12</td>
                <td>-9</td>
                </tr>
                <tr>
                <td>Kinematic Viscosity</td>
                <td>ASTM D 445</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                </tr>
                <tr>
                <td>@40 &#8451;</td>
                <td></td>
                <td>41</td>
                <td>111.3</td>
                <td>143</td>
                <td>235.5</td>
                </tr>
                <tr>
                <td>@ 100 &#8451;</td>
                <td></td>
                <td>6.6</td>
                <td>12.7</td>
                <td>15.7</td>
                <td>19.8</td>
                </tr>
                <tr>
                <td>Viscosity Index</td>
                <td>ASTM D 2270</td>
                <td>114</td>
                <td>106</td>
                <td>113.8</td>
                <td>96.3</td>
                </tr>
                <tr>
                <td>TBN</td>
                <td>ASTM D 2896</td>
                <td>10</td>
                <td>10</td>
                <td>10</td>
                <td>10</td>
                </tr>
                </tbody>
                </table>
                <br><br>
                <h4>Premium Diesel</h4>
<div class="download_right" align="right">
                                            <a class="boxed-btn3-line" href="https://drive.google.com/file/d/15RWAr5HBsDGn8uJyj7AergSTbTIY8bzB/view?usp=sharing" target="_blank">Download File</a>
                                        </div>
                <h6>Typical Properties</h6>
                <table>
                <tbody>
                <tr>
                <td>SAE Viscosity Grade</td>
                <td>SAE J 3000</td>
                <td>SAE 15w-40</td>
                <td>SAE 15w-40</td>
                <td>SAE 15w-40</td>
                </tr>
                <tr>
                <td>API Service</td>
                <td>SAE J 183</td>
                <td>CF-4/SG</td>
                <td>CH-4/SJ</td>
                <td>CI-4/SL</td>
                </tr>
                <tr>
                <td>Density @ 15 &#8451;</td>
                <td>ASTM D 1298</td>
                <td>0.886</td>
                <td>0.886</td>
                <td>0.886</td>
                </tr>
                <tr>
                <td>Flash Point, &#8451;</td>
                <td>ASTM D 92</td>
                <td>244</td>
                <td>244</td>
                <td>248</td>
                </tr>
                <tr>
                <td>Pour Point, &#8451;</td>
                <td>ASTM D 97</td>
                <td>-24</td>
                <td>-24</td>
                <td>-24</td>
                </tr>
                <tr>
                <td>Kinematic Viscosity</td>
                <td>ASTM D 445</td>
                <td></td>
                <td></td>
                <td></td>
                </tr>
                <tr>
                <td>@40 &#8451;</td>
                <td></td>
                <td>130</td>
                <td>130</td>
                <td>130</td>
                </tr>
                <tr>
                <td>@ 100 &#8451;</td>
                <td></td>
                <td>15.8</td>
                <td>15.8</td>
                <td>15.8</td>
                </tr>
                <tr>
                <td>Viscosity Index</td>
                <td>ASTM D 2270</td>
                <td>127</td>
                <td>127</td>
                <td>127</td>
                </tr>
                <tr>
                <td>TBN</td>
                <td>ASTM D 2896</td>
                <td>11.6</td>
                <td>11.6</td>
                <td>12</td>
                </tr>
                </tbody>
                </table>
            </div>
            ',
            'produk_slug' => 'Nebula-Oil',
        ]);

        IsiProduk::create([
            'judul' => 'Marine Oil',
            'isi' => '
            <div class="card-body">
            <h4>Marine SAE 40</h4>
<div class="download_right" align="right">
                                          <a class="boxed-btn3-line" href="https://drive.google.com/file/d/1Jeamq5C2Wxtxe7Ug2Z87o6eZuGXghcY3/view?usp=sharing" target="_blank">Download File</a>
                                      </div>
            <h6>Typical Properties</h6>
            <p>
              <table>
              <tbody>
              <tr>
              <td>SAE Viscosity Grade</td>
              <td>SAE J 3000</td>
              <td>SAE 40 TBN 12</td>
              <td>SAE 40 TBN 20</td>
              <td>SAE 40 TBN 30</td>
              <td>SAE 40 TBN 40</td>
              </tr>
              <tr>
              <td>API Service</td>
              <td>SAE J 183</td>
              <td>CD/SD</td>
              <td>CD/SD</td>
              <td>CD/SD</td>
              <td>CD/SD</td>
              </tr>
              <tr>
              <td>Density @ 15 &#8451;</td>
              <td>ASTM D 1298</td>
              <td>0.900</td>
              <td>0.900</td>
              <td>0.901</td>
              <td>0.909</td>
              </tr>
              <tr>
              <td>Flash Point, &#8451;</td>
              <td>ASTM D 92</td>
              <td>266</td>
              <td>260</td>
              <td>255</td>
              <td>250</td>
              </tr>
              <tr>
              <td>Pour Point, &#8451;</td>
              <td>ASTM D 97</td>
              <td>-12</td>
              <td>-12</td>
              <td>-12</td>
              <td>-12</td>
              </tr>
              <tr>
              <td>Kinematic Viscosity</td>
              <td>ASTM D 445</td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              </tr>
              <tr>
              <td>@40 &#8451;</td>
              <td></td>
              <td>165</td>
              <td>156</td>
              <td>156</td>
              <td>157</td>
              </tr>
              <tr>
              <td>@ 100 &#8451;</td>
              <td></td>
              <td>15.8</td>
              <td>15.3</td>
              <td>15.4</td>
              <td>15.3</td>
              </tr>
              <tr>
              <td>Viscosity Index</td>
              <td>ASTM D 2270</td>
              <td>99</td>
              <td>98</td>
              <td>99</td>
              <td>98</td>
              </tr>
              <tr>
              <td>TBN</td>
              <td>ASTM D 2896</td>
              <td>12</td>
              <td>20</td>
              <td>32</td>
              <td>41</td>
              </tr>
              </tbody>
              </table>
            </p>
          </div>
            ',
            'produk_slug' => 'Nebula-Oil',
        ]);

        IsiProduk::create([
            'judul' => 'Industrial Hydraulic Oil',
            'isi' => '
            <div class="card-body">
            <h4>Sky Hydro</h4>
<div class="download_right" align="right">
                                          <a class="boxed-btn3-line" href="https://drive.google.com/file/d/1MwWObfEEGrcqbs8irUt9qgPn_oPW-5ku/view?usp=sharing" target="_blank">Download File</a>
                                      </div>
            <h6>Typical Properties</h6>
            <p>
              <table>
              <tbody>
              <tr>
              <td>Characteristics</td>
              <td>ASTM</td>
              <td>32</td>
              <td>46</td>
              <td>68</td>
              <td>100</td>
              </tr>
              <tr>
              <td>Density at 15 &#8451; /kg/L</td>
              <td>D 1298</td>
              <td>0.86</td>
              <td>0.86</td>
              <td>0.86</td>
              <td>0.876</td>
              </tr>
              <tr>
              <td>Kinematic Viscosity @40 &#8451;</td>
              <td>D 445/td&gt;</td>
              <td>32</td>
              <td>46</td>
              <td>68</td>
              <td>100</td>
              </tr>
              <tr>
              <td>@100 &#8451;</td>
              <td>D 445</td>
              <td>5.5</td>
              <td>6.8</td>
              <td>8.8</td>
              <td>11.6</td>
              </tr>
              <tr>
              <td>Viscosity Index</td>
              <td>D 2270</td>
              <td>108</td>
              <td>101</td>
              <td>102</td>
              <td>104</td>
              </tr>
              <tr>
              <td>Flash point</td>
              <td>D 92</td>
              <td>210</td>
              <td>212</td>
              <td>220</td>
              <td>223</td>
              </tr>
              <tr>
              <td>Pour point, &#8451;</td>
              <td>D 97</td>
              <td>-12</td>
              <td>-12</td>
              <td>-12</td>
              <td>-12</td>
              </tr>
              <tr>
              <td>Four ball wear,Scar mm</td>
              <td>D 2266</td>
              <td>0.480</td>
              <td>0.410</td>
              <td>0.435</td>
              <td>0.483</td>
              </tr>
              <tr>
              <td>Foaming Characteristic</td>
              <td>D 892</td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              </tr>
              <tr>
              <td>Sequence I</td>
              <td></td>
              <td>0/0</td>
              <td>0/0</td>
              <td>0/0</td>
              <td>0/0</td>
              </tr>
              </tbody>
              </table>
            </p>
          </div>
            ',
            'produk_slug' => 'Nebula-Oil',
        ]);

        IsiProduk::create([
            'judul' => 'Industrial Gear Oil',
            'isi' => '
            <div class="card-body">
            <h4>IGO</h4>
<div class="download_right" align="right">
                                            <a class="boxed-btn3-line" href="https://drive.google.com/file/d/1Jzd6ZaG_PbsHO0eZIQH80nD3FqglAXzt/view?usp=sharing" target="_blank">Download File</a>
                                        </div>
            <h6>Typical Properties</h6>
            <div class="card-body">
              <p>
                <table>
                <tbody>
                <tr>
                <td>Characteristics</td>
                <td>ASTM</td>
                <td>100</td>
                <td>150</td>
                <td>220</td>
                <td>320</td>
                <td>460</td>
                <td>680</td>
                </tr>
                <tr>
                <td>Density at 15 &#8451; /kg/L</td>
                <td>D 1298</td>
                <td>0.872</td>
                <td>0.876</td>
                <td>0.887</td>
                <td>0.896</td>
                <td>0.903</td>
                <td>0.912</td>
                </tr>
                <tr>
                <td>Kinematic Viscosity @40 &#8451;</td>
                <td>D 445</td>
                <td>97</td>
                <td>149</td>
                <td>220</td>
                <td>315</td>
                <td>424</td>
                <td>632</td>
                </tr>
                <tr>
                <td>@100 &#8451;</td>
                <td>D 445</td>
                <td>10.9</td>
                <td>15</td>
                <td>19</td>
                <td>26</td>
                <td>29</td>
                <td>32.5</td>
                </tr>
                <tr>
                <td>Viscosity Index</td>
                <td>D 2270</td>
                <td>105</td>
                <td>101</td>
                <td>98</td>
                <td>97</td>
                <td>96</td>
                <td>78</td>
                </tr>
                <tr>
                <td>Flash point</td>
                <td>D 92</td>
                <td>220</td>
                <td>225</td>
                <td>230</td>
                <td>240</td>
                <td>240</td>
                <td>278</td>
                </tr>
                <tr>
                <td>Pour point, &#8451;</td>
                <td>D 97</td>
                <td>-12</td>
                <td>-12</td>
                <td>-12</td>
                <td>-11</td>
                <td>-10</td>
                <td>-6</td>
                </tr>
                <tr>
                <td>Foaming Characteristic</td>
                <td>D 892</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                </tr>
                <tr>
                <td>Sequence I</td>
                <td></td>
                <td>0/0</td>
                <td>0/0</td>
                <td>0/0</td>
                <td>0/0</td>
                <td>0/0</td>
                <td>0/0</td>
                </tr>
                </tbody>
                </table>
              </p>
            </div>
            ',
            'produk_slug' => 'Nebula-Oil',
        ]);

        IsiProduk::create([
            'judul' => 'Transmission Oil',
            'isi' => '
            <h4>Centaurus HD</h4>
<div class="download_right" align="right">
                                            <a class="boxed-btn3-line" href="https://drive.google.com/file/d/1x-5QoGg5u2JQJ202Wm2H3FM5YcnnvnMs/view?usp=sharing" target="_blank">Download File</a>
                                        </div>
              <h6>Typical Properties</h6>
              <p>
                <table>
                <tbody>
                <tr>
                <td>Characteristics</td>
                <td>ASTM</td>
                <td>90 GL-4</td>
                <td>140 GL-4</td>
                <td>90 GL-5</td>
                <td>140 GL-5</td>
                </tr>
                <tr>
                <td>Density at 15 &#8451;/kg/L</td>
                <td>D 1298</td>
                <td>0.896</td>
                <td>0.904</td>
                <td>0.896</td>
                <td>0.904</td>
                </tr>
                <tr>
                <td>Kinematic Viscosity @40 &#8451;</td>
                <td>D 445</td>
                <td>173.5</td>
                <td>332</td>
                <td>173.5</td>
                <td>327</td>
                </tr>
                <tr>
                <td>@100 &#8451;</td>
                <td>D 445</td>
                <td>17.97</td>
                <td>28.5</td>
                <td>17.98</td>
                <td>27.2</td>
                </tr>
                <tr>
                <td>Viscosity Index</td>
                <td>D 2270</td>
                <td>114</td>
                <td>106</td>
                <td>114</td>
                <td>111</td>
                </tr>
                <tr>
                <td>Flash point</td>
                <td>D 92</td>
                <td>238</td>
                <td>254</td>
                <td>214</td>
                <td>254</td>
                </tr>
                <tr>
                <td>Foaming Characteristic</td>
                <td>D 892</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                </tr>
                <tr>
                <td>Sequence I</td>
                <td></td>
                <td>0/0</td>
                <td>0/0</td>
                <td>0/0</td>
                <td>0/0</td>
                </tr>
                </tbody>
                </table>
              </p>
              <h4>Dextron ATF</h4>
<div class="download_right" align="right">
                                            <a class="boxed-btn3-line" href="https://drive.google.com/file/d/1HhkQH-b_pDMaDyb7xOOuhwTTEOPiPoas/view?usp=sharing" target="_blank">Download File</a>
                                        </div>
              <h6>Typical Properties</h6>
              <p>
                <table>
                <tbody>
                <tr>
                <td>Characteristics</td>
                <td>ASTM</td>
                <td>DEXTRON ATF</td>
                </tr>
                <tr>
                <td>Density at &#8451; /kg/L</td>
                <td>D 1298</td>
                <td>0.872</td>
                </tr>
                <tr>
                <td>Kinematic Viscosity @40 &#8451;</td>
                <td>D 445</td>
                <td>33.5</td>
                </tr>
                <tr>
                <td>K@100 &#8451;</td>
                <td>D 445</td>
                <td>7.4</td>
                </tr>
                <tr>
                <td>Viscosity Index</td>
                <td>D 2270</td>
                <td>197</td>
                </tr>
                <tr>
                <td>Flash Point</td>
                <td>D 92</td>
                <td>196</td>
                </tr>
                <tr>
                <td>Pour Point</td>
                <td>D 97</td>
                <td>-27</td>
                </tr>
                <tr>
                <td>Colour</td>
                <td>Visual</td>
                <td>Red</td>
                </tr>
                </tbody>
                </table>
              </p>
            ',
            'produk_slug' => 'Nebula-Oil',
        ]);

        IsiProduk::create([
            'judul' => 'Compressor & Turbine Oil',
            'isi' => '
            <div class="card-body">
            <h4>Aquarius</h4>
<div class="download_right" align="right">
                                          <a class="boxed-btn3-line" href="https://drive.google.com/file/d/14aorJsHeO6mzKwAVBaLDgEj2kziiawmn/view?usp=sharing" target="_blank">Download File</a>
                                      </div>
            <h6>Typical Properties</h6>
            <p>
              <table>
              <tbody>
              <tr>
              <td>Characteristics</td>
              <td>ASTM</td>
              <td>32</td>
              <td>46</td>
              <td>68</td>
              <td>100</td>
              <td>150</td>
              <td>220</td>
              </tr>
              <tr>
              <td>Density at 15 &#8451; /kg/L</td>
              <td>D 1298</td>
              <td>0.866</td>
              <td>0.872</td>
              <td>0.887</td>
              <td>0.887</td>
              <td>0.887</td>
              <td>0.905</td>
              </tr>
              <tr>
              <td>Kinematic Viscosity @40 &#8451;</td>
              <td>D 445</td>
              <td>32</td>
              <td>46</td>
              <td>68</td>
              <td>100</td>
              <td>150</td>
              <td>220</td>
              </tr>
              <tr>
              <td>@100 &#8451;</td>
              <td>D 445</td>
              <td>5.4</td>
              <td>6.8</td>
              <td>9.7</td>
              <td>10.6</td>
              <td>13.8</td>
              <td>18.6</td>
              </tr>
              <tr>
              <td>Viscosity Index</td>
              <td>D 2270</td>
              <td>102</td>
              <td>101</td>
              <td>99</td>
              <td>94</td>
              <td>93</td>
              <td>93</td>
              </tr>
              <tr>
              <td>Flash point</td>
              <td>D 92</td>
              <td>220</td>
              <td>222</td>
              <td>225</td>
              <td>220</td>
              <td>230</td>
              <td>234</td>
              </tr>
              <tr>
              <td>Pour point, &#8451;</td>
              <td>D 97</td>
              <td>-15</td>
              <td>-14</td>
              <td>-12</td>
              <td>-12</td>
              <td>-10</td>
              <td>-9</td>
              </tr>
              </tbody>
              </table>
            </p>
            <h4>Turbine Oil</h4>
<div class="download_right" align="right">
                                          <a class="boxed-btn3-line" href="https://drive.google.com/file/d/1dxkGv1eRIm1P7Vona-booqq_fJsNDrUV/view?usp=sharing" target="_blank">Download File</a>
                                      </div>
            <h6>Typical Properties</h6>
            <p>
              <table>
              <tbody>
              <tr>
              <td>Characteristics</td>
              <td>ASTM</td>
              <td>32</td>
              <td>46</td>
              <td>68</td>
              <td>100</td>
              </tr>
              <tr>
              <td>Density at 15 &#8451; /kg/L</td>
              <td>D 1298</td>
              <td>0.852</td>
              <td>0.855</td>
              <td>0.860</td>
              <td>0.872</td>
              </tr>
              <tr>
              <td>Kinematic Viscosity @40 &#8451;</td>
              <td>D 445</td>
              <td>32</td>
              <td>46</td>
              <td>68</td>
              <td>100</td>
              </tr>
              <tr>
              <td>@100 &#8451;</td>
              <td>D 445</td>
              <td>5.5</td>
              <td>7.1</td>
              <td>8.9</td>
              <td>11.8</td>
              </tr>
              <tr>
              <td>Viscosity Index</td>
              <td>D 2270</td>
              <td>118</td>
              <td>115</td>
              <td>112</td>
              <td>109</td>
              </tr>
              <tr>
              <td>Flash point</td>
              <td>D 92</td>
              <td>222</td>
              <td>232</td>
              <td>242</td>
              <td>253</td>
              </tr>
              <tr>
              <td>Pour point, &#8451;</td>
              <td>D 97</td>
              <td>-15</td>
              <td>-15</td>
              <td>-15</td>
              <td>-13</td>
              </tr>
              <tr>
              <td>Foaming Characteristic</td>
              <td>D 892</td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              </tr>
              <tr>
              <td>Sequence I</td>
              <td></td>
              <td>0/0</td>
              <td>0/0</td>
              <td>0/0</td>
              <td>0/0</td>
              </tr>
              </tbody>
              </table>
            </p>
          </div>
            ',
            'produk_slug' => 'Nebula-Oil',
        ]);

        IsiProduk::create([
            'judul' => 'Heat Transfer Oil',
            'isi' => '
            <div class="card-body">
            <h4>HTO</h4>
<div class="download_right" align="right">
                                          <a class="boxed-btn3-line" href="https://drive.google.com/file/d/1COGBEParyT8MeFfwY8180QNguG88XVu5/view?usp=sharing" target="_blank">Download File</a>
                                      </div>
            <h6>Typical Properties</h6>
            <p>
              <table>
              <tbody>
              <tr>
              <td>Characteristics</td>
              <td>ASTM</td>
              <td>HTO 32</td>
              </tr>
              <tr>
              <td>Density at 15 &#8451; /kg/L</td>
              <td>D 1298</td>
              <td>0.886</td>
              </tr>
              <tr>
              <td>Kinematic Viscosity @40 &#8451;</td>
              <td>D 445</td>
              <td>32</td>
              </tr>
              <tr>
              <td>@100 &#8451;</td>
              <td>D 445</td>
              <td>5.48</td>
              </tr>
              <tr>
              <td>Viscosity Index</td>
              <td>D 2270</td>
              <td>101</td>
              </tr>
              <tr>
              <td>Flash Point</td>
              <td>D 92</td>
              <td>226</td>
              </tr>
              <tr>
              <td>Pour Point</td>
              <td>D 97</td>
              <td>-12</td>
              </tr>
              <tr>
              <td>Foaming Characteristic</td>
              <td>D 892</td>
              <td></td>
              </tr>
              <tr>
              <td>Sequence I</td>
              <td></td>
              <td>0/0</td>
              </tr>
              </tbody>
              </table>
            </p>
          </div>
            ',
            'produk_slug' => 'Nebula-Oil',
        ]);

        IsiProduk::create([
            'judul' => 'Cuting Oil',
            'isi' => '
            <div class="card-body">
            <h4>Soluble Cutting</h4>
<div class="download_right" align="right">
                                          <a class="boxed-btn3-line" href="https://drive.google.com/file/d/1ZU0OkuIepUdwubQrkUFgW64Mg_ulyUQs/view?usp=sharing" target="_blank">Download File</a>
                                      </div>
            <h6>Typical Properties</h6>
            <p>
              <table>
              <tbody>
              <tr>
              <td>Characteristics</td>
              <td>ASTM</td>
              <td>HTO 32</td>
              </tr>
              <tr>
              <td>Density at 15 &#8451; /kg/L</td>
              <td>D 1298</td>
              <td>0.886</td>
              </tr>
              <tr>
              <td>Kinematic Viscosity @40 &#8451;</td>
              <td>D 445</td>
              <td>36</td>
              </tr>
              <tr>
              <td>@100 &#8451;</td>
              <td>D 445</td>
              <td>7.4</td>
              </tr>
              <tr>
              <td>Viscosity Index</td>
              <td>D 2270</td>
              <td>117</td>
              </tr>
              <tr>
              <td>Flash Point</td>
              <td>D 92</td>
              <td>170</td>
              </tr>
              <tr>
              <td>Pour Point</td>
              <td>D 97</td>
              <td>-25</td>
              </tr>
              <tr>
              <td>Colour</td>
              <td>D 1500</td>
              <td>? 2.5</td>
              </tr>
              </tbody>
              </table>
            </p>
          </div>
            ',
            'produk_slug' => 'Nebula-Oil',
        ]);

        IsiProduk::create([
            'judul' => 'Calcium Grease',
            'isi' => '
            <div class="card-body">
            <h4>Chassis MP</h4>
<div class="download_right" align="right">
                            <a class="boxed-btn3-line" href="https://drive.google.com/file/d/1hgSq_gNUie71HavvZjcZe6NB7vBKYOes/view?usp=sharing" target="_blank">Download File</a>
                        </div>
<h6>Typical Properties</h6>
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
                <br><br>
                <h4>Calcium Sulfonate</h4>
                <div class="download_right" align="right">
                                                                            <a class="boxed-btn3-line" href="https://drive.google.com/file/d/1gt5nvQ6dRsial1VrbaA9kc5w_1FctFkb/view?usp=sharing" target="_blank">Download File</a>
                                                                    </div>
                <h6>Typical Properties</h6>
                <table>
                    <tbody>
                    <tr>
                    <td>Properties</td>
                    <td>ASTM</td>
                    <td>Calcium Sulfonate 2</td>
                    <td>Calcium Sulfonate 3</td>
                    </tr>
                    <tr>
                    <td>NLGI Grade</td>
                    <td></td>
                    <td>2</td>
                    <td>3</td>
                    </tr>
                    <tr>
                    <td>Colour</td>
                    <td>Visual</td>
                    <td>Light Brown</td>
                    <td>Light Brown</td>
                    </tr>
                    <tr>
                    <td>Dropping Point &#8451;</td>
                    <td>D 2265</td>
                    <td>>320</td>
                    <td>>320</td>
                    </tr>
                    <tr>
                    <td>Oil Separation</td>
                    <td>D 6184</td>
                    <td>0.22%</td>
                    <td>0.18%</td>
                    </tr>
                    <tr>
                    <td>Copper Corrosion @52 &#8451;</td>
                    <td>D 1743</td>
                    <td>pass</td>
                    <td>Pass</td>
                    </tr>
                    <tr>
                    <td>Penetration (1/10mm)</td>
                    <td>D 217</td>
                    <td>265-295</td>
                    <td>220-250</td>
                    </tr>
                    <tr>
                    <td>Four Ball Wear, Scar mm</td>
                    <td>D 2266</td>
                    <td>0.434</td>
                    <td>0.465</td>
                    </tr>
                    <tr>
                    <td>Four Ball EP, Weld Point</td>
                    <td>D 2596</td>
                    <td>400</td>
                    <td>400</td>
                    </tr>
                    </tbody>
                    </table>
</div>
            ',
            'produk_slug' => 'Nebula-Oil',
        ]);

        IsiProduk::create([
            'judul' => 'Lithium Grease',
            'isi' => '
            <div class="card-body">
            <h4>Lithium MP</h4>
<div class="download_right" align="right">
                                          <a class="boxed-btn3-line" href="https://drive.google.com/file/d/1-Q3FOj8jtZkM8So69oEyIk6uID8p_xqL/view?usp=sharing" target="_blank">Download File</a>
                                      </div>
            <h6>Typical Properties</h6>
              <table>
              <tbody>
              <tr>
              <td>Colour</td>
              <td>Visual</td>
              <td>Natural</td>
              <td>Natural</td>
              </tr>
              <tr>
              <td>Texture</td>
              <td>Visual</td>
              <td>Smooth</td>
              <td>Smooth</td>
              </tr>
              <tr>
              <td>NLGI Grade</td>
              <td></td>
              <td>2</td>
              <td>3</td>
              </tr>
              <tr>
              <td>Thickener</td>
              <td>ASTM D 128</td>
              <td>Lithium</td>
              <td>Lithium</td>
              </tr>
              <tr>
              <td>Penetration Stroke @25 &#8451;</td>
              <td>ASTM D 217</td>
              <td>265-295</td>
              <td>220-250</td>
              </tr>
              <tr>
              <td>Dropping Point &#8451;</td>
              <td>ASTM D 556</td>
              <td>175</td>
              <td>175</td>
              </tr>
              </tbody>
              </table>
            <br><br>
            <h4>Lithium EP 00,0,1 Natural</h4>
            <div class="download_right" align="right">
                                                                        <a class="boxed-btn3-line" href="https://drive.google.com/file/d/1e0ahDsjNGXF3uI_iT4fp3aknlR6oWhU4/view?usp=sharing" target="_blank">Download File</a>
                                                                </div>
            <h6>Typical Properties</h6>
            <table>
                                  <tbody>
                                  <tr>
                                  <td>Colour</td>
                                  <td>Visual</td>
                                  <td>Natural</td>
                                  <td>Natural</td>
                                  <td>Natural</td>
                                  </tr>
                                  <tr>
                                  <td>Texture</td>
                                  <td>Visual</td>
                                  <td>Smooth</td>
                                  <td>Smooth</td>
                                  <td>Smooth</td>
                                  </tr>
                                  <tr>
                                  <td>NLGI</td>
                                  <td>ASTM D 217</td>
                                  <td>00</td>
                                  <td>0</td>
                                  <td>1</td>
                                  </tr>
                                  <tr>
                                  <td>Thickener</td>
                                  <td>ASTM D 128</td>
                                  <td>Lithium</td>
                                  <td>Lithium</td>
                                  <td>Lithium</td>
                                  </tr>
                                  <tr>
                                  <td>Penetration @25 &#8451;</td>
                                  <td>ASTM D 217</td>
                                  <td>400-430</td>
                                  <td>355-385</td>
                                  <td>310-340</td>
                                  </tr>
                                  <tr>
                                  <td>Dropping Point &#8451;</td>
                                  <td>ASTM D 2265</td>
                                  <td>175</td>
                                  <td>175</td>
                                  <td>175</td>
                                  </tr>
                                  <tr>
                                  <td>Timken OK load lbs</td>
                                  <td>ASTM D 2509</td>
                                  <td>30</td>
                                  <td>30</td>
                                  <td>30</td>
                                  </tr>
                                  <tr>
                                  <td>Four Ball Load, kgs</td>
                                  <td>ASTM D 445</td>
                                  <td>200</td>
                                  <td>200</td>
                                  <td>200</td>
                                  </tr>
                                  </tbody>
                                  </table>
                                  <br><br>
                                  <h4>Lithium EP 2,3 Red</h4>
                                  <div class="download_right" align="right">
                                                                                              <a class="boxed-btn3-line" href="https://drive.google.com/file/d/1dHDP4tcbN2pAYDihe1N-8B3DuUT01TVb/view?usp=sharing" target="_blank">Download File</a>
                                                                                      </div>
                                  <h6>Typical Properties</h6>
                                  <table>
                                      <tbody>
                                      <tr>
                                      <td>Colour</td>
                                      <td>Visual</td>
                                      <td>Red</td>
                                      <td>Red</td>
                                      </tr>
                                      <tr>
                                      <td>Texture</td>
                                      <td>Visual</td>
                                      <td>Smooth</td>
                                      <td>Smooth</td>
                                      </tr>
                                      <tr>
                                      <td>NLGI Grade</td>
                                      <td></td>
                                      <td>2</td>
                                      <td>3</td>
                                      </tr>
                                      <tr>
                                      <td>Thickener</td>
                                      <td>ASTM D 128</td>
                                      <td>Lithium</td>
                                      <td>Lithium</td>
                                      </tr>
                                      <tr>
                                      <td>Penetration Stroke @25 &#8451;</td>
                                      <td>ASTM D 217</td>
                                      <td>265-295</td>
                                      <td>220-250</td>
                                      </tr>
                                      <tr>
                                      <td>Dropping Point &#8451;</td>
                                      <td>ASTM D 566</td>
                                      <td>180</td>
                                      <td>180</td>
                                      </tr>
                                      <tr>
                                      <td>Timken OK load lbs</td>
                                      <td>ASTM D 2509</td>
                                      <td>30-35</td>
                                      <td>30-35</td>
                                      </tr>
                                      <tr>
                                      <td>Four Ball Load, kgs</td>
                                      <td>ASTM D 2596</td>
                                      <td>200</td>
                                      <td>200</td>
                                      </tr>
                                      </tbody>
                                      </table>
                                      <br><br>
                                      <h4>Lithium EP 2,3 Transparant</h4>
                                      <div class="download_right" align="right">
                                                                                                  <a class="boxed-btn3-line" href="https://drive.google.com/file/d/1lknnfP27wO4M-kBOWEE2YOGFmZLz4SbU/view?usp=sharing" target="_blank">Download File</a>
                                                                                          </div>
                                      <h6>Typical Properties</h6>
                                      <table>
                                          <tbody>
                                          <tr>
                                          <td>Colour</td>
                                          <td>Visual</td>
                                          <td>Transparant</td>
                                          <td>Transparant</td>
                                          </tr>
                                          <tr>
                                          <td>Texture</td>
                                          <td>Visual</td>
                                          <td>Smooth</td>
                                          <td>Smooth</td>
                                          </tr>
                                          <tr>
                                          <td>NLGI Grade</td>
                                          <td></td>
                                          <td>2</td>
                                          <td>3</td>
                                          </tr>
                                          <tr>
                                          <td>Thickener</td>
                                          <td>ASTM D 128</td>
                                          <td>Lithium</td>
                                          <td>Lithium</td>
                                          </tr>
                                          <tr>
                                          <td>Penetration Stroke @25 &#8451;</td>
                                          <td>ASTM D 217</td>
                                          <td>265-295</td>
                                          <td>220-250</td>
                                          </tr>
                                          <tr>
                                          <td>Dropping Point &#8451;</td>
                                          <td>ASTM D 566</td>
                                          <td>200</td>
                                          <td>200</td>
                                          </tr>
                                          <tr>
                                          <td>Timken OK load lbs</td>
                                          <td>ASTM D 2509</td>
                                          <td>35</td>
                                          <td>35</td>
                                          </tr>
                                          <tr>
                                          <td>Four Ball Load, kgs</td>
                                          <td>ASTM D 2596</td>
                                          <td>200</td>
                                          <td>200</td>
                                          </tr>
                                          </tbody>
                                          </table>
                                          <br><br>
                                          <h4>Lithium Complex EP 2,3 Blue</h4>
                                          <div class="download_right" align="right">
                                                                                                      <a class="boxed-btn3-line" href="https://drive.google.com/file/d/1oK0igGfpsjW2TpkJ2NMrbYN29dj5anI1/view?usp=sharing" target="_blank">Download File</a>
                                                                                              </div>
                                          <h6>Typical Properties</h6>
                                          <table>
                                              <tbody>
                                              <tr>
                                              <td>Thickener</td>
                                              <td>ASTM D 128</td>
                                              <td>Lithium Complex 2</td>
                                              <td>Lithium Complex 3</td>
                                              </tr>
                                              <tr>
                                              <td>Texture</td>
                                              <td>Visual</td>
                                              <td>Smooth</td>
                                              <td>Smooth</td>
                                              </tr>
                                              <tr>
                                              <td>NLGI</td>
                                              <td>NLGI</td>
                                              <td>2</td>
                                              <td>3</td>
                                              </tr>
                                              <tr>
                                              <td>Colour</td>
                                              <td>Visual</td>
                                              <td>Blue</td>
                                              <td>Blue</td>
                                              </tr>
                                              <tr>
                                              <td>Penetration Stroke @25 &#8451;</td>
                                              <td>ASTM D 217</td>
                                              <td>265-295</td>
                                              <td>220-250</td>
                                              </tr>
                                              <tr>
                                              <td>Dropping Point &#8451;</td>
                                              <td>ASTM D 2265</td>
                                              <td>295</td>
                                              <td>295</td>
                                              </tr>
                                              <tr>
                                              <td>Copper Corrosion</td>
                                              <td>ASTM D 4048</td>
                                              <td>1b</td>
                                              <td>1b</td>
                                              </tr>
                                              <tr>
                                              <td>Timken OK Value, lb</td>
                                              <td>ASTM D 2509</td>
                                              <td>30/35</td>
                                              <td>30/35</td>
                                              </tr>
                                              <tr>
                                              <td>Four Ball Load, kgs</td>
                                              <td>ASTM D 2296</td>
                                              <td>200</td>
                                              <td>200</td>
                                              </tr>
                                              </tbody>
                                              </table>
                                              <br><br>
                                              <h4>Lithium Complex HT 2,3 Red</h4>
                                              <div class="download_right" align="right">
                                                                                                          <a class="boxed-btn3-line" href="https://drive.google.com/file/d/1_vGyTsjB_1KwbnPf_VJM0Dv_6NeLNFj0/view?usp=sharing" target="_blank">Download File</a>
                                                                                                  </div>
                                              <h6>Typical Properties</h6>
                                              <table>
                                                  <tbody>
                                                  <tr>
                                                  <td>Colour</td>
                                                  <td>Visual</td>
                                                  <td>Red</td>
                                                  <td>Red</td>
                                                  </tr>
                                                  <tr>
                                                  <td>Texture</td>
                                                  <td>Visual</td>
                                                  <td>Smooth</td>
                                                  <td>Smooth</td>
                                                  </tr>
                                                  <tr>
                                                  <td>NLGI</td>
                                                  <td>ASTM D 217</td>
                                                  <td>2</td>
                                                  <td>3</td>
                                                  </tr>
                                                  <tr>
                                                  <td>Thickener</td>
                                                  <td>ASTM D 128</td>
                                                  <td>Lithium Complex</td>
                                                  <td>Lithium Complex</td>
                                                  </tr>
                                                  <tr>
                                                  <td>Penetration Stroke @25 &#8451;</td>
                                                  <td>ASTM D 217</td>
                                                  <td>265-295</td>
                                                  <td>220-250</td>
                                                  </tr>
                                                  <tr>
                                                  <td>Dropping Point &#8451;</td>
                                                  <td>ASTM D 2265</td>
                                                  <td>295</td>
                                                  <td>295</td>
                                                  </tr>
                                                  <tr>
                                                  <td>Timken OK load lbs</td>
                                                  <td>ASTM D 2509</td>
                                                  <td>40-60</td>
                                                  <td>40-60</td>
                                                  </tr>
                                                  <tr>
                                                  <td>Four Ball Load, kgs</td>
                                                  <td>ASTM D 445</td>
                                                  <td>315</td>
                                                  <td>315</td>
                                                  </tr>
                                                  </tbody>
                                                  </table>
                                                  <br><br>
                                                  <h4>Lithium Complex 2,3 Moly</h4>
                                                  <div class="download_right" align="right">
                                                                                                              <a class="boxed-btn3-line" href="https://drive.google.com/file/d/1n98MiciyTvZFNlh8WyTAHC42CWyShxh-/view?usp=sharing" target="_blank">Download File</a>
                                                                                                      </div>
                                                  <h6>Typical Properties</h6>
                                                  <table>
                                                      <tbody>
                                                      <tr>
                                                      <td>Thickener</td>
                                                      <td>ASTM D 128</td>
                                                      <td>Lithium Complex Moly</td>
                                                      <td>Lithium Complex Moly</td>
                                                      </tr>
                                                      <tr>
                                                      <td>Texture</td>
                                                      <td>Visual</td>
                                                      <td>Smooth</td>
                                                      <td>Smooth</td>
                                                      </tr>
                                                      <tr>
                                                      <td>NLGI Grade</td>
                                                      <td></td>
                                                      <td>2</td>
                                                      <td>3</td>
                                                      </tr>
                                                      <tr>
                                                      <td>Molybdenum Disulfide</td>
                                                      <td></td>
                                                      <td>3% minimum</td>
                                                      <td>3% minimum</td>
                                                      </tr>
                                                      <tr>
                                                      <td>Colour</td>
                                                      <td>Visual</td>
                                                      <td>Grayish-Black</td>
                                                      <td>Grayish-Black</td>
                                                      </tr>
                                                      <tr>
                                                      <td>Penetration Stroke @25 &#8451;</td>
                                                      <td>ASTM D 217</td>
                                                      <td>265-295</td>
                                                      <td>220-250</td>
                                                      </tr>
                                                      <tr>
                                                      <td>Dropping Point &#8451;</td>
                                                      <td>ASTM D 2265</td>
                                                      <td>>260</td>
                                                      <td>>260</td>
                                                      </tr>
                                                      <tr>
                                                      <td>Four Ball Wear, Scar mm</td>
                                                      <td>ASTM D 2266</td>
                                                      <td>0.56</td>
                                                      <td>0.56</td>
                                                      </tr>
                                                      <tr>
                                                      <td>Four Ball EP, Weld Point</td>
                                                      <td>ASTM D 2596</td>
                                                      <td>250-620</td>
                                                      <td>250-260</td>
                                                      </tr>
                                                      <tr>
                                                      <td>Oil Separation, % by mass</td>
                                                      <td>ASTM D 1742</td>
                                                      <td>2.5 max</td>
                                                      <td>2.5 max</td>
                                                      </tr>
                                                      </tbody>
                                                      </table>
          </div>
            ',
            'produk_slug' => 'Nebula-Oil',
        ]);

        IsiProduk::create([
            'judul' => 'Special Grease',
            'isi' => '
            <div class="card-body">
            <h4>Bentonite 2,3</h4>
<div class="download_right" align="right">
                                          <a class="boxed-btn3-line" href="https://drive.google.com/file/d/1GcodsFnZ6V9_wfSokrTODe-22_U8sijs/view?usp=sharing" target="_blank">Download File</a>
                                      </div>
            <h6>Typical Properties</h6>
                          <table>
                          <tbody>
                          <tr>
                          <td>Properties</td>
                          <td>ASTM</td>
                          <td>Bentonite 2</td>
                          <td>Bentonite 3</td>
                          </tr>
                          <tr>
                          <td>NLGI Grade</td>
                          <td></td>
                          <td>2</td>
                          <td>3</td>
                          </tr>
                          <tr>
                          <td>Thickener</td>
                          <td>D 128</td>
                          <td>Non Soap</td>
                          <td>Non Soap</td>
                          </tr>
                          <tr>
                          <td>Colour</td>
                          <td>Visual</td>
                          <td>Amber</td>
                          <td>Amber</td>
                          </tr>
                          <tr>
                          <td>Dropping Point &#8451;</td>
                          <td>D 2265</td>
                          <td>None Melt</td>
                          <td>None Melt</td>
                          </tr>
                          <tr>
                          <td>Penetration Stroke @25 &#8451;</td>
                          <td>D 217</td>
                          <td>265-295</td>
                          <td>220-250</td>
                          </tr>
                          <tr>
                          <td>Water Wash Out @80 &#8451;</td>
                          <td>D 1264</td>
                          <td>1.1</td>
                          <td>1.1</td>
                          </tr>
                          <tr>
                          <td>Four Ball Wear Scar mm</td>
                          <td>D 2266</td>
                          <td>0.434</td>
                          <td>0.465</td>
                          </tr>
                          <tr>
                          <td>Four Ball EP, Weld Point</td>
                          <td>D 2596</td>
                          <td>250</td>
                          <td>250</td>
                          </tr>
                          </tbody>
                          </table>
                          <br><br>
                          <h4>Polymax 2,3</h4>
                          <div class="download_right" align="right">
                                                                                      <a class="boxed-btn3-line" href="https://drive.google.com/file/d/1ajanLTLJVSGNCvHVsXrz4wMLaYXmVzbX/view?usp=sharing" target="_blank">Download File</a>
                                                                              </div>
                          <h6>Typical Properties</h6>
                          <table>
                          <tbody>
                          <tr>
                          <td>Thickener</td>
                          <td>ASTM D 128</td>
                          <td>Polyurea</td>
                          <td>Polyurea</td>
                          </tr>
                          <tr>
                          <td>Texture</td>
                          <td>Visual</td>
                          <td>Smooth</td>
                          <td>Smooth</td>
                          </tr>
                          <tr>
                          <td>NLGI Grade</td>
                          <td></td>
                          <td>2</td>
                          <td>3</td>
                          </tr>
                          <tr>
                          <td>Water Wash Out, % loss max</td>
                          <td>ASTM D 1264</td>
                          <td>1.0</td>
                          <td>1.0</td>
                          </tr>
                          <tr>
                          <td>Colour</td>
                          <td>Visual</td>
                          <td>Green</td>
                          <td>Green</td>
                          </tr>
                          <tr>
                          <td>Base Oil Viscosity @40 &#8451;</td>
                          <td>D 445</td>
                          <td>220</td>
                          <td>220</td>
                          </tr>
                          <tr>
                          <td>Copper Corrosion 100 &#8451; (24 hours)</td>
                          <td>D 4048</td>
                          <td>1b</td>
                          <td>1b</td>
                          </tr>
                          <tr>
                          <td>Penetration @25 &#8451;</td>
                          <td>ASTM D 217</td>
                          <td>265-295</td>
                          <td>220-250</td>
                          </tr>
                          <tr>
                          <td>Dropping Point &#8451;</td>
                          <td>ASTM D 2265</td>
                          <td>270</td>
                          <td>270</td>
                          </tr>
                          <tr>
                          <td>Timken OK Loading</td>
                          <td>ASTM D 2509</td>
                          <td>?90 lb</td>
                          <td>?90 lb</td>
                          </tr>
                          <tr>
                          <td>Four Ball Wear Scar mm</td>
                          <td>ASTM D 2266</td>
                          <td>0.5</td>
                          <td>0.5</td>
                          </tr>
                          <tr>
                          <td>Four Ball EP, Weld Point</td>
                          <td>ASTM D 2596</td>
                          <td>?400</td>
                          <td>?400</td>
                          </tr>
                          </tbody>
                          </table>
          </div>
            ',
            'produk_slug' => 'Nebula-Oil',
        ]); 

        IsiProduk::create([
            'judul' => 'Compound Grease',
            'isi' => '
            <h4>Compound Series</h4>
            <div class="download_right" align="right">
                                                        <a class="boxed-btn3-line" href="https://drive.google.com/file/d/1XHt5T8RkkCJ77YoM8w5ONySIYcuP4A72/view?usp=sharing" target="_blank">Download File</a>
                                                    </div>
                        <h6>Typical Properties</h6>
                        <div class="card-body">
                          <p>
                            <table>
                            <tbody>
                            <tr>
                            <td>Series</td>
                            <td></td>
                            <td>S1</td>
                            <td>S2</td>
                            </tr>
                            <tr>
                            <td>Colour</td>
                            <td></td>
                            <td>Black</td>
                            <td>Black</td>
                            </tr>
                            <tr>
                            <td>Flash Point &#8451;</td>
                            <td>ASTM D 92</td>
                            <td>110</td>
                            <td>130</td>
                            </tr>
                            <tr>
                            <td>Viscosity cSt @40 &#8451;</td>
                            <td>D 445</td>
                            <td>1500</td>
                            <td>5000</td>
                            </tr>
                            <tr>
                            <td>Specific Gravity &#8451; Kg/l</td>
                            <td>D 1298</td>
                            <td>0.95</td>
                            <td>0.96</td>
                            </tr>
                            <tr>
                            <td>Texture</td>
                            <td></td>
                            <td>Solid, Tacky</td>
                            <td>Solid, Tacky</td>
                            </tr>
                            </tbody>
                            </table>
                          </p>
            ',
            'produk_slug' => 'Nebula-Oil',
        ]); 

        // Nebula Products End
        
        // Pertamina Products Start

        IsiProduk::create([
            'judul' => 'Industrial Heavy Duty Diesel Oil',
            'isi' => '
            <div class="card-body">
            <h6>Typical Properties</h6>
                          <table>
                          <tbody>
                          <tr>
                          <th>No</th>
                          <th>Jenis Pelumas</th>
                          <th>Kemasan</th>
                          <th>Satuan(ltr/kg)</th>
                          </tr>
                          <tr>
                          <td>1</td>
                          <td>MEDITRAN 30</td>
                          <td>Drum</td>
                          <td>209</td>
                          </tr>
                          <tr>
                          <td>2</td>
                          <td>MEDITRAN 40</td>
                          <td>Drum</td>
                          <td>209</td>
                          </tr>
                          <tr>
                          <td>3</td>
                          <td>MEDITRAN 50</td>
                          <td>Drum</td>
                          <td>209</td>
                          </tr>
                          <tr>
                          <td>4</td>
                          <td>MEDITRAN E 40</td>
                          <td>Drum</td>
                          <td>200</td>
                          </tr>
                          <tr>
                          <td>5</td>
                          <td>MEDITRAN S10W</td>
                          <td>Drum</td>
                          <td>209</td>
                          </tr>
                          <tr>
                          <td>6</td>
                          <td>MEDITRAN S30</td>
                          <td>Drum</td>
                          <td>209</td>
                          </tr>
                          <tr>
                          <td>7</td>
                          <td>MEDITRAN S40</td>
                          <td>Drum</td>
                          <td>209</td>
                          </tr>
                          <tr>
                          <td>8</td>
                          <td>MEDITRAN S50</td>
                          <td>Drum</td>
                          <td>209</td>
                          </tr>
                          <tr>
                          <td>9</td>
                          <td>MEDITRAN SC 15W-40</td>
                          <td>Drum</td>
                          <td>209</td>
                          </tr>
                          <tr>
                          <td>10</td>
                          <td>MEDITRAN SC 15W-40 CH4</td>
                          <td>Drum</td>
                          <td>209</td>
                          </tr>
                          <tr>
                          <td>11</td>
                          <td>MEDITRAN SC 20W-40 CH4</td>
                          <td>Drum</td>
                          <td>209</td>
                          </tr>
                          <tr>
                          <td>12</td>
                          <td>MEDITRAN SX PLUS 15W-40 CI4</td>
                          <td>Drum</td>
                          <td>200</td>
                          </tr>
                          <tr>
                          <td>13</td>
                          <td>MEDITRAN SX CI4 PLUS ELDI</td>
                          <td>Drum</td>
                          <td>200</td>
                          </tr>
                          <tr>
                          <td>14</td>
                          <td>MEDITRAN SX ULTRA 15W-40 CI4 PLUS CI4</td>
                          <td>Drum</td>
                          <td>200</td>
                          </tr>
                          <tr>
                          <td>15</td>
                          <td>MEDITRAN SX PLUS 20W-50 CH4</td>
                          <td>Pail</td>
                          <td>18</td>
                          </tr>
                          </tbody>
                          </table>
          </div>
            ',
            'produk_slug' => 'Pertamina-Oil',
        ]); 

        IsiProduk::create([
            'judul' => 'Industrial Hydraulic Oil',
            'isi' => '
            <div class="card-body">
            <h6>Typical Properties</h6>
            <table>
            <tbody>
            <tr>
            <th>No</th>
            <th>Jenis Pelumas</th>
            <th>Kemasan</th>
            <th>Satuan(ltr/kg)</th>
            </tr>
            <tr>
            <td>1</td>
            <td>TURALIK 41</td>
            <td>Drum</td>
            <td>209</td>
            </tr>
            <tr>
            <td>2</td>
            <td>TURALIK 43</td>
            <td>Drum</td>
            <td>209</td>
            </tr>
            <tr>
            <td>3</td>
            <td>TURALIK 45</td>
            <td>Drum</td>
            <td>209</td>
            </tr>
            <tr>
            <td>4</td>
            <td>TURALIK 48</td>
            <td>Drum</td>
            <td>209</td>
            </tr>
            <tr>
            <td>5</td>
            <td>TURALIK 52</td>
            <td>Drum</td>
            <td>209</td>
            </tr>
            <tr>
            <td>6</td>
            <td>TURALIK 69</td>
            <td>Drum</td>
            <td>209</td>
            </tr>
            <tr>
            <td>7</td>
            <td>TURALIK XT 46</td>
            <td>Drum</td>
            <td>209</td>
            </tr>
            <tr>
            <td>8</td>
            <td>TURALIK XT 68</td>
            <td>Drum</td>
            <td>209</td>
            </tr>
            <tr>
            <td>9</td>
            <td>TURALIK XT 100</td>
            <td>Drum</td>
            <td>209</td>
            </tr>
            <tr>
            <td>10</td>
            <td>TURALIK C 5</td>
            <td>Drum</td>
            <td>209</td>
            </tr>
            <tr>
            <td>11</td>
            <td>TURALIK C 10</td>
            <td>Drum</td>
            <td>209</td>
            </tr>
            <tr>
            <td>12</td>
            <td>TURALIK C 22</td>
            <td>Drum</td>
            <td>209</td>
            </tr>
            <tr>
            <td>13</td>
            <td>TURALIK C 32</td>
            <td>Drum</td>
            <td>209</td>
            </tr>
            <tr>
            <td>14</td>
            <td>TURALIK C 68</td>
            <td>Drum</td>
            <td>209</td>
            </tr>
            <tr>
            <td>15</td>
            <td>TURALIK C 100</td>
            <td>Drum</td>
            <td>209</td>
            </tr>
            <tr>
            <td>16</td>
            <td>TURALIK C 150</td>
            <td>Drum</td>
            <td>209</td>
            </tr>
            <tr>
            <td>17</td>
            <td>TURALIK C 220</td>
            <td>Drum</td>
            <td>209</td>
            </tr>
            <tr>
            <td>18</td>
            <td>TURALIK C 320</td>
            <td>Drum</td>
            <td>209</td>
            </tr>
            <tr>
            <td>19</td>
            <td>TURALIK T 15</td>
            <td>Drum</td>
            <td>209</td>
            </tr>
            <tr>
            <td>20</td>
            <td>TURALIK T 22</td>
            <td>Drum</td>
            <td>209</td>
            </tr>
            <tr>
            <td>21</td>
            <td>TURALIK T 32</td>
            <td>Drum</td>
            <td>209</td>
            </tr>
            <tr>
            <td>22</td>
            <td>TURALIK T 46</td>
            <td>Drum</td>
            <td>209</td>
            </tr>
            <tr>
            <td>23</td>
            <td>TURALIK T 68</td>
            <td>Drum</td>
            <td>209</td>
            </tr>
            <tr>
            <td>24</td>
            <td>TURALIK T 100</td>
            <td>Drum</td>
            <td>209</td>
            </tr>
            </tbody>
            </table>
        </div>
            ',
            'produk_slug' => 'Pertamina-Oil',
        ]); 

        IsiProduk::create([
            'judul' => 'Industrial Marine Engine Oil',
            'isi' => '
            <div class="card-body">
            <h6>Typical Properties</h6>
            <table>
            <tbody>
            <tr>
            <th>No</th>
            <th>Jenis Pelumas</th>
            <th>Kemasan</th>
            <th>Satuan(ltr/kg)</th>
            </tr>
            <tr>
            <td>1</td>
            <td>DILOKA 448 X</td>
            <td>Drum</td>
            <td>209</td>
            </tr>
            <tr>
            <td>2</td>
            <td>MEDRIPAL 307</td>
            <td>Drum</td>
            <td>209</td>
            </tr>
            <tr>
            <td>3</td>
            <td>MEDRIPAL 311</td>
            <td>Drum</td>
            <td>209</td>
            </tr>
            <tr>
            <td>4</td>
            <td>MEDRIPAL 312</td>
            <td>Drum</td>
            <td>209</td>
            </tr>
            <tr>
            <td>5</td>
            <td>MEDRIPAL 320</td>
            <td>Drum</td>
            <td>209</td>
            </tr>
            <tr>
            <td>6</td>
            <td>MEDRIPAL 330</td>
            <td>Drum</td>
            <td>209</td>
            </tr>
            <tr>
            <td>7</td>
            <td>MEDRIPAL 340</td>
            <td>Drum</td>
            <td>209</td>
            </tr>
            <tr>
            <td>8</td>
            <td>MEDRIPAL 408</td>
            <td>Drum</td>
            <td>209</td>
            </tr>
            <tr>
            <td>9</td>
            <td>MEDRIPAL 411</td>
            <td>Drum</td>
            <td>209</td>
            </tr>
            <tr>
            <td>10</td>
            <td>MEDRIPAL 412</td>
            <td>Drum</td>
            <td>209</td>
            </tr>
            <tr>
            <td>11</td>
            <td>MEDRIPAL 420</td>
            <td>Drum</td>
            <td>209</td>
            </tr>
            <tr>
            <td>12</td>
            <td>MEDRIPAL 430</td>
            <td>Drum</td>
            <td>209</td>
            </tr>
            <tr>
            <td>13</td>
            <td>MEDRIPAL 440</td>
            <td>Drum</td>
            <td>209</td>
            </tr>
            <tr>
            <td>14</td>
            <td>MEDRIPAL 450</td>
            <td>Drum</td>
            <td>209</td>
            </tr>
            <tr>
            <td>15</td>
            <td>MEDRIPAL 512</td>
            <td>Drum</td>
            <td>209</td>
            </tr>
            <tr>
            <td>16</td>
            <td>MEDRIPAL 540</td>
            <td>Drum</td>
            <td>209</td>
            </tr>
            <tr>
            <td>17</td>
            <td>MEDRIPAL 570</td>
            <td>Drum</td>
            <td>209</td>
            </tr>
            <tr>
            <td>18</td>
            <td>SALYX 308</td>
            <td>Drum</td>
            <td>209</td>
            </tr>
            <tr>
            <td>19</td>
            <td>SALYX 312</td>
            <td>Drum</td>
            <td>209</td>
            </tr>
            <tr>
            <td>20</td>
            <td>SALYX 315</td>
            <td>Drum</td>
            <td>209</td>
            </tr>
            <tr>
            <td>21</td>
            <td>SALYX 320</td>
            <td>Drum</td>
            <td>209</td>
            </tr>
            <tr>
            <td>22</td>
            <td>SALYX 330</td>
            <td>Drum</td>
            <td>209</td>
            </tr>
            <tr>
            <td>23</td>
            <td>SALYX 340</td>
            <td>Drum</td>
            <td>209</td>
            </tr>
            <tr>
            <td>24</td>
            <td>SALYX 408</td>
            <td>Drum</td>
            <td>209</td>
            </tr>
            <tr>
            <td>25</td>
            <td>SALYX 412</td>
            <td>Drum</td>
            <td>209</td>
            </tr>
            <tr>
            <td>26</td>
            <td>SALYX 415</td>
            <td>Drum</td>
            <td>209</td>
            </tr>
            <tr>
            <td>27</td>
            <td>SALYX 420</td>
            <td>Drum</td>
            <td>209</td>
            </tr>
            <tr>
            <td>28</td>
            <td>SALYX 430</td>
            <td>Drum</td>
            <td>209</td>
            </tr>
            <tr>
            <td>29</td>
            <td>SALYX 440</td>
            <td>Drum</td>
            <td>209</td>
            </tr>
            <tr>
            <td>30</td>
            <td>SALYX 450</td>
            <td>Drum</td>
            <td>209</td>
            </tr>
            <tr>
            <td>31</td>
            <td>SALYX 530</td>
            <td>Drum</td>
            <td>209</td>
            </tr>
            <tr>
            <td>32</td>
            <td>SALYX 540</td>
            <td>Drum</td>
            <td>209</td>
            </tr>
            <tr>
            <td>33</td>
            <td>SALYX 550</td>
            <td>Drum</td>
            <td>209</td>
            </tr>
            <tr>
            <td>34</td>
            <td>SALYX 570</td>
            <td>Drum</td>
            <td>209</td>
            </tr>
            <tr>
            <td>35</td>
            <td>SALYX C 430</td>
            <td>Drum</td>
            <td>209</td>
            </tr>
            <tr>
            <td>36</td>
            <td>SALYX 435</td>
            <td>Drum</td>
            <td>209</td>
            </tr>
            <tr>
            <td>37</td>
            <td>SALYX DF 312</td>
            <td>Drum</td>
            <td>209</td>
            </tr>
            <tr>
            <td>38</td>
            <td>SALYX DF 408</td>
            <td>Drum</td>
            <td>209</td>
            </tr>
            <tr>
            <td>39</td>
            <td>SALYX DF 412</td>
            <td>Drum</td>
            <td>209</td>
            </tr>
            <tr>
            <td>40</td>
            <td>SALYX DF 415</td>
            <td>Drum</td>
            <td>209</td>
            </tr>
            <tr>
            <td>41</td>
            <td>SALYX DF 420</td>
            <td>Drum</td>
            <td>209</td>
            </tr>
            <tr>
            <td>42</td>
            <td>SALYX DF 430</td>
            <td>Drum</td>
            <td>209</td>
            </tr>
            <tr>
            <td>43</td>
            <td>MEDITRAN SMX-40</td>
            <td>Drum</td>
            <td>209</td>
            </tr>
            <tr>
            <td>44</td>
            <td>MEDITRAN SMX 15W-40</td>
            <td>Drum</td>
            <td>209</td>
            </tr>
            <tr>
            <td>45</td>
            <td>MEDITRAN P10W0</td>
            <td>Drum</td>
            <td>209</td>
            </tr>
            <tr>
            <td>46</td>
            <td>MEDITRAN P30</td>
            <td>Drum</td>
            <td>209</td>
            </tr>
            <tr>
            <td>47</td>
            <td>MEDITRAN P40</td>
            <td>Drum</td>
            <td>209</td>
            </tr>
            <tr>
            <td>48</td>
            <td>MEDITRAN P50/td&gt;</td>
            <td>Drum</td>
            <td>209</td>
            </tr>
            </tbody>
            </table>
        </div>
            ',
            'produk_slug' => 'Pertamina-Oil',
        ]);
        
        IsiProduk::create([
            'judul' => 'Industrial Gear Bearing Oils',
            'isi' => '
            <div class="card-body">
            <h6>Typical Properties</h6>
            <table>
            <tbody>
            <tr>
            <th>No</th>
            <th>Jenis Pelumas</th>
            <th>Kemasan</th>
            <th>Satuan(ltr/kg)</th>
            </tr>
            <tr>
            <td>1</td>
            <td>MASRI FLG 68</td>
            <td>Drum</td>
            <td>200</td>
            </tr>
            <tr>
            <td>2</td>
            <td>MASRI FLG 100</td>
            <td>Drum</td>
            <td>200</td>
            </tr>
            <tr>
            <td>3</td>
            <td>MASRI FLG 150</td>
            <td>Drum</td>
            <td>200</td>
            </tr>
            <tr>
            <td>4</td>
            <td>MASRI FLG 220</td>
            <td>Drum</td>
            <td>200</td>
            </tr>
            <tr>
            <td>5</td>
            <td>MASRI FLG 320</td>
            <td>Drum</td>
            <td>200</td>
            </tr>
            <tr>
            <td>6</td>
            <td>MASRI FLG 460</td>
            <td>Drum</td>
            <td>200</td>
            </tr>
            <tr>
            <td>7</td>
            <td>MASRI FLG 680</td>
            <td>Drum</td>
            <td>200</td>
            </tr>
            <tr>
            <td>8</td>
            <td>MASRI RG 68</td>
            <td>Drum</td>
            <td>209</td>
            </tr>
            <tr>
            <td>9</td>
            <td>MASRI RG 100</td>
            <td>Drum</td>
            <td>209</td>
            </tr>
            <tr>
            <td>10</td>
            <td>MASRI RG 150</td>
            <td>Drum</td>
            <td>209</td>
            </tr>
            <tr>
            <td>11</td>
            <td>MASRI RG 220</td>
            <td>Drum</td>
            <td>209</td>
            </tr>
            <tr>
            <td>12</td>
            <td>MASRI RG 320</td>
            <td>Drum</td>
            <td>209</td>
            </tr>
            <tr>
            <td>13</td>
            <td>MASRI RG 460</td>
            <td>Drum</td>
            <td>209</td>
            </tr>
            <tr>
            <td>14</td>
            <td>MASRI RG 680</td>
            <td>Drum</td>
            <td>209</td>
            </tr>
            <tr>
            <td>15</td>
            <td>MASRI RG 1000</td>
            <td>Drum</td>
            <td>209</td>
            </tr>
            <tr>
            <td>16</td>
            <td>MASRI SMG 2</td>
            <td>Drum</td>
            <td>209</td>
            </tr>
            <tr>
            <td>17</td>
            <td>MASRI SMG 3</td>
            <td>Drum</td>
            <td>209</td>
            </tr>
            <tr>
            <td>18</td>
            <td>MASRI SMG 5</td>
            <td>Drum</td>
            <td>209</td>
            </tr>
            <tr>
            <td>19</td>
            <td>MASRI SMG 6</td>
            <td>Drum</td>
            <td>209</td>
            </tr>
            <tr>
            <td>20</td>
            <td>MASRI SMG 9</td>
            <td>Drum</td>
            <td>209</td>
            </tr>
            <tr>
            <td>21</td>
            <td>MASRI SYN HD 320</td>
            <td>Drum</td>
            <td>209</td>
            </tr>
            <tr>
            <td>22</td>
            <td>MASRI SYN HD 680</td>
            <td>Drum</td>
            <td>200</td>
            </tr>
            <tr>
            <td>23</td>
            <td>STEELO B 100</td>
            <td>Drum</td>
            <td>200</td>
            </tr>
            <tr>
            <td>24</td>
            <td>STEELO B 220</td>
            <td>Drum</td>
            <td>200</td>
            </tr>
            <tr>
            <td>25</td>
            <td>STEELO B 320</td>
            <td>Drum</td>
            <td>200</td>
            </tr>
            <tr>
            <td>26</td>
            <td>STEELO B 460</td>
            <td>Drum</td>
            <td>200</td>
            </tr>
            <tr>
            <td>27</td>
            <td>STEELO B 680</td>
            <td>Drum</td>
            <td>200</td>
            </tr>
            </tbody>
            </table>
        </div>
            ',
            'produk_slug' => 'Pertamina-Oil',
        ]); 

        IsiProduk::create([
            'judul' => 'Industrial Turbin Oils',
            'isi' => '
            <div class="card-body">
            <h6>Typical Properties</h6>
            <table>
            <tbody>
            <tr>
            <th>No</th>
            <th>Jenis Pelumas</th>
            <th>Kemasan</th>
            <th>Satuan(ltr/kg)</th>
            </tr>
            <tr>
            <td>1</td>
            <td>TURBOLUBE 32</td>
            <td>Drum</td>
            <td>200</td>
            </tr>
            <tr>
            <td>2</td>
            <td>TURBOLUBE 46</td>
            <td>Drum</td>
            <td>200</td>
            </tr>
            <tr>
            <td>3</td>
            <td>TURBOLUBE 68</td>
            <td>Drum</td>
            <td>200</td>
            </tr>
            <tr>
            <td>4</td>
            <td>TURBOLUBE 100</td>
            <td>Drum</td>
            <td>200</td>
            </tr>
            <tr>
            <td>5</td>
            <td>TURBOLUBE 150</td>
            <td>Drum</td>
            <td>200</td>
            </tr>
            <tr>
            <td>6</td>
            <td>TURBOLUBE 220</td>
            <td>Drum</td>
            <td>200</td>
            </tr>
            <tr>
            <td>7</td>
            <td>TURBOLUBE XT 32</td>
            <td>Drum</td>
            <td>200</td>
            </tr>
            <tr>
            <td>8</td>
            <td>TURBOLUBE XT 46</td>
            <td>Drum</td>
            <td>200</td>
            </tr>
            <tr>
            <td>9</td>
            <td>TURBOLUBE XT 68</td>
            <td>Drum</td>
            <td>200</td>
            </tr>
            <tr>
            <td>10</td>
            <td>TURBOLUBE 68</td>
            <td>Pail</td>
            <td>18</td>
            </tr>
            <tr>
            <td>11</td>
            <td>TURBOLUBE 100</td>
            <td>Pail</td>
            <td>18</td>
            </tr>
            <tr>
            <td>12</td>
            <td>TURBOLUBE XT 32</td>
            <td>Pail</td>
            <td>18</td>
            </tr>
            <tr>
            <td>12</td>
            <td>TURBOLUBE XT 68</td>
            <td>Pail</td>
            <td>18</td>
            </tr>
            </tbody>
            </table>
        </div>
            ',
            'produk_slug' => 'Pertamina-Oil',
        ]); 

        IsiProduk::create([
            'judul' => 'Metal Working Fluids',
            'isi' => '
            <div class="card-body">
            <h6>Typical Properties</h6>
            <table>
            <tbody>
            <tr>
            <th>No</th>
            <th>Jenis Pelumas</th>
            <th>Kemasan</th>
            <th>Satuan(ltr/kg)</th>
            </tr>
            <tr>
            <td>1</td>
            <td>PERTAMINA SLIDEAWAY</td>
            <td>Drum</td>
            <td>200</td>
            </tr>
            <tr>
            <td>2</td>
            <td>PERTAMINA SLIDEAWAY</td>
            <td>Pail</td>
            <td>18</td>
            </tr>
            </tbody>
            </table>
        </div>
            ',
            'produk_slug' => 'Pertamina-Oil',
        ]);     

        IsiProduk::create([
            'judul' => 'Natural Gas Engine Oils',
            'isi' => '
            <div class="card-body">
            <h6>Typical Properties</h6>
            <table>
            <tbody>
            <tr>
            <th>No</th>
            <th>Jenis Pelumas</th>
            <th>Kemasan</th>
            <th>Satuan(ltr/kg)</th>
            </tr>
            <tr>
            <td>1</td>
            <td>MEDITRAN GEO 15W-40</td>
            <td>Drum</td>
            <td>209</td>
            </tr>
            <tr>
            <td>2</td>
            <td>NG-LUBE 30</td>
            <td>Drum</td>
            <td>200</td>
            </tr>
            <tr>
            <td>3</td>
            <td>NG-LUBE 40</td>
            <td>Drum</td>
            <td>200</td>
            </tr>
            <tr>
            <td>4</td>
            <td>NG-LUBE LONG LIFE SAE 40</td>
            <td>Drum</td>
            <td>200</td>
            </tr>
            <tr>
            <td>5</td>
            <td>NG-LUBE 30 ASHLESS</td>
            <td>Drum</td>
            <td>200</td>
            </tr>
            <tr>
            <td>6</td>
            <td>NG-LUBE 40 ASHLESS</td>
            <td>Drum</td>
            <td>200</td>
            </tr>
            </tbody>
            </table>
        </div>
            ',
            'produk_slug' => 'Pertamina-Oil',
        ]); 

        IsiProduk::create([
            'judul' => 'Powershift Transmission Oils Hydraulic Oils For Equipment',
            'isi' => '
            <div class="card-body">
            <h6>Typical Properties</h6>
            <table>
            <tbody>
            <tr>
            <th>No</th>
            <th>Jenis Pelumas</th>
            <th>Kemasan</th>
            <th>Satuan(ltr/kg)</th>
            </tr>
            <tr>
            <td>1</td>
            <td>TRANSLIK HD 10W</td>
            <td>Drum</td>
            <td>209</td>
            </tr>
            <tr>
            <td>2</td>
            <td>TRANSLIK HD 30</td>
            <td>Drum</td>
            <td>209</td>
            </tr>
            <tr>
            <td>3</td>
            <td>TRANSLIK HD 40</td>
            <td>Drum</td>
            <td>209</td>
            </tr>
            <tr>
            <td>4</td>
            <td>TRANSLIK HD 60</td>
            <td>Drum</td>
            <td>209</td>
            </tr>
            </tbody>
            </table>
        </div>
            ',
            'produk_slug' => 'Pertamina-Oil',
        ]); 

        IsiProduk::create([
            'judul' => 'Refrigenerating Oils',
            'isi' => '
            <div class="card-body">
            <h6>Typical Properties</h6>
            <table>
            <tbody>
            <tr>
            <th>No</th>
            <th>Jenis Pelumas</th>
            <th>Kemasan</th>
            <th>Satuan(ltr/kg)</th>
            </tr>
            <tr>
            <td>1</td>
            <td>KOMPEN 15</td>
            <td>Drum</td>
            <td>209</td>
            </tr>
            <tr>
            <td>2</td>
            <td>KOMPEN 32</td>
            <td>Drum</td>
            <td>209</td>
            </tr>
            <tr>
            <td>3</td>
            <td>KOMPEN 46</td>
            <td>Drum</td>
            <td>209</td>
            </tr>
            <tr>
            <td>4</td>
            <td>KOMPEN 68</td>
            <td>Drum</td>
            <td>209</td>
            </tr>
            <tr>
            <td>5</td>
            <td>KOMPEN 100</td>
            <td>Drum</td>
            <td>209</td>
            </tr>
            </tbody>
            </table>
        </div>
            ',
            'produk_slug' => 'Pertamina-Oil',
        ]); 

        IsiProduk::create([
            'judul' => 'Industrial Grease',
            'isi' => '
            <div class="card-body">
            <h6>Typical Properties</h6>
            <table>
            <tbody>
            <tr>
            <th>No</th>
            <th>Jenis Pelumas</th>
            <th>Kemasan</th>
            <th>Satuan(ltr/kg)</th>
            </tr>
            <tr>
            <td>1</td>
            <td>GREASE PTM EPX-NL 1</td>
            <td>Drum</td>
            <td>178</td>
            </tr>
            <tr>
            <td>2</td>
            <td>GREASE PTM EPX-NL 2</td>
            <td>Drum</td>
            <td>178</td>
            </tr>
            <tr>
            <td>3</td>
            <td>GREASE PTM X-NL 2</td>
            <td>Drum</td>
            <td>178</td>
            </tr>
            <tr>
            <td>4</td>
            <td>GREASE PTM X-NL 3</td>
            <td>Drum</td>
            <td>178</td>
            </tr>
            <tr>
            <td>5</td>
            <td>GREASE WR-NL</td>
            <td>Drum</td>
            <td>178</td>
            </tr>
            <tr>
            <td>6</td>
            <td>GREASE SUPER EPX-2</td>
            <td>Drum</td>
            <td>178</td>
            </tr>
            <tr>
            <td>7</td>
            <td>GREASE HDX-2</td>
            <td>Drum</td>
            <td>178</td>
            </tr>
            <tr>
            <td>8</td>
            <td>GREASE SUPER HDX-2</td>
            <td>Drum</td>
            <td>178</td>
            </tr>
            <tr>
            <td>9</td>
            <td>GREASE LI CX-2</td>
            <td>Drum</td>
            <td>178</td>
            </tr>
            </tbody>
            </table>
        </div>
            ',
            'produk_slug' => 'Pertamina-Oil',
        ]); 

        // Pertamina Products End

        // Shell Product Start
        IsiProduk::create([
            'judul' => 'Diesel Engine Oils',
            'isi' => '
            <div class="card-body">
            <h6>Typical Properties</h6>
                          <table>
                          <tbody>
                          <tr>
                          <th>No</th>
                          <th>Jenis Pelumas</th>
                          <th>Satuan</th>
                          </tr>
                          <tr>
                          <td>1</td>
                          <td>Rimula R2 30 (API CF/TBN 10)</td>
                          <td>209 L</td>
                          </tr>
                          <tr>
                          <td>2</td>
                          <td>Rimula R3 + 40 (API CF)</td>
                          <td>209 L</td>
                          </tr>
                          <tr>
                          <td>3</td>
                          <td>Rimula R2 10w (API CF/TBN 10)</td>
                          <td>209 L</td>
                          </tr>
                          <tr>
                          <td>4</td>
                          <td>Rimula R2 40 (API CF/TBN 10)</td>
                          <td>209 L</td>
                          </tr>
                          <tr>
                          <td>5</td>
                          <td>Rimula R2 50 (API CF/TBN 10)</td>
                          <td>209 L</td>
                          </tr>
                          <tr>
                          <td>6</td>
                          <td>Rimula R3 MV (API CI-4)</td>
                          <td>209 L</td>
                          </tr>
                          <tr>
                          <td>7</td>
                          <td>Rimula R4 X 15W-40 (API CI-4)</td>
                          <td>209 L</td>
                          </tr>
                          </tbody>
                          </table>
          </div>
            ',
            'produk_slug' => 'Shell-Oil',
        ]); 

        IsiProduk::create([
            'judul' => 'Industrial Hydraulic Oils',
            'isi' => '
            <div class="card-body">
            <h6>Typical Properties</h6>
            <p>
                              <table>
                              <tbody>
                              <tr>
                              <th>No</th>
                              <th>Jenis Pelumas</th>
                              <th>Satuan</th>
                              </tr>
                              <tr>
                              <td>1</td>
                              <td>Tellus S2 M 100 (ex, Tellus 100)</td>
                              <td>209 L</td>
                              </tr>
                              <tr>
                              <td>2</td>
                              <td>Tellus S2 M 32 (ex, Tellus 32)</td>
                              <td>209 L</td>
                              </tr>
                              <tr>
                              <td>3</td>
                              <td>Tellus S2 M 46 (ex, Tellus 46)</td>
                              <td>209 L</td>
                              </tr>
                              <tr>
                              <td>4</td>
                              <td>Tellus S2 M 68 (ex, Tellus 68)</td>
                              <td>209 L</td>
                              </tr>
                              <tr>
                              <td>5</td>
                              <td>Tellus S2 V 100 (New Prod, Tellus T100)</td>
                              <td>209 L</td>
                              </tr>
                              <tr>
                              <td>6</td>
                              <td>Tellus S2 V 15 (New Prod, Tellus T15)</td>
                              <td>209 L</td>
                              </tr>
                              <tr>
                              <td>7</td>
                              <td>Tellus S2 V 22 (New Prod, Tellus T22)</td>
                              <td>209 L</td>
                              </tr>
                              <tr>
                              <td>8</td>
                              <td>Tellus S2 V 32 (New Prod, Tellus T32)</td>
                              <td>209 L</td>
                              </tr>
                              <tr>
                              <td>9</td>
                              <td>Tellus S2 V 68 (New Prod, Tellus T68)</td>
                              <td>209 L</td>
                              </tr>
                              <tr>
                              <td>10</td>
                              <td>Tellus S3 M 46 (New Prod, Tellus S46)</td>
                              <td>209 L</td>
                              </tr>
                              <tr>
                              <td>11</td>
                              <td>Tellus S3 M 68 (New Prod, Tellus S68)</td>
                              <td>209 L</td>
                              </tr>
                              </tbody>
                              </table>
            </p>
          </div>
            ',
            'produk_slug' => 'Shell-Oil',
        ]); 

        IsiProduk::create([
            'judul' => ' Industrial Gear Oils',
            'isi' => '
            <div class="card-body">
            <h6>Typical Properties</h6>
            <p>
                              <table>
                              <tbody>
                              <tr>
                              <th>No</th>
                              <th>Jenis Pelumas</th>
                              <th>Satuan</th>
                              </tr>
                              <tr>
                              <td>1</td>
                              <td>Omala F 220</td>
                              <td>209 L</td>
                              </tr>
                              <tr>
                              <td>2</td>
                              <td>Omala F 320</td>
                              <td>209 L</td>
                              </tr>
                              <tr>
                              <td>3</td>
                              <td>Omala S2 G 100 (ex, Omala 100)</td>
                              <td>209 L</td>
                              </tr>
                              <tr>
                              <td>4</td>
                              <td>Omala S2 G 150 (ex, Omala 150)</td>
                              <td>209 L</td>
                              </tr>
                              <tr>
                              <td>5</td>
                              <td>Omala S2 G 220 (ex, Omala 220)</td>
                              <td>209 L</td>
                              </tr>
                              <tr>
                              <td>6</td>
                              <td>Omala S2 G 320 (ex, Omala 320)</td>
                              <td>209 L</td>
                              </tr>
                              <tr>
                              <td>7</td>
                              <td>Omala S2 G 460 (ex, Omala 460)</td>
                              <td>209 L</td>
                              </tr>
                              <tr>
                              <td>8</td>
                              <td>Omala S2 G 68 (ex, Omala 68)</td>
                              <td>209 L</td>
                              </tr>
                              <tr>
                              <td>9</td>
                              <td>Omala S2 G 680 (ex, Omala 680)</td>
                              <td>209 L</td>
                              </tr>
                              <tr>
                              <td>10</td>
                              <td>Omala S4 GX 220 (ex, Omala HD 220)</td>
                              <td>209 L</td>
                              </tr>
                              <tr>
                              <td>11</td>
                              <td>Omala S4 GX 320 (ex, Omala HD 320)</td>
                              <td>209 L</td>
                              </tr>
                              <tr>
                              <td>12</td>
                              <td>Omala S4 GX 460 (ex, Omala HD 460)</td>
                              <td>209 L</td>
                              </tr>
                              <tr>
                              <td>13</td>
                              <td>Omala S4 GX 680 (ex, Omala HD 680)</td>
                              <td>209 L</td>
                              </tr>
                              </tbody>
                              </table>
            </p>
          </div>
            ',
            'produk_slug' => 'Shell-Oil',
        ]); 

        IsiProduk::create([
            'judul' => 'Insulating Bearing Oils',
            'isi' => '
            <div class="card-body">
            <h6>Typical Properties</h6>																						            
              <p>
                                <table>
                                <tbody>
                                <tr>
                                <th>No</th>
                                <th>Jenis Pelumas</th>
                                <th>Satuan</th>
                                </tr>
                                <tr>
                                <td>1</td>
                                <td>Tonna S2 M68</td>
                                <td>209 L</td>
                                </tr>
                                <tr>
                                <td>2</td>
                                <td>Morlina S2 B 150 (ex.Morlina 150)</td>
                                <td>209 L</td>
                                </tr>
                                <tr>
                                <td>3</td>
                                <td>Morlina S2 B 220 (ex.Morlina 220)</td>
                                <td>209 L</td>
                                </tr>
                                <tr>
                                <td>4</td>
                                <td>Morlina S2 B 320 (ex.Morlina 320)</td>
                                <td>209 L</td>
                                </tr>
                                <tr>
                                <td>5</td>
                                <td>Morlina S2 BL 10 (ex.Morlina 10)</td>
                                <td>209 L</td>
                                </tr>
                                <tr>
                                <td>6</td>
                                <td>Morlina S4 B 220 (ex.Omala RL220)</td>
                                <td>209 L</td>
                                </tr>
                                </tbody>
                                </table>
              </p>
            </div>
            ',
            'produk_slug' => 'Shell-Oil',
        ]); 

        IsiProduk::create([
            'judul' => 'Gas Engine Oils',
            'isi' => '
            <div class="card-body">
            <h6>Typical Properties</h6>
            <p>
                              <table>
                              <tbody>
                              <tr>
                              <th>No</th>
                              <th>Jenis Pelumas</th>
                              <th>Satuan</th>
                              </tr>
                              <tr>
                              <td>1</td>
                              <td>Mysella S3 N40 (ex.Mysella LA40)</td>
                              <td>209 L</td>
                              </tr>
                              <tr>
                              <td>2</td>
                              <td>Mysella S3 N40 (ex.Mysella MA40)</td>
                              <td>209 L</td>
                              </tr>
                              <tr>
                              <td>3</td>
                              <td>Mysella S5 N40 (ex.Mysella XL40)</td>
                              <td>209 L</td>
                              </tr>
                              </tbody>
                              </table>
            </p>
          </div>
            ',
            'produk_slug' => 'Shell-Oil',
        ]); 

        IsiProduk::create([
            'judul' => 'Transmission Oils',
            'isi' => '
            <div class="card-body">
            <h6>Typical Properties</h6>
            <p>
                              <table>
                              <tbody>
                              <tr>
                              <th>No</th>
                              <th>Jenis Pelumas</th>
                              <th>Satuan</th>
                              </tr>
                              <tr>
                              <td>1</td>
                              <td>Spirax S2 A 140 (Spirax A140)</td>
                              <td>209 L</td>
                              </tr>
                              <tr>
                              <td>2</td>
                              <td>Spirax S2 A 80W-90 (Spirax A80W-90)</td>
                              <td>209 L</td>
                              </tr>
                              <tr>
                              <td>3</td>
                              <td>Spirax S2 A 85W-140 (Spirax A85W-140)</td>
                              <td>209 L</td>
                              </tr>
                              <tr>
                              <td>4</td>
                              <td>Spirax S2 A 90 (Spirax A90)</td>
                              <td>209 L</td>
                              </tr>
                              <tr>
                              <td>5</td>
                              <td>Spirax S2 G 90 (Spirax G90)</td>
                              <td>209 L</td>
                              </tr>
                              <tr>
                              <td>6</td>
                              <td>Spirax S3 G 80W (Spirax GX 80W)</td>
                              <td>209 L</td>
                              </tr>
                              <tr>
                              <td>7</td>
                              <td>Spirax S4 ATF HDX (Donax TX)</td>
                              <td>209 L</td>
                              </tr>
                              <tr>
                              <td>8</td>
                              <td>Spirax S4 CX 50 (Donax TC 50)</td>
                              <td>209 L</td>
                              </tr>
                              <tr>
                              <td>9</td>
                              <td>Spirax S4 CX 60 (Donax TC 60)</td>
                              <td>209 L</td>
                              </tr>
                              <tr>
                              <td>10</td>
                              <td>Spirax S4 TXM</td>
                              <td>209 L</td>
                              </tr>
                              <tr>
                              <td>11</td>
                              <td>Spirax S4 G75W-90</td>
                              <td>209 L</td>
                              </tr>
                              <tr>
                              <td>12</td>
                              <td>Spirax S5 CFD M 60 (Donax CFD 60)</td>
                              <td>209 L</td>
                              </tr>
                              <tr>
                              <td>13</td>
                              <td>Spirax S6 AXME 75W90</td>
                              <td>209 L</td>
                              </tr>
                              </tbody>
                              </table>
            </p>
          </div>
            ',
            'produk_slug' => 'Shell-Oil',
        ]); 

        IsiProduk::create([
            'judul' => 'Diesel Engine Medium Speed Oils',
            'isi' => '
            <div class="card-body">
            <h6>Typical Properties</h6>
            <p>
                              <table>
                              <tbody>
                              <tr>
                              <th>No</th>
                              <th>Jenis Pelumas</th>
                              <th>Satuan</th>
                              </tr>
                              <tr>
                              <td>1</td>
                              <td>Argina Oil S 30</td>
                              <td>209 L</td>
                              </tr>
                              <tr>
                              <td>2</td>
                              <td>Argina Oil S 40</td>
                              <td>209 L</td>
                              </tr>
                              <tr>
                              <td>3</td>
                              <td>Argina Oil T 30</td>
                              <td>209 L</td>
                              </tr>
                              <tr>
                              <td>4</td>
                              <td>Argina Oil T 40</td>
                              <td>209 L</td>
                              </tr>
                              <tr>
                              <td>5</td>
                              <td>Argina Oil X 40</td>
                              <td>209 L</td>
                              </tr>
                              <tr>
                              <td>6</td>
                              <td>Argina Oil XL 40</td>
                              <td>209 L</td>
                              </tr>
                              </tbody>
                              </table>
            </p>
          </div>
            ',
            'produk_slug' => 'Shell-Oil',
        ]); 

        IsiProduk::create([
            'judul' => 'Industrial Greases',
            'isi' => '
            <div class="card-body">
            <h6>Typical Properties</h6>
            <p>
                              <table>
                              <tbody>
                              <tr>
                              <th>No</th>
                              <th>Jenis Pelumas</th>
                              <th>Satuan</th>
                              </tr>
                              <tr>
                              <td>1</td>
                              <td>Gadus S1 OG 200 (ex, Cardium Compound 200)</td>
                              <td>180 kg</td>
                              </tr>
                              <tr>
                              <td>2</td>
                              <td>Gadus S2 STC 2</td>
                              <td>18 kg</td>
                              </tr>
                              <tr>
                              <td>3</td>
                              <td>Gadus S2 U460L 2 (ex, Darina R2)</td>
                              <td>180 kg</td>
                              </tr>
                              <tr>
                              <td>4</td>
                              <td>Gadus S2 V100 2 (ex, Alvania RL2)</td>
                              <td>180 kg</td>
                              </tr>
                              <tr>
                              <td>5</td>
                              <td>Gadus S2 V100 2 (ex, Alvania RL2)</td>
                              <td>18 kg</td>
                              </tr>
                              <tr>
                              <td>6</td>
                              <td>Gadus S2 V100 3 (ex, Alvania RL3)</td>
                              <td>180 kg</td>
                              </tr>
                              <tr>
                              <td>7</td>
                              <td>Gadus S2 V100 3 (ex, Alvania RL3)</td>
                              <td>18 kg</td>
                              </tr>
                              <tr>
                              <td>8</td>
                              <td>Gadus S2 V220 1 (ex, Alvania EP(LF)1)</td>
                              <td>180 kg</td>
                              </tr>
                              <tr>
                              <td>9</td>
                              <td>Gadus S2 V220AC 2 (ex, Alvania HD2)</td>
                              <td>180 kg</td>
                              </tr>
                              <tr>
                              <td>10</td>
                              <td>Gadus S2 V220AD 2 (ex, Alvania HDX2)</td>
                              <td>180 kg</td>
                              </tr>
                              <tr>
                              <td>11</td>
                              <td>Gadus S3 HS Coup Gr</td>
                              <td>18 kg</td>
                              </tr>
                              <tr>
                              <td>12</td>
                              <td>Gadus S3 V220C 2 (ex, Albida EP2)</td>
                              <td>180 kg</td>
                              </tr>
                              <tr>
                              <td>13</td>
                              <td>Gadus S3 V220C 2 (ex, Albida EP2)</td>
                              <td>18 kg</td>
                              </tr>
                              <tr>
                              <td>14</td>
                              <td>Gadus S3 V220C 3 (ex, Retinax LX3)</td>
                              <td>18 kg</td>
                              </tr>
                              <tr>
                              <td>15</td>
                              <td>Gadus S3 V460D 2 (ex, Albida HDX2)</td>
                              <td>180 kg</td>
                              </tr>
                              <tr>
                              <td>16</td>
                              <td>Gadus S3 V460xD 2 (ex, Albida MDX2)</td>
                              <td>180 kg</td>
                              </tr>
                              <tr>
                              <td>17</td>
                              <td>Gadus S5 U130 D2 (ex, Malleus ET2)</td>
                              <td>18 kg</td>
                              </tr>
                              <tr>
                              <td>18</td>
                              <td>Gadus S2 V220 0</td>
                              <td>18 kg</td>
                              </tr>
                              <tr>
                              <td>19</td>
                              <td>Gadus S5 V220 2</td>
                              <td>18 kg</td>
                              </tr>
                              <tr>
                              <td>20</td>
                              <td>Gadus S3 T100 2 (ex, Stamina RL2)</td>
                              <td>18 kg</td>
                              </tr>
                              <tr>
                              <td>21</td>
                              <td>Gadus S4 V460D2</td>
                              <td>180 kg</td>
                              </tr>
                              <tr>
                              <td>22</td>
                              <td>Malleus Grease GL 500</td>
                              <td>204 kg</td>
                              </tr>
                              </tbody>
                              </table>																						               
            </p>
          </div>
            ',
            'produk_slug' => 'Shell-Oil',
        ]); 

        // Shell Products End

        // Mobil Oil Products Start
        IsiProduk::create([
            'judul' => 'Diesel Engine Oils',
            'isi' => '
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
            ',
            'produk_slug' => 'Mobil-Oil',
        ]); 

        IsiProduk::create([
            'judul' => 'Marine/Power Station Diesel Engine Oils',
            'isi' => '
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
            ',
            'produk_slug' => 'Mobil-Oil',
        ]); 

        IsiProduk::create([
            'judul' => 'Hydraulic Oils',
            'isi' => '
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
            ',
            'produk_slug' => 'Mobil-Oil',
        ]); 

        IsiProduk::create([
            'judul' => 'Industrial Gear Oils',
            'isi' => '
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
            ',
            'produk_slug' => 'Mobil-Oil',
        ]); 

        IsiProduk::create([
            'judul' => 'Compressor Oils',
            'isi' => '
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
            ',
            'produk_slug' => 'Mobil-Oil',
        ]); 

        IsiProduk::create([
            'judul' => 'Turbin Circulation Oils',
            'isi' => '
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
            ',
            'produk_slug' => 'Mobil-Oil',
        ]); 

        IsiProduk::create([
            'judul' => 'Transmission Oils',
            'isi' => '
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
            ',
            'produk_slug' => 'Mobil-Oil',
        ]); 

        IsiProduk::create([
            'judul' => 'Gas Engine Oils',
            'isi' => '
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
            ',
            'produk_slug' => 'Mobil-Oil',
        ]); 

        IsiProduk::create([
            'judul' => 'Greases',
            'isi' => '
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
            ',
            'produk_slug' => 'Mobil-Oil',
        ]); 

        IsiProduk::create([
            'judul' => 'Syntetics Oils',
            'isi' => '
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
            ',
            'produk_slug' => 'Mobil-Oil',
        ]); 

        //Mobil Oil Products End

        //Eni Oil Product Start
        IsiProduk::create([
            'judul' => 'Diesel Engine Oils',
            'isi' => '
            <div class="card-body">
            <h6>Typical Properties</h6>
                          <table>
                          <tbody>
                          <tr>
                          <th>No</th>
                          <th>Item</th>
                          </tr>
                          <tr>
                          <td>1</td>
                          <td>AGIP DIESEL SIGMA 10W</td>
                          </tr>
                          <tr>
                          <td>2</td>
                          <td>AGIP DIESEL SIGMA 30</td>
                          </tr>
                          <tr>
                          <td>3</td>
                          <td>AGIP DIESEL SIGMA 40</td>
                          </tr>
                          <tr>
                          <td>4</td>
                          <td>AGIP DIESEL SIGMA 50</td>
                          </tr>
                          <tr>
                          <td>5</td>
                          <td>AGIP DIESEL SIGMA PLUS 10W</td>
                          </tr>
                          <tr>
                          <td>6</td>
                          <td>AGIP DIESEL SIGMA PLUS 40</td>
                          </tr>
                          <tr>
                          <td>7</td>
                          <td>AGIP DIESEL SIGMA PLUS 50</td>
                          </tr>
                          <tr>
                          <td>8</td>
                          <td>AGIP DIESEL SUPER MULTIGRADE 15W-40</td>
                          </tr>
                          <tr>
                          <td>9</td>
                          <td>AGIP DIESEL SUPER MULTIGRADE 20W-50</td>
                          </tr>
                          <tr>
                          <td>10</td>
                          <td>AGIP SIGMA TURBO DIESEL 15W-40</td>
                          </tr>
                          <tr>
                          <td>11</td>
                          <td>AGIP SIGMA TURBO PLUS 15W-40</td>
                          </tr>
                          <tr>
                          <td>12</td>
                          <td>AGIP SUPER MOTOR OIL 20W-50</td>
                          </tr>
                          <tr>
                          <td>13</td>
                          <td>AGIP SUPER SL MOTOR OIL 20W-50</td>
                          </tr>
                          <tr>
                          <td>14</td>
                          <td>AGIP FORMULA 3000 10W-40</td>
                          </tr>
                          <tr>
                          <td>15</td>
                          <td>AGIP F1 SMO 15W-40</td>
                          </tr>
                          <tr>
                          <td>16</td>
                          <td>AGIP 4T SUPER</td>
                          </tr>
                          </tbody>
                          </table>
          </div>
            ',
            'produk_slug' => 'Eni-Oil',
        ]); 

        IsiProduk::create([
            'judul' => 'Marine Diesel Engine Oils',
            'isi' => '
            <div class="card-body">
            <h6>Typical Properties</h6>
            <p>
                              <table>
                              <tbody>
                              <tr>
                              <th>No</th>
                              <th>Item</th>
                              </tr>
                              <tr>
                              <td>1</td>
                              <td>AGIP PUNICA 550</td>
                              </tr>
                              <tr>
                              <td>2</td>
                              <td>AGIP PUNICA 570</td>
                              </tr>
                              <tr>
                              <td>3</td>
                              <td>AGIP PUNICA 570/I</td>
                              </tr>
                              <tr>
                              <td>4</td>
                              <td>AGIP CLADIUM/I 50 30</td>
                              </tr>
                              <tr>
                              <td>5</td>
                              <td>AGIP CLADIUM/I 120 30</td>
                              </tr>
                              <tr>
                              <td>6</td>
                              <td>AGIP CLADIUM/I 120 40</td>
                              </tr>
                              <tr>
                              <td>7</td>
                              <td>AGIP CLADIUM/I 200 30</td>
                              </tr>
                              <tr>
                              <td>8</td>
                              <td>AGIP CLADIUM/I 200 40</td>
                              </tr>
                              <tr>
                              <td>9</td>
                              <td>AGIP CLADIUM/I 300 30</td>
                              </tr>
                              <tr>
                              <td>10</td>
                              <td>AGIP CLADIUM/I 300 40</td>
                              </tr>
                              <tr>
                              <td>11</td>
                              <td>AGIP CLADIUM/I 400 40</td>
                              </tr>
                              <tr>
                              <td>12</td>
                              <td>AGIP CLADIUM S 300 30</td>
                              </tr>
                              <tr>
                              <td>13</td>
                              <td>AGIP CLADIUM S 300 40</td>
                              </tr>
                              <tr>
                              <td>14</td>
                              <td>AGIP CLADIUM S 400 30</td>
                              </tr>
                              <tr>
                              <td>15</td>
                              <td>AGIP CLADIUM S 400 40</td>
                              </tr>
                              <tr>
                              <td>16</td>
                              <td>AGIP CLADIUM S 500 40</td>
                              </tr>
                              </tbody>
                              </table>
            </p>
          </div>
            ',
            'produk_slug' => 'Eni-Oil',
        ]);
        
        IsiProduk::create([
            'judul' => 'Heat Transfer Oils',
            'isi' => '
            <div class="card-body">
            <h6>Typical Properties</h6>
            <p>
                              <table>
                              <tbody>
                              <tr>
                              <th>No</th>
                              <th>Item</th>
                              </tr>
                              <tr>
                              <td>1</td>
                              <td>AGIP THERM OIL 2</td>
                              </tr>
                              <tr>
                              <td>2</td>
                              <td>AGIP THERM OIL 3</td>
                              </tr>
                              <tr>
                              <td>3</td>
                              <td>AGIP THERM OIL 5</td>
                              </tr>
                              <tr>
                              <td>4</td>
                              <td>AGIP THERM OIL 3 XT</td>
                              </tr>
                              <tr>
                              <td>5</td>
                              <td>AGIP THERM OIL 5 XT</td>
                              </tr>
                              </tbody>
                              </table>
            </p>
          </div>
            ',
            'produk_slug' => 'Eni-Oil',
        ]); 

        IsiProduk::create([
            'judul' => 'Industrial Gear Oils',
            'isi' => '
            <div class="card-body">
            <h6>Typical Properties</h6>
            <p>
                              <table>
                              <tbody>
                              <tr>
                              <th>No</th>
                              <th>Item</th>
                              </tr>
                              <tr>
                              <td>1</td>
                              <td>AGIP BLASIA 68</td>
                              </tr>
                              <tr>
                              <td>2</td>
                              <td>AGIP BLASIA 100</td>
                              </tr>
                              <tr>
                              <td>3</td>
                              <td>AGIP BLASIA 150</td>
                              </tr>
                              <tr>
                              <td>4</td>
                              <td>AGIP BLASIA 220</td>
                              </tr>
                              <tr>
                              <td>5</td>
                              <td>AGIP BLASIA 320</td>
                              </tr>
                              <tr>
                              <td>6</td>
                              <td>AGIP BLASIA 460</td>
                              </tr>
                              <tr>
                              <td>7</td>
                              <td>AGIP BLASIA 680</td>
                              </tr>
                              <tr>
                              <td>8</td>
                              <td>AGIP BLASIA FMP 220</td>
                              </tr>
                              <tr>
                              <td>9</td>
                              <td>AGIP BLASIA FMP 320</td>
                              </tr>
                              </tbody>
                              </table>
            </p>
          </div>
            ',
            'produk_slug' => 'Eni-Oil',
        ]); 

        IsiProduk::create([
            'judul' => 'Gear Box/Transmission Oils',
            'isi' => '
            <div class="card-body">
            <h6>Typical Properties</h6>
            <p>
                              <table>
                              <tbody>
                              <tr>
                              <th>No</th>
                              <th>Item</th>
                              </tr>
                              <tr>
                              <td>1</td>
                              <td>AGIP ROTRA MP 90</td>
                              </tr>
                              <tr>
                              <td>2</td>
                              <td>AGIP ROTRA MP 140</td>
                              </tr>
                              <tr>
                              <td>3</td>
                              <td>AGIP ROTRA MP 80W-90</td>
                              </tr>
                              <tr>
                              <td>4</td>
                              <td>AGIP ROTRA MP 85W-140</td>
                              </tr>
                              <tr>
                              <td>5</td>
                              <td>AGIP ROTRA HY 80W-90</td>
                              </tr>
                              <tr>
                              <td>6</td>
                              <td>AGIP ROTRA HY 85W-140</td>
                              </tr>
                              <tr>
                              <td>7</td>
                              <td>AGIP ROTRA HY 90</td>
                              </tr>
                              <tr>
                              <td>8</td>
                              <td>AGIP ROTRA CT 10W</td>
                              </tr>
                              <tr>
                              <td>9</td>
                              <td>AGIP ROTRA CT 30</td>
                              </tr>
                              <tr>
                              <td>10</td>
                              <td>AGIP ROTRA CT 50</td>
                              </tr>
                              <tr>
                              <td>11</td>
                              <td>AGIP ROTRA JFD PLUS 10W - 30</td>
                              </tr>
                              <tr>
                              <td>12</td>
                              <td>AGIP ATF 2D</td>
                              </tr>
                              <tr>
                              <td>13</td>
                              <td>AGIP ROTRA MULTI ATF</td>
                              </tr>
                              </tbody>
                              </table>
            </p>
          </div>
            ',
            'produk_slug' => 'Eni-Oil',
        ]); 

        IsiProduk::create([
            'judul' => 'Hydraulic Oils',
            'isi' => '
            <div class="card-body">
            <h6>Typical Properties</h6>
            <p>
                              <table>
                              <tbody>
                              <tr>
                              <th>No</th>
                              <th>Item</th>
                              </tr>
                              <tr>
                              <td>1</td>
                              <td>AGIP OSO 32</td>
                              </tr>
                              <tr>
                              <td>2</td>
                              <td>AGIP OSO 46</td>
                              </tr>
                              <tr>
                              <td>3</td>
                              <td>AGIP OSO 68</td>
                              </tr>
                              <tr>
                              <td>4</td>
                              <td>AGIP OSO 100</td>
                              </tr>
                              <tr>
                              <td>5</td>
                              <td>AGIP ARNICA 22</td>
                              </tr>
                              </tbody>
                              </table>
            </p>
          </div>
            ',
            'produk_slug' => 'Eni-Oil',
        ]); 

        IsiProduk::create([
            'judul' => 'Gas Engine Oils',
            'isi' => '
            <div class="card-body">
            <h6>Typical Properties</h6>
            <p>
                              <table>
                              <tbody>
                              <tr>
                              <th>No</th>
                              <th>Item</th>
                              </tr>
                              <tr>
                              <td>1</td>
                              <td>AGIP GEUM BG 540</td>
                              </tr>
                              <tr>
                              <td>2</td>
                              <td>AGIP GEUM BG 840</td>
                              </tr>
                              <tr>
                              <td>3</td>
                              <td>AGIP SIGMA GAS 15W-40</td>
                              </tr>
                              </tbody>
                              </table>
            </p>
          </div>
            ',
            'produk_slug' => 'Eni-Oil',
        ]); 

        IsiProduk::create([
            'judul' => 'Compressor Oils',
            'isi' => '
            <div class="card-body">
            <h6>Typical Properties</h6>
            <p>
                              <table>
                              <tbody>
                              <tr>
                              <th>No</th>
                              <th>Item</th>
                              </tr>
                              <tr>
                              <td>1</td>
                              <td>AGIP ACER 10</td>
                              </tr>
                              <tr>
                              <td>2</td>
                              <td>AGIP ACER 22</td>
                              </tr>
                              <tr>
                              <td>3</td>
                              <td>AGIP ACER 32</td>
                              </tr>
                              <tr>
                              <td>4</td>
                              <td>AGIP ACER 46</td>
                              </tr>
                              <tr>
                              <td>5</td>
                              <td>AGIP ACER 68/td&gt;</td>
                              </tr>
                              <tr>
                              <td>6</td>
                              <td>AGIP ACER 100</td>
                              </tr>
                              <tr>
                              <td>7</td>
                              <td>AGIP ACER 150</td>
                              </tr>
                              <tr>
                              <td>8</td>
                              <td>AGIP ACER 220</td>
                              </tr>
                              <tr>
                              <td>9</td>
                              <td>AGIP ACER 320</td>
                              </tr>
                              <tr>
                              <td>10</td>
                              <td>AGIP RADULA 320</td>
                              </tr>
                              <tr>
                              <td>11</td>
                              <td>AGIP ACER MPK 220</td>
                              </tr>
                              </tbody>
                              </table>
            </p>
          </div>
            ',
            'produk_slug' => 'Eni-Oil',
        ]); 

        // Eni Oil Products End

        // Total Oil Product Start
        IsiProduk::create([
            'judul' => 'Engine Oil',
            'isi' => '
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
                          <td>RUBIA G 17 SAE 40</td>
                          <td>Drum</td>
                          <td>200</td>
                          </tr>
                          <tr>
                          <td>2</td>
                          <td>RUBIA TIR 8600 CI 10W-40</td>
                          <td>Drum</td>
                          <td>200</td>
                          </tr>
                          </tbody>
                          </table>
          </div>
            ',
            'produk_slug' => 'Total-Oil',
        ]); 

        IsiProduk::create([
            'judul' => 'Mineral Hydraulic Oil',
            'isi' => '
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
                              <td>AZOLLA ZS 22</td>
                              <td>Drum</td>
                              <td>200</td>
                              </tr>
                              </tbody>
                              </table>
            </p>
          </div>
            ',
            'produk_slug' => 'Total-Oil',
        ]);
        
        IsiProduk::create([
            'judul' => 'Hi Vi hydraulic Oil',
            'isi' => '
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
                              <td>EQUIVIS ZS 32</td>
                              <td>Drum</td>
                              <td>200</td>
                              </tr>
                              </tbody>
                              </table>
            </p>
          </div>
            ',
            'produk_slug' => 'Total-Oil',
        ]); 

        IsiProduk::create([
            'judul' => 'Synthetic Gear Oil',
            'isi' => '
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
                              <td>CARTER SY 220</td>
                              <td>Drum</td>
                              <td>200</td>
                              </tr>
                              </tbody>
                              </table>
            </p>
          </div>
            ',
            'produk_slug' => 'Total-Oil',
        ]); 

        IsiProduk::create([
            'judul' => 'Open Gear Oil',
            'isi' => '
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
                              <td>CARTER ENS/EP 700</td>
                              <td>Drum</td>
                              <td>200</td>
                              </tr>
                              </tbody>
                              </table>
            </p>
          </div>
            ',
            'produk_slug' => 'Total-Oil',
        ]); 

        IsiProduk::create([
            'judul' => 'Synthetic Compressor Oil',
            'isi' => '
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
                              <td>DACNIS SE 68</td>
                              <td>Drum</td>
                              <td>200</td>
                              </tr>
                              <tr>
                              <td>2</td>
                              <td>DACNIS SE 100</td>
                              <td>Drum</td>
                              <td>200</td>
                              </tr>
                              <tr>
                              <td>3</td>
                              <td>DACNIS SH 46</td>
                              <td>Drum</td>
                              <td>200</td>
                              </tr>
                              </tbody>
                              </table>
            </p>
          </div>
            ',
            'produk_slug' => 'Total-Oil',
        ]); 

        IsiProduk::create([
            'judul' => 'Mineral Screw Compressor Oil',
            'isi' => '
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
                              <td>DACNIS VS 32</td>
                              <td>Drum</td>
                              <td>200</td>
                              </tr>
                              <tr>
                              <td>2</td>
                              <td>DACNIS VS 46</td>
                              <td>Drum</td>
                              <td>200</td>
                              </tr>
                              <tr>
                              <td>3</td>
                              <td>DACNIS VS 68</td>
                              <td>Drum</td>
                              <td>200</td>
                              </tr>
                              </tbody>
                              </table>
            </p>
          </div>
            ',
            'produk_slug' => 'Total-Oil',
        ]); 

        IsiProduk::create([
            'judul' => 'Reciprocating Compressor Oil',
            'isi' => '
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
                              <td>DACNIS P 68</td>
                              <td>Drum</td>
                              <td>200</td>
                              </tr>
                              <tr>
                              <td>2</td>
                              <td>DACNIS P 100</td>
                              <td>Drum</td>
                              <td>200</td>
                              </tr>
                              <tr>
                              <td>3</td>
                              <td>DACNIS P 150</td>
                              <td>Drum</td>
                              <td>200</td>
                              </tr>
                              </tbody>
                              </table>
            </p>
          </div>
            ',
            'produk_slug' => 'Total-Oil',
        ]); 

        IsiProduk::create([
            'judul' => 'Synthetic Foodgrade Lubricating Oil',
            'isi' => '
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
                <td>NEVASTANE SL 220</td>
                <td>Drum</td>
                <td>200</td>
                </tr>
                </tbody>
                </table>
            </p>
        </div>
            ',
            'produk_slug' => 'Total-Oil',
        ]);
        
        IsiProduk::create([
            'judul' => 'Mineral Insulating Oil',
            'isi' => '
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
                <td>ISOVOLTINE II</td>
                <td>Drum</td>
                <td>200</td>
                </tr>
                </tbody>
                </table>
            </p>
        </div>
            ',
            'produk_slug' => 'Total-Oil',
        ]); 

        IsiProduk::create([
            'judul' => 'Heat Transfer Fluid',
            'isi' => '
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
                <td>SERIOLA 3120</td>
                <td>Drum</td>
                <td>200</td>
                </tr>
                <tr>
                <td>2</td>
                <td>SERIOLA 1510</td>
                <td>Drum</td>
                <td>200</td>
                </tr>
                <tr>
                <td>3</td>
                <td>SERIOLA 100</td>
                <td>Drum</td>
                <td>200</td>
                </tr>
                </tbody>
                </table>
            </p>
        </div>
            ',
            'produk_slug' => 'Total-Oil',
        ]);
        
        IsiProduk::create([
            'judul' => 'Turbine Oil',
            'isi' => '
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
                <td>PRESLIA 32</td>
                <td>Drum</td>
                <td>200</td>
                </tr>
                <tr>
                <td>2</td>
                <td>PRESLIA 46</td>
                <td>Drum</td>
                <td>200</td>
                </tr>
                <tr>
                <td>3</td>
                <td>PRESLIA 68</td>
                <td>Drum</td>
                <td>200</td>
                </tr>
                <tr>
                <td>4</td>
                <td>PRESLIA 100</td>
                <td>Drum</td>
                <td>200</td>
                </tr>
                </tbody>
                </table>
            </p>
        </div>
            ',
            'produk_slug' => 'Total-Oil',
        ]); 

        IsiProduk::create([
            'judul' => 'Engine Oil Rubia',
            'isi' => '
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
                <td>RUBIA ST 415</td>
                <td>Drum</td>
                <td>200</td>
                </tr>
                <tr>
                <td>2</td>
                <td>RUBIA ST 420</td>
                <td>Drum</td>
                <td>200</td>
                </tr>
                <tr>
                <td>3</td>
                <td>RUBIA S 30 CF</td>
                <td>Drum</td>
                <td>200</td>
                </tr>
                <tr>
                <td>4</td>
                <td>RUBIA S 40 CF</td>
                <td>Drum</td>
                <td>200</td>
                </tr>
                <tr>
                <td>5</td>
                <td>RUBIA S 50 CF</td>
                <td>Drum</td>
                <td>200</td>
                </tr>
                <tr>
                <td>6</td>
                <td>RUBIA TIR 6600 15W/40 CH4</td>
                <td>Drum</td>
                <td>200</td>
                </tr>
                <tr>
                <td>7</td>
                <td>RUBIA TIR 7400 15W/40 CI4</td>
                <td>Drum</td>
                <td>200</td>
                </tr>
                <tr>
                <td>8</td>
                <td>RUBIA XT 15W/40 CF4</td>
                <td>Drum</td>
                <td>200</td>
                </tr>
                <tr>
                <td>9</td>
                <td>RUBIA XT 20W/50 CF4</td>
                <td>Drum</td>
                <td>200</td>
                </tr>
                </tbody>
                </table>
            </p>
        </div>
            ',
            'produk_slug' => 'Total-Oil',
        ]); 

        IsiProduk::create([
            'judul' => 'Transmission Oil',
            'isi' => '
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
                <td>TRANSMISSION TM 80W/90</td>
                <td>Drum</td>
                <td>200</td>
                </tr>
                <tr>
                <td>2</td>
                <td>TRANSMISSION TM 85W/140</td>
                <td>Drum</td>
                <td>200</td>
                </tr>
                </tbody>
                </table>
            </p>
        </div>
            ',
            'produk_slug' => 'Total-Oil',
        ]); 

        IsiProduk::create([
            'judul' => 'Mineral Gear Oil',
            'isi' => '
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
                <td>CARTER EP 68</td>
                <td>Drum</td>
                <td>200</td>
                </tr>
                <tr>
                <td>2</td>
                <td>CARTER EP 100</td>
                <td>Drum</td>
                <td>200</td>
                </tr>
                <tr>
                <td>3</td>
                <td>CARTER EP 150</td>
                <td>Drum</td>
                <td>200</td>
                </tr>
                <tr>
                <td>4</td>
                <td>CARTER EP 220</td>
                <td>Drum</td>
                <td>200</td>
                </tr>
                <tr>
                <td>5</td>
                <td>CARTER EP 320</td>
                <td>Drum</td>
                <td>200</td>
                </tr>
                <tr>
                <td>6</td>
                <td>CARTER EP 460</td>
                <td>Drum</td>
                <td>200</td>
                </tr>
                <tr>
                <td>7</td>
                <td>CARTER EP 680</td>
                <td>Drum</td>
                <td>200</td>
                </tr>
                </tbody>
                </table>
            </p>
        </div>
            ',
            'produk_slug' => 'Total-Oil',
        ]); 

        IsiProduk::create([
            'judul' => 'Gas Engine Oil',
            'isi' => '
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
                <td>NATERIA MH 40</td>
                <td>Drum</td>
                <td>200</td>
                </tr>
                <tr>
                <td>2</td>
                <td>NATERIA MJ 40</td>
                <td>Drum</td>
                <td>200</td>
                </tr>
                </tbody>
                </table>
            </p>
        </div>
            ',
            'produk_slug' => 'Total-Oil',
        ]); 

        IsiProduk::create([
            'judul' => 'Lithium Grease NLGI 0-3-Standard Application',
            'isi' => '
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
                <td>MULTIS EP 0A</td>
                <td>Drum</td>
                <td>200</td>
                </tr>
                <tr>
                <td>2</td>
                <td>MULTIS EP 00A</td>
                <td>Drum</td>
                <td>200</td>
                </tr>
                <tr>
                <td>3</td>
                <td>MULTIS EP 2A</td>
                <td>Drum</td>
                <td>200</td>
                </tr>
                <tr>
                <td>4</td>
                <td>MULTIS EP 3A</td>
                <td>Drum</td>
                <td>200</td>
                </tr>
                </tbody>
                </table>
            </p>
        </div>
            ',
            'produk_slug' => 'Total-Oil',
        ]);  
        
        IsiProduk::create([
            'judul' => 'Lithium Complex Grease NLGI 2-High Performance',
            'isi' => '
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
                <td>MULTIS COMPLEX EP 2A</td>
                <td>Drum</td>
                <td>200</td>
                </tr>
                <tr>
                <td>2</td>
                <td>MULTIS COMPLEX EP 3A</td>
                <td>Drum</td>
                <td>200</td>
                </tr>
                <tr>
                <td>3</td>
                <td>MULTIS COMPLEX MS 2</td>
                <td>Drum</td>
                <td>200</td>
                </tr>
                </tbody>
                </table>
            </p>
        </div>
            ',
            'produk_slug' => 'Total-Oil',
        ]); 

        IsiProduk::create([
            'judul' => 'Polyurea Grease-High Speed Application',
            'isi' => '
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
                <td>ALTIS EM 2</td>
                <td>Drum</td>
                <td>200</td>
                </tr>
                </tbody>
                </table>
            </p>
        </div>
            ',
            'produk_slug' => 'Total-Oil',
        ]); 

        IsiProduk::create([
            'judul' => 'Food Grade Grase',
            'isi' => '
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
                <td>AXA GR 1</td>
                <td>Drum</td>
                <td>200</td>
                </tr>
                </tbody>
                </table>
            </p>
        </div>
            ',
            'produk_slug' => 'Total-Oil',
        ]); 

        IsiProduk::create([
            'judul' => 'Machine Tool Oil',
            'isi' => '
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
                <td>DROSERA MS 68</td>
                <td>Drum</td>
                <td>200</td>
                </tr>
                <tr>
                <td>2</td>
                <td>DROSERA MS 220</td>
                <td>Drum</td>
                <td>200</td>
                </tr>
                </tbody>
                </table>																																																																																																																				 
            </p>
        </div>
            ',
            'produk_slug' => 'Total-Oil',
        ]); 

    }
}
