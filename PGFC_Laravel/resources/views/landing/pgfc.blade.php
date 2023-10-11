<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Soccer | PGFC</title>                                                                                                                                                                                                                                                                                                    
    <meta name="description" content="">
    <meta name="viewport" content="widtd=device-widtd, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.html">
    <!-- Place favicon.ico in tde root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="images/logo-pgfc.png">
    <!-- bootstrap v3.3.6 css -->
		<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
		<!-- font-awesome css -->
		<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
		<!-- animate css -->
		<link rel="stylesheet" href="{{ asset('css/animate.css') }}">
		<!-- Main Menu css -->
		<link rel="stylesheet" href="{{ asset('css/rsmenu-main.css') }}">
		<!-- rsmenu transitions css -->
		<link rel="stylesheet" href="{{ asset('css/rsmenu-transitions.css') }}">
		<!-- hover-min css -->
		<link rel="stylesheet" href="{{ asset('css/hover-min.css') }}">
		  <!-- magnific-popup css -->
		<link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
		<!-- owl.carousel css -->
		<link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
		<!-- style css -->
		<link rel="stylesheet" href="{{ asset('style.css') }}">
		<!-- responsive css -->
		<link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
		<!-- modernizr js -->
		<script src="js/modernizr-2.8.3.min.js"></script>
</head>

<body class="home-two">
    @include('components.navbar')

    <!-- Breadcrumbs Section Start -->
    <div class="rs-breadcrumbs sec-color">
        <img src="images/full-slider/slide4.jpg" alt="Breadcrubs" />
        <div class="breadcrumbs-inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1 class="page-title">PGFC</h1>
                        <ul>
                            <li>
                                <a class="active" href="{{ route('index') }}">Home</a>
                            </li>
                            <li>PGFC</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs Section End -->

    <!-- Point Table Section Start -->
    <div class="champion-section-area sec-spacer">
        <div class="container">
            <div class="row pb-50">
                <div class="col-md-1 col-sm-1">
                    <div class="club-sidebar-top">
                        <div class="club-logo">
                            <img src="images/logo-pgfc.png" alt="logo">
                            <div class="club-name">
                                <h2 class="title-bg"></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-11 col-sm-9">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="title-bg">Tentang PGFC</h3>
                            <p>PGFC adalah singkatan dari Petrokimia Gresik Futsal Championship merupakan sebuah
                                turnamen futsal antar SMA/SMK sederajat di kabupaten Gresik yang diselengarakan oleh PT.
                                Petrokimia Gresik. PGFC bermula pada tahun 2014 dengan nama PGFC (Petrogres Student
                                Futsal Championship) yang diikuti 8 sekolah dengan SMAN 1 Manyar sebagai juaranya,
                                kemudian pada tahun 2015 diikuti oleh 16 sekolah, dengan SMAN 1 Manyar kembali menjadi
                                Juaranya. Dan pada tahun 2016 berganti nama menjadi PGFC (Petrokimia Gresik Futsal
                                Championship).</p>
                            <ul class="point-menu">
                                <li class="active"><a data-toggle="tab" href="#timeline-list">Timeline</a></li>
                                <li><a data-toggle="tab" href="#gallery">Gallery</a></li>
                            </ul>
                            <div class="tab-content">
                                <div id="timeline-list" class="tab-pane fade in active">
                                    <!--Squad Style Start -->
                                    <div class="timeline-list">
                                        <div class="list-item">
                                            <div class="image">
                                                <h2>Image</h2>
                                            </div>
                                            <div class="list-text">
                                                <div class="name">
                                                    <h2>Year</h2>
                                                </div>
                                                <div class="designation">
                                                    <h2>Description</h2>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-item">
                                            <div class="image">
                                                <img src="images/petro-pgfc/11.jpg" alt="">
                                            </div>
                                            <div class="list-text">
                                                <div class="name">
                                                    <h4>2014</h4>
                                                </div>
                                                <div class="designation">
                                                    <p>Petrogres Student Futsal Championship. Diikuti 8 sekolah dari
                                                        kabupaten Gresik.<br>
                                                        PGFC 2014 dimenangkan oleh SMAN 1 Manyar sebagai juara I dan
                                                        SMAN 1 Kebomas sebagai juara 2.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-item">
                                            <div class="image">
                                                <img src="images/petro-pgfc/11.jpg" alt="">
                                            </div>
                                            <div class="list-text">
                                                <div class="name">
                                                    <h4>2015</h4>
                                                </div>
                                                <div class="designation">
                                                    <p>Petrogres Student Futsal Championship. Diikuti oleh 16 sekolah
                                                        dari kabupaten Gresik.<br>
                                                        PGFC 2015 dimenangkan oleh SMAN 1 Manyar sebagai juara I, SMAN 1
                                                        Kebomas sebagai juara 2, SMAN 1 Sidayu sebagai juara 3, dan SMAN
                                                        NU 1 Gresik sebagai juara 4.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-item">
                                            <div class="image">
                                                <img src="images/petro-pgfc/11.jpg" alt="">
                                            </div>
                                            <div class="list-text">
                                                <div class="name">
                                                    <h4>2016</h4>
                                                </div>
                                                <div class="designation">
                                                    <p>Petrokimia Gresik Futsal Championship. Diikuti oleh 24 sekolah
                                                        dan berlangsung di bulan Agustus 2016.<br></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Squad Style End -->
                                <div id="gallery" class="tab-pane fade">
                                    <div class="gallery-section-page2 gallery-section-area">
                                        <div class="row">
                                            <div class="col-md-3 col-sm-6 col-xs-6">
                                                <div class="single-gallery">
                                                    <img src="images/petro-pgfc/11.jpg" alt="">
                                                    <div class="popup-icon">
                                                        <a class="image-popup" href="images/petro-pgfc/11.jpg"><i
                                                                class="fa fa-arrows-alt"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6 col-xs-6">
                                                <div class="single-gallery">
                                                    <img src="images/petro-pgfc/2.jpg" alt="">
                                                    <div class="popup-icon">
                                                        <a class="image-popup" href="images/petro-pgfc/2.jpg"><i
                                                                class="fa fa-arrows-alt"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6 col-xs-6">
                                                <div class="single-gallery">
                                                    <img src="images/petro-pgfc/3.webp" alt="">
                                                    <div class="popup-icon">
                                                        <a class="image-popup" href="images/petro-pgfc/3.webp"><i
                                                                class="fa fa-arrows-alt"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6 col-xs-6">
                                                <div class="single-gallery">
                                                    <img src="images/petro-pgfc/4.jpg" alt="">
                                                    <div class="popup-icon">
                                                        <a class="image-popup" href="images/petro-pgfc/4.jpg"><i
                                                                class="fa fa-arrows-alt"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6 col-xs-6">
                                                <div class="single-gallery">
                                                    <img src="images/petro-pgfc/5.jpg" alt="">
                                                    <div class="popup-icon">
                                                        <a class="image-popup" href="images/petro-pgfc/5.jpg"><i
                                                                class="fa fa-arrows-alt"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6 col-xs-6">
                                                <div class="single-gallery">
                                                    <img src="images/petro-pgfc/6.jpg" alt="">
                                                    <div class="popup-icon">
                                                        <a class="image-popup" href="images/petro-pgfc/6.jpg"><i
                                                                class="fa fa-arrows-alt"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6 col-xs-6">
                                                <div class="single-gallery">
                                                    <img src="images/petro-pgfc/10.jpg" alt="">
                                                    <div class="popup-icon">
                                                        <a class="image-popup" href="images/petro-pgfc/10.jpg"><i
                                                                class="fa fa-arrows-alt"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6 col-xs-6">
                                                <div class="single-gallery">
                                                    <img src="images/petro-pgfc/8.jpg" alt="">
                                                    <div class="popup-icon">
                                                        <a class="image-popup" href="images/petro-pgfc/8.jpg"><i
                                                                class="fa fa-arrows-alt"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- Point Table Section End -->
        
        <!-- Testimonials Sections Start Here-->
        <div class="testimonial-section pb-100">
            <div class="container">
                <h3 class="title-bg">Testimonials</h3>
                <div class="row">
                    <div class="col-md-12">
                        <div id="testimonial-slider" class="rs-carousel owl-carousel" data-loop="true"
                            data-items="1" data-margin="0" data-autoplay="true" data-autoplay-timeout="6000"
                            data-smart-speed="2000" data-dots="false" data-nav="false" data-nav-speed="false"
                            data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false"
                            data-ipad-device="1" data-ipad-device-nav="false" data-ipad-device-dots="false"
                            data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="false"
                            data-md-device="1" data-md-device-nav="false" data-md-device-dots="false">
                            <div class="testimonial">
                                <div class="testimonial-profile">
                                    <a href="#"><img src="images/testimonial/tom.jpg" alt="tom"></a>
                                </div>
                                <div class="testimonial-content">
                                    <h3 class="testimonial-title">Ir. I Ketut Rusnaya, M.M.</h3>
                                    <span class="testimonial-post">Office Manager</span>
                                    <div class="client-rating">
                                        <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star"
                                            aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i
                                            class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o"
                                            aria-hidden="true"></i>
                                    </div>
                                    <p class="testimonial-description">
                                        “PGFC sangat mengedepankan fair play. Dan dari ajang ini diharapkan
                                        dapat menjaring
                                        talenta-talenta muda futsal yang nantinya bisa tampil di ajang yang
                                        lebih tinggi”
                                    </p>
                                </div>
                            </div>
                            <div class="testimonial">
                                <div class="testimonial-profile">
                                    <a href="#"><img src="images/testimonial/peter.jpg" alt=""></a>
                                </div>
                                <div class="testimonial-content">
                                    <h3 class="testimonial-title">Wahyudi, Drs., S.H., M.M.</h3>
                                    <span class="testimonial-post">CEO Founder </span>
                                    <div class="client-rating">
                                        <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star"
                                            aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i
                                            class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o"
                                            aria-hidden="true"></i>
                                    </div>
                                    <p class="testimonial-description">
                                        “Memenangi pertandingan itu biasa, menang dengan sportif itu luar
                                        biasa. Memenangi
                                        pertandingan itu penting, tp lebih penting bermain dengan baik dan
                                        sportif. Dream
                                        work comes from good teamwork. You are here to play and win
                                        sportively.”
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonials Sections End Here-->

        <!-- Sponsorhip-->
    @include('components.sponsorship')

         {{-- footer --}}
    @include('components.footer')

    <!-- Search Modal Start -->
    <div aria-hidden="true" class="modal fade search-modal" role="dialog" tabindex="-1">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="fa fa-close"></span>
        </button>
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="search-block clearfix">
                    <form>
                        <div class="form-group">
                            <input class="form-control" placeholder="eg: Soccer News" type="text">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Start scrollUp  -->
    <div id="return-to-top">
        <span>Top</span>
    </div>
    <!-- End scrollUp  -->

    <!-- all js here -->
    <!-- jquery latest version -->
    <script src="{{ asset('js/jquery.min.js')}}"></script>
    <!-- Menu js -->
    <script src="{{ asset('js/rsmenu-main.js')}}"></script>
    <!-- jquery-ui js -->
    <script src="{{ asset('js/jquery-ui.min.js')}}"></script>
    <!-- bootstrap js -->
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    <!-- meanmenu js -->
    <script src="{{ asset('js/jquery.meanmenu.js')}}"></script>
    <!-- wow js -->
    <script src="{{ asset('js/wow.min.js')}}"></script>
    <!-- Slick js -->
    <script src="{{ asset('js/slick.min.js')}}"></script>
    <!-- masonry js -->
    <script src="{{ asset('js/masonry.js')}}"></script>
    <!-- magnific-popup js -->
    <!-- owl.carousel js -->
    <script src="{{ asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('js/time-circle.js')}}"></script>
    <!-- magnific-popup js -->
    <script src="{{ asset('js/jquery.magnific-popup.js')}}"></script>
    <!-- main js -->
    <script src="{{ asset('js/main.js')}}"></script>
</body>

</html>
