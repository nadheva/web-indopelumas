<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Indopelumas</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favikon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('tindopelumas/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('tindopelumas/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('tindopelumas/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('tindopelumas/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('tindopelumas/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('tindopelumas/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('tindopelumas/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('tindopelumas/css/gijgo.css')}}">
    <link rel="stylesheet" href="{{asset('tindopelumas/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('tindopelumas/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('tindopelumas/css/slicknav.css')}}">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">

    <link rel="stylesheet" href="{{asset('tindopelumas/css/new.css')}}">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->

    <style>
        table {
            background-color: #f9f9ff;
            width: 150%;
        }

        th,
        td {
            border: 1px solid #e6e6e6;
            padding: 15px;
            color: black;
        }
    </style>
    
</head>
<body>

    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area" >
                <div class="container" >
                    <div class="header_bottom_border" >
                        <div class="row align-items-center" >
                            <div class="col-12 d-block d-lg-none" style="background: #bfbfbf;">
                                <div class="logo" >
                                    <a href="index.php">
                                        <img src="img/log.png" alt="" width="300px" height="60px">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-9 col-lg-9">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a  href="index.php">Home</a></li>
                                            <li><a  href="about.php">About Us</a></li>
                                            <li><a href="product">Product<i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="product_details.php?id=1">Nebula Oil</a></li>
                                                    <li><a href="product_details.php?id=2">Pertamina Oil</a></li>
                                                    <li><a href="product_details.php?id=3">Shell Oil</a></li>
                                                    <li><a href="product_details.php?id=4">Mobil Oil</a></li>
                                                    <li><a href="product_details.php?id=5">Eni Oil</a></li>
                                                    <li><a href="product_details.php?id=6">Total Oil</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.php">Contact</a></li>
                                            <li><a href="news.php">News</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- service_details_start  -->
    <div class="service_details_area">
        <div class="container">
            <div class="row">
                <!--<div class="col-lg-5 col-md-5">-->
                <!--</div>-->
                <div class="" style="margin-top: -130px;">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                            <div class="service_thumb">
                                <img class="img-fluid" src="{{ asset('storage/produk/'.$produk->foto) }}" alt="" width="500px" height="160px">
                            </div>
                            <br><br>
                            <div class="accordion_area mt-2" style="margin-top:-100px;">
                                <h2>{{ $produk->produk }}</h2>
                                <div class="faq_ask">
                                    <h3>Deskripsi</h3>

                                    {{-- Deskripsi mulai dari sini --}}
                                    {!! $produk->deskripsi !!}
                                    {{-- Batas akhir deskripsi produk --}}

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <!-- footer start -->
        <footer class="footer">
            <div class="copy-right_text">
                <div class="container">
                    <div class="footer_border"></div>
                    <div class="row">
                        <div class="col-xl-12">
                            <p class="copy_right text-center">
                                
    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--/ footer end  -->



    <!-- JS here -->
    <script src="{{asset('tindopelumas/js/vendor/modernizr-3.5.0.min.js')}}"></script>
    <script src="{{asset('tindopelumas/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('tindopelumas/js/popper.min.js')}}"></script>
    <script src="{{asset('tindopelumas/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('tindopelumas/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('tindopelumas/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('tindopelumas/js/ajax-form.js')}}"></script>
    <script src="{{asset('tindopelumas/js/waypoints.min.js')}}"></script>
    <script src="{{asset('tindopelumas/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('tindopelumas/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('tindopelumas/js/scrollIt.js')}}"></script>
    <script src="{{asset('tindopelumas/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('tindopelumas/js/wow.min.js')}}"></script>
    <script src="{{asset('tindopelumas/js/nice-select.min.js')}}"></script>
    <script src="{{asset('tindopelumas/js/jquery.slicknav.min.js')}}"></script>
    <script src="{{asset('tindopelumas/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('tindopelumas/js/plugins.js')}}"></script>
    <!-- <script src="js/gijgo.min.js"></script> -->
    <script src="{{asset('tindopelumas/js/slick.min.js')}}"></script>



    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>


    <script src="js/main.js"></script>


</body>

</html>