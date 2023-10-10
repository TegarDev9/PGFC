<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>PGFC | Home</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.html">
    <!-- Place favicon.ico in the root directory -->
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
    <link rel="stylesheet" href="{{ asset('css/time-circles.css') }}">
    <!-- Slick css -->
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <!-- style css -->
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <!-- responsive css -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
</head>

<body class="home-two">
    @include('components.navbar')

    <!-- Slider Section Start Here -->
    <div class="slider-section4 slider-main">
        <div id="slider-five" class="owl-carousel">
            <div class="item active">
                <img src="images/full-slider/slide3.jpg" alt="Slider image">
                <div class="dsc">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="slider-text text-center">
                                    <h1 data-animation-in="slideInDown" data-animation-out="animate-out slideOutUp">
                                        SMAN 1 GRESIK<span>VS</span>SMAN 2 LAMONGAN</h1>
                                    <div data-animation-in="slideInLeft" data-animation-out="animate-out fadeOut"
                                        class="CountDownTimer" data-date="2023-08-22 15:00:00"></div>
                                    <div class="btn-slider">
                                        <a href="https://www.loket.com/event/pgfc-2023" class="btn1" data-animation-in="slideInUp"
                                            data-animation-out="animate-out slideOutDown" target="_blank">Book a Ticket</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="images/full-slider/slide2.jpg" alt="Slider image">
                <div class="dsc">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="slider-text text-center">
                                    <h1 data-animation-in="slideInDown" data-animation-out="animate-out slideOutUp">SMAN 1 KEBOMAS<span>VS</span>SMAN 2 MOJOKERTO</h1>
                                    <div data-animation-in="slideInRight" data-animation-out="animate-out fadeOut"
                                        class="CountDownTimer" data-date="2023-08-22 16:00:00"></div>
                                    <div class="btn-slider">
                                        <a href="https://www.loket.com/event/pgfc-2023" class="btn1" data-animation-in="slideInUp"
                                            data-animation-out="animate-out slideOutDown" target="_blank">Book a Ticket</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item">
                <img src="images/full-slider/slide4.jpg" alt="Slider image">
                <div class="dsc">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="slider-text text-center">
                                    <h1 data-animation-in="slideInDown" data-animation-out="animate-out slideOutUp">
                                        SMK YPI DARUSSALAM 1 CERME<span>VS</span>SMAN 1 WRINGINANOM</h1>
                                    <div data-animation-in="slideInLeft" data-animation-out="animate-out fadeOut"
                                        class="CountDownTimer" data-date="2023-08-22 18:00:00"></div>
                                    <div class="btn-slider">
                                        <a href="https://www.loket.com/event/pgfc-2023" class="btn1" data-animation-in="slideInUp"
                                            data-animation-out="animate-out slideOutDown" target="_blank">Book a Ticket</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Slider Section end Here -->

    <!-- Upcoming Match Section Start Here-->
    <div class="upcoming-section">
        <div class="container">
            <h2>Upcoming Match</h2>
            <div id="upcoming" class="rs-carousel owl-carousel" data-loop="true" data-items="1" data-margin="30"
                data-autoplay="true" data-autoplay-timeout="5000" data-smart-speed="2000" data-dots="false"
                data-nav="false" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="false"
                data-mobile-device-dots="false" data-ipad-device="1" data-ipad-device-nav="false"
                data-ipad-device-dots="false" data-ipad-device2="1" data-ipad-device-nav2="false"
                data-ipad-device-dots2="false" data-md-device="1" data-md-device-nav="false"
                data-md-device-dots="false">
                <div class="item">
                    <div class="col-md-4 col-sm-4 col-xs-12 first">
                        <img src="images/upcoming/LogoSekolah/SMAN 1 CERME.jpg" alt="">
                        <h4>SMAN 1 CERME</h4>
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <span class="date">Selasa, 22 Agustus 2023 19:00 WIB</span>
                        <span class="vs">VS</span>
                        <span>GOR Tri Dharma PT Petrokimia Gresik</span>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 last">
                        <img src="images/upcoming/LogoSekolah/SMA SEMEN GRESIK.jpg" alt="">
                        <h4>SMA SEMEN GRESIK</h4>
                    </div>
                </div>

                <div class="item">
                    <div class="col-md-4 col-sm-4 col-xs-12 first">
                        <img src="images/upcoming/LogoSekolah/SMKN 5 SURABAYA.png" alt="">
                        <h4>SMKN 5 SURABAYA</h4>
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <span class="date">Rabu, 23 Agustus 2023 15:00 WIB</span>
                        <span class="vs">VS</span>
                        <span>GOR Tri Dharma PT Petrokimia Gresik</span>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 last">
                        <img src="images/upcoming/LogoSekolah/SMK MANBAUL ULUM.png" alt="">
                        <h4>SMK MANBAUL ULUM</h4>
                    </div>
                </div>

                <div class="item">
                    <div class="col-md-4 col-sm-4 col-xs-12 first">
                        <img src="images/upcoming/LogoSekolah/SMA MUHAMMADIYAH 8 CERME.png" alt="">
                        <h4>SMA MUHAMMADIYAH 8 CERME</h4>
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <span class="date">Rabu, 23 Agustus 2023 16:00 WIB</span>
                        <span class="vs">VS</span>
                        <span>GOR Tri Dharma PT Petrokimia Gresik</span>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 last">
                        <img src="images/upcoming/LogoSekolah/SMA NU2 GRESIK.jpg" alt="">
                        <h4>SMA NU2 GRESIK</h4>
                    </div>
                </div>

                <div class="item">
                    <div class="col-md-4 col-sm-4 col-xs-12 first">
                        <img src="images/upcoming/LogoSekolah/SMA NEGERI 1 KRIAN.png" alt="">
                        <h4>SMA NEGERI 1 KRIAN</h4>
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <span class="date">Rabu, 23 Agustus 2023 18:00 WIB</span>
                        <span class="vs">VS</span>
                        <span>GOR Tri Dharma PT Petrokimia Gresik</span>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 last">
                        <img src="images/upcoming/LogoSekolah/SMKN 1 CERME.png" alt="">
                        <h4>SMKN 1 CERME</h4>
                    </div>
                </div>
                <div class="item">
                    <div class="col-md-4 col-sm-4 col-xs-12 first">
                        <img src="images/upcoming/LogoSekolah/SMK YASMU MANYAR.png" alt="">
                        <h4>SMK YASMU MANYAR</h4>
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <span class="date">Rabu, 23 Agustus 2023 19:00 WIB</span>
                        <span class="vs">VS</span>
                        <span>GOR Tri Dharma PT Petrokimia Gresik</span>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 last">
                        <img src="images/upcoming/LogoSekolah/SMA NU 1 GRESIK.jpg" alt="">
                        <h4>SMA NU 1 GRESIK</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Upcoming Match Section end Here-->

    <!-- All news area Start Here-->
    <div class="all-news-area sec-spacer">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h3 class="title-bg">Latest News</h3>
                    <div class="row">
                        <div class="col-sm-9">
                            <div class="latest-news-slider">
                                <div>
                                    <div class="news-normal-block">
                                        <div class="news-img">
                                            <a href="#">
                                                <img src="images/latest/news1.jpg" alt="" />
                                            </a>
                                        </div>
                                        <h4 class="news-title"><a href="{{ route('landing.blog-single') }}">32 Tim SMA
                                                Bersaing di Turnamen Futsal PGFC 2023</a></h4>
                                        <div class="news-desc">
                                            <p>
                                                Sebanyak 32 tim dari berbagai SMA sederajat yang
                                                berhasil lolos dari seleksi ketat sebanyak 65 tim akan
                                                berpartisipasi dalam turnamen Petrokimia Gresik Futsal
                                                Championship (PGFC) 2023. Kompetisi ini dijadwalkan akan
                                                berlangsung mulai tanggal 22 September hingga 3
                                                September 2023.
                                            </p>
                                        </div>
                                        <div class="news-btn">
                                            <a class="primary-btn" href="#">Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="news-normal-block">
                                        <div class="news-img">
                                            <a href="#">
                                                <img src="images/latest/news2.jpg" alt="" />
                                            </a>
                                        </div>
                                        <h4 class="news-title"><a href="{{ route('landing.blog-single') }}">Petrokimia
                                                Gresik Bersama 4 Besar Peserta PGFC 2022 Sepakat Tak
                                                Lanjutkan Pertandingan</a></h4>
                                        <div class="news-desc">
                                            <p>
                                                Sebagai bentuk belasungkawa atas tragedi di Stadion
                                                Kanjuruhan Malang, Petrokimia Gresik bersama empat besar
                                                peserta Petrokimia Gresik Futsal Championship (PGFC)
                                                2022 sepakat untuk tidak melanjutkan pertandingan.
                                            </p>
                                        </div>
                                        <div class="news-btn">
                                            <a class="primary-btn" href="#">Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="news-normal-block">
                                        <div class="news-img">
                                            <a href="#">
                                                <img src="images/latest/news3.jpg" alt="" />
                                            </a>
                                        </div>
                                        <h4 class="news-title"><a href="{{ route('landing.blog-single') }}">Dorong
                                                Munculnya Atlit Berprestasi, Petrokimia Gresik Gelar
                                                Kompetisi PGFC 2022</a></h4>
                                        <div class="news-desc">
                                            <p>
                                                Untuk mendorong Bibit-bibit atlet berprestasi,
                                                Petrokimia Gresik kembali menggelar kompetisi futsal
                                                pada ajang Petrokimia Gresik Futsal Championship (PGFC)
                                                yang digelar di SOR Tri Dharma mulai 19 September hingga
                                                1 Oktober 2022. Ada 32 tim futsal SMA/sederajat, dari
                                                lima daerah yaitu Gresik, Surabaya, Sidoarjo, Lamongan
                                                dan Mojokerto yang siap bertanding.
                                            </p>
                                        </div>
                                        <div class="news-btn">
                                            <a class="primary-btn" href="#">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="latest-news-nav">
                                <div><img src="images/latest/news1.jpg" alt="" /></div>
                                <div><img src="images/latest/news2.jpg" alt="" /></div>
                                <div><img src="images/latest/news3.jpg" alt="" /></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="sidebar-area right-side-area">
                        <h3 class="title-bg">Recent Results</h3>
                        <div class="today-match-teams text-center">
                            <div class="overly-bg"></div>
                            <div class="title-head">
                                <h4>Last Match Result</h4>
                                <span class="date">Selasa, 22 Agustus 2023</span>
                            </div>
                            <div class="today-score">
                                <div class="today-match-team">
                                    <img src="images/today-match/LogoSekolah/SMAN 1 GRESIK.png" alt="" />
                                    <h4>SMAN 1 GRESIK</h4>
                                    <span>Rizal (12')</span>
                                </div>
                                <div class="today-final-score">
                                    1 <span>-</span> 0
                                    <h4>final score</h4>
                                </div>
                                <div class="today-match-team">
                                    <img src="images/today-match/LogoSekolah/SMAN 2 LAMONGAN.png" alt="" />
                                    <h4>SMAN 2 LAMONGAN</h4>
                                    <span>-</span>
                                </div>
                            </div>
                            <div class="title-head">
                                <h4>Previous Results</h4>
                            </div>
                            <div class="recent-match-results">
                                <div class="single-result">
                                    <div class="team-result clearfix">
                                        <div class="text-left match-result-list single-part"><img class="result-img"
                                                src="images/today-match/LogoSekolah/SMAN 1 KEBOMAS.png"
                                                alt="">SMAN 1 KEBOMAS</div>
                                        <div class="text-center match-score single-part">
                                            <span class="score">4</span> - <span class="score">2</span>
                                        </div>
                                        <div class="text-left match-result-list single-part"><img class="result-img"
                                                src="images/today-match/LogoSekolah/SMAN 2 MOJOKERTO.jpg"
                                                alt="">SMAN 2 MOJOKERTO</div>
                                    </div>
                                </div>
                                <div class="single-result">
                                    <div class="team-result clearfix">
                                        <div class="text-left match-result-list single-part"><img class="result-img"
                                                src="images/today-match/LogoSekolah/SMK YPI DARUSSALAM 1 CERME.jpg"
                                                alt="">SMK YPI DARUSSALAM 1 CERME</div>
                                        <div class="text-center match-score single-part">
                                            <span class="score">7</span> - <span class="score">4</span>
                                        </div>
                                        <div class="text-left match-result-list single-part"><img class="result-img"
                                                src="images/today-match/LogoSekolah/SMAN 1 WRINGINANOM.jpg"
                                                alt="">SMAN 1 WRINGINANOM</div>
                                    </div>
                                </div>
                                <div class="single-result">
                                    <div class="team-result clearfix">
                                        <div class="text-left match-result-list single-part"><img class="result-img"
                                                src="images/today-match/LogoSekolah/SMAN 1 CERME.jpg"
                                                alt="">SMAN 1 CERME</div>
                                        <div class="text-center match-score single-part">
                                            <span class="score">Coming Soon</span>
                                        </div>
                                        <div class="text-left match-result-list single-part"><img class="result-img"
                                                src="images/today-match/LogoSekolah/SMA SEMEN GRESIK.jpg"
                                                alt="">SMA SEMEN GRESIK</div>
                                    </div>
                                </div>
                                <div class="view-all-result">
                                    <a href="{{ route('landing.result') }}">View All <i
                                            class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="separator-100"></div>
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-sm-8 col-xs-8 match-view-tite">
                            <h3 class="title-bg">Match fixture</h3>
                        </div>
                        <div class="col-sm-4 col-xs-4 text-right match-view-more">
                            <a class="view-more" href="#">View More <i class="fa fa-angle-double-right"
                                    aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="match-list mmb-45">
                                <div class="overly-bg"></div>
                                <table class="match-table">
                                    <tbody>
                                        <tr class="">
                                            <td class="medium-font">SMAN 1 GRESIK</td>
                                            <td class="big-font">VS</td>
                                            <td class="medium-font">SMAN 2 LAMONGAN</td>
                                            <td>Selasa, 22 Agustus 2023, 15:00 WIB</td>
                                            <td>GOR Tri Dharma PT Petrokimia Gresik</td>
                                        </tr>
                                        <tr>
                                            <td class="medium-font">SMAN 1 KEBOMAS</td>
                                            <td class="big-font">VS</td>
                                            <td class="medium-font">SMAN 2 MOJOKERTO</td>
                                            <td>Selasa, 22 Agustus 2023, 16:00 WIB</td>
                                            <td>GOR Tri Dharma PT Petrokimia Gresik</td>
                                        </tr>
                                        <tr>
                                            <td class="medium-font">SMK YPI DARUSSALAM 1 CERME</td>
                                            <td class="big-font">VS</td>
                                            <td class="medium-font">SMAN 1 WRINGINANOM</td>
                                            <td>Selasa, 22 Agustus 2023, 18:00 WIB</td>
                                            <td>GOR Tri Dharma PT Petrokimia Gresik</td>
                                        </tr>
                                        <tr>
                                            <td class="medium-font">SMAN 1 CERME</td>
                                            <td class="big-font">VS</td>
                                            <td class="medium-font">SMA SEMEN GRESIK</td>
                                            <td>Selasa, 22 Agustus 2023, 19:00 WIB</td>
                                            <td>GOR Tri Dharma PT Petrokimia Gresik</td>
                                        </tr>
                                        <tr>
                                            <td class="medium-font">SMKN 5 SURABAYA</td>
                                            <td class="big-font">VS</td>
                                            <td class="medium-font">SMK MANBAUL ULUM</td>
                                            <td>Rabu,23 Agustus 2023, 15:00 WIB</td>
                                            <td>GOR Tri Dharma PT Petrokimia Gresik</td>
                                        </tr>
                                        <tr>
                                            <td class="medium-font">SMA MUHAMMADIYAH 8 CERME</td>
                                            <td class="big-font">VS</td>
                                            <td class="medium-font">SMA NU2 GRESIK</td>
                                            <td>Rabu,23 Agustus 2023, 16:00 WIB</td>
                                            <td>GOR Tri Dharma PT Petrokimia Gresik</td>
                                        </tr>
                                        <tr>
                                            <td class="medium-font">SMA NEGERI 1 KRIAN</td>
                                            <td class="big-font">VS</td>
                                            <td class="medium-font">SMKN 1 CERME</td>
                                            <td>Rabu,23 Agustus 2023, 18:00 WIB</td>
                                            <td>GOR Tri Dharma PT Petrokimia Gresik</td>
                                        </tr>
                                        <tr>
                                            <td class="medium-font">SMK YASMU MANYAR</td>
                                            <td class="big-font">VS</td>
                                            <td class="medium-font">SMA NU 1 GRESIK</td>
                                            <td>Rabu,23 Agustus 2023, 19:00 WIB</td>
                                            <td>GOR Tri Dharma PT Petrokimia Gresik</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3 class="title-bg">Klasmen</h3>
                    <div class="point-list text-center">
                        <table class="point-table">
                            <tbody>
                                <tr>
                                    <td>Rank</td>
                                    <td class="country-name">Team</td>
                                    <td>W</td>
                                    <td>D</td>
                                    <td>L</td>
                                    <td>P</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>SMK YPI DARUSSALAM 1 CERME</td>
                                    <td>2</td>
                                    <td>1</td>
                                    <td>0</td>
                                    <td>7</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td class="country-name">SMAN 1 GRESIK</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>4</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td class="country-name">SMAN 2 LAMONGAN</td>
                                    <td>1</td>
                                    <td>0</td>
                                    <td>2</td>
                                    <td>3</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>SMAN 1 WRINGINANOM</td>
                                    <td>1</td>
                                    <td>0</td>
                                    <td>2</td>
                                    <td>3</td>
                                </tr>
                            </tbody>
                        </table>
                        <a class="view-more text-left" href="{{ route('landing.klasmen') }}">View
                            More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- All news area end Here-->

    <!-- Latest Video Start Here-->
    <div class="latest-video-section sec-spacer">
        <div class="overly-bg"></div>
        <div class="container">
            <h3 class="title-bg">Latest video</h3>
            <div class="row">
                <div class="col-md-8">
                    <div class="video-area mmb-40">
                        <img src="images/latest-video/video-pgfc.jpg" alt="Video" />
                        <div class="videos-icon">
                            <a class="popup-youtube" href="https://www.youtube.com/watch?v=05eusVamYiY">
                                <i class="fa fa-play" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 latest-news">
                    <div class="inner-news small-news">
                        <div class="news-img">
                            <a href="{{ route('landing.blog-single') }}"><img src="images/latest-video/latest1.png"
                                    alt="News" /></a>
                        </div>
                        <div class="news-text">
                            <h5><a href="{{ route('landing.blog-single') }}">Technical Meeting
                                    Petrokimia Gresik Futsal
                                    Championship (PGFC 2023)</a></h5>
                            <span class="date">Senin, 14 Agustus 2023</span>
                            <ul class="rating">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="inner-news small-news">
                        <div class="news-img">
                            <a href="{{ route('landing.blog-single') }}"><img src="images/latest-video/latest2.png"
                                    alt="News" /></a>
                        </div>
                        <div class="news-text">
                            <h5><a href="{{ route('landing.blog-single') }}">SMAN 1 GRESIK VS SMAN 2
                                    LAMONGAN</a></h5>
                            <span class="date">Selasa, 22 Agustus 2023</span>
                            <ul class="rating">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="inner-news small-news">
                        <div class="news-img">
                            <a href="{{ route('landing.blog-single') }}"><img src="images/latest-video/latest3.png"
                                    alt="News" /></a>
                        </div>
                        <div class="news-text">
                            <h5><a href="{{ route('landing.blog-single') }}">SMAN 1 KEBOMAS VS SMAN 2
                                    MOJOKERTO</a>
                            </h5>
                            <span class="date">Selasa, 22 Agustus 2023</span>
                            <ul class="rating">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Latest Video end Here-->

    <!-- Our Team Start Here-->
    <div class="our-team-section pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-8">
                    <h3 class="title-bg">Top players</h3>
                    <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30"
                        data-autoplay="true" data-autoplay-timeout="7000" data-smart-speed="2000" data-dots="false"
                        data-nav="false" data-nav-speed="false" data-mobile-device="1"
                        data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2"
                        data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2"
                        data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3"
                        data-md-device-nav="false" data-md-device-dots="false">
                        <div class="our-team">
                            <img src="images/team/top-player1.jpeg" alt="" />
                            <div class="person-details">
                                <div class="overly-bg"></div>
                                <a href="{{ route('landing.team-single') }}">
                                    <h5 class="person-name">M Ilham Noer</h5>
                                </a>
                                <table class="person-info">
                                    <tbody>
                                        <tr>
                                            <td>Sekolah</td>
                                            <td>SMK MANBAUL ULUM</td>
                                        </tr>
                                        <tr>
                                            <td>Posisi</td>
                                            <td>Defender</td>
                                        </tr>
                                        <tr>
                                            <td>Goals</td>
                                            <td>9 Goals</td>
                                        </tr>
                                        <tr>
                                            <td>Kelahiran</td>
                                            <td>05 Sep 2006</td>
                                        </tr>
                                        <tr>
                                            <td>Nomer</td>
                                            <td>5</td>

                                            {{-- AKUN SOSMED BISA DIPAKAI KALAU DIBUTUHKAN --}}
                                            {{-- <tr>
                                                <td>Fallow us on</td>
                                                <td>
                                                    <ul class="person-social-icons">
                                                        <li><a href="#" class="active"><i class="fa fa-facebook"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                                    </ul>
                                                </td>
                                            </tr> --}}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="our-team">
                            <img src="images/team/top-player2.png" alt="" />
                            <div class="person-details">
                                <div class="overly-bg"></div>
                                <a href="{{ route('landing.team-single') }}">
                                    <h5 class="person-name">Achmad Riza Afifuddin</h5>
                                </a>
                                <table class="person-info">
                                    <tbody>
                                        <tr>
                                            <td>Sekolah</td>
                                            <td>SMA ANTARTIKA SIDOARJO</td>
                                        </tr>
                                        <tr>
                                            <td>Posisi</td>
                                            <td>Forward</td>
                                        </tr>
                                        <tr>
                                            <td>Goals</td>
                                            <td>7 Goals</td>
                                        </tr>
                                        <tr>
                                            <td>Kelahiran</td>
                                            <td>05 Sep 2006</td>
                                        </tr>
                                        <tr>
                                            <td>Nomer</td>
                                            <td>3</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="our-team">
                            <img src="images/team/top-player3.jpeg" alt="" />
                            <div class="person-details">
                                <div class="overly-bg"></div>
                                <a href="{{ route('landing.team-single') }}">
                                    <h5 class="person-name">Cahya Ramadan</h5>
                                </a>
                                <table class="person-info">
                                    <tbody>
                                        <tr>
                                            <td>Sekolah</td>
                                            <td>SMAN 1 KEBOMAS</td>
                                        </tr>
                                        <tr>
                                            <td>Posisi</td>
                                            <td>Forward</td>
                                        </tr>
                                        <tr>
                                            <td>Goals</td>
                                            <td>7 Goals</td>
                                        </tr>
                                        <tr>
                                            <td>Kelahiran</td>
                                            <td>05 Sep 2006</td>
                                        </tr>
                                        <tr>
                                            <td>Nomer</td>
                                            <td>11</td>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="our-team">
                            <img src="images/team/top-player4.jpg" alt="" />
                            <div class="person-details">
                                <div class="overly-bg"></div>
                                <a href="{{ route('landing.team-single') }}">
                                    <h5 class="person-name">M Rasya Alfanorizkillah</h5>
                                </a>
                                <table class="person-info">
                                    <tbody>
                                        <tr>
                                            <td>Sekolah</td>
                                            <td>SMK SEMEN GRESIK</td>
                                        </tr>
                                        <tr>
                                            <td>Posisi</td>
                                            <td>Forward</td>
                                        </tr>
                                        <tr>
                                            <td>Goals</td>
                                            <td>6 Goals</td>
                                        </tr>
                                        <tr>
                                            <td>Kelahiran</td>
                                            <td>05 Sep 2006</td>
                                        </tr>
                                        <tr>
                                            <td>Nomer</td>
                                            <td>11</td>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="our-team">
                            <img src="images/team/top-player5.jpeg" alt="" />
                            <div class="person-details">
                                <div class="overly-bg"></div>
                                <a href="{{ route('landing.team-single') }}">
                                    <h5 class="person-name">Muhammad Irgi Maulana</h5>
                                </a>
                                <table class="person-info">
                                    <tbody>
                                        <tr>
                                            <td>Sekolah</td>
                                            <td>SMK YPI Darussalam Cerme</td>
                                        </tr>
                                        <tr>
                                            <td>Posisi</td>
                                            <td>Forward</td>
                                        </tr>
                                        <tr>
                                            <td>Goals</td>
                                            <td>6 Goals</td>
                                        </tr>
                                        <tr>
                                            <td>Kelahiran</td>
                                            <td>05 Sep 2006</td>
                                        </tr>
                                        <tr>
                                            <td>Nomer</td>
                                            <td>11</td>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="our-team">
                            <img src="images/team/top-player6.jpg" alt="" />
                            <div class="person-details">
                                <div class="overly-bg"></div>
                                <a href="{{ route('landing.team-single') }}">
                                    <h5 class="person-name">Abdur Rashid</h5>
                                </a>
                                <table class="person-info">
                                    <tbody>
                                        <tr>
                                            <td>Sekolah</td>
                                            <td>SMK MANBAUL ULUM</td>
                                        </tr>
                                        <tr>
                                            <td>Posisi</td>
                                            <td>Defender</td>
                                        </tr>
                                        <tr>
                                            <td>Goals</td>
                                            <td>9 Goals</td>
                                        </tr>
                                        <tr>
                                            <td>Kelahiran</td>
                                            <td>05 Sep 2006</td>
                                        </tr>
                                        <tr>
                                            <td>Nomer</td>
                                            <td>11</td>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="our-team">
                            <img src="images/team/top-player7.png" alt="" />
                            <div class="person-details">
                                <div class="overly-bg"></div>
                                <a href="{{ route('landing.team-single') }}">
                                    <h5 class="person-name">Moch.Iqbal Purnama</h5>
                                </a>
                                <table class="person-info">
                                    <tbody>
                                        <tr>
                                            <td>Sekolah</td>
                                            <td>SMKN 7 SURABAYA</td>
                                        </tr>
                                        <tr>
                                            <td>Posisi</td>
                                            <td>Midfielder</td>
                                        </tr>
                                        <tr>
                                            <td>Goals</td>
                                            <td>4 Goals</td>
                                        </tr>
                                        <tr>
                                            <td>Kelahiran</td>
                                            <td>05 Sep 2006</td>
                                        </tr>
                                        <tr>
                                            <td>Nomer</td>
                                            <td>11</td>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="our-team">
                            <img src="images/team/top-player8.jpg" alt="" />
                            <div class="person-details">
                                <div class="overly-bg"></div>
                                <a href="{{ route('landing.team-single') }}">
                                    <h5 class="person-name">Mahardyecka Trias Purnama</h5>
                                </a>
                                <table class="person-info">
                                    <tbody>
                                        <tr>
                                            <td>Sekolah</td>
                                            <td>SMA NEGERI 1 LAMONGAN</td>
                                        </tr>
                                        <tr>
                                            <td>Posisi</td>
                                            <td>Forward</td>
                                        </tr>
                                        <tr>
                                            <td>Goals</td>
                                            <td>3 Goals</td>
                                        </tr>
                                        <tr>
                                            <td>Kelahiran</td>
                                            <td>05 Sep 2006</td>
                                        </tr>
                                        <tr>
                                            <td>Nomer</td>
                                            <td>11</td>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="our-team">
                            <img src="images/team/top-player9.png" alt="" />
                            <div class="person-details">
                                <div class="overly-bg"></div>
                                <a href="{{ route('landing.team-single') }}">
                                    <h5 class="person-name">Ardhen Ilham Dwiswara</h5>
                                </a>
                                <table class="person-info">
                                    <tbody>
                                        <tr>
                                            <td>Sekolah</td>
                                            <td>SMA NEGERI 9 SURABAYA</td>
                                        </tr>
                                        <tr>
                                            <td>Posisi</td>
                                            <td>Defender</td>
                                        </tr>
                                        <tr>
                                            <td>Goals</td>
                                            <td>3 Goals</td>
                                        </tr>
                                        <tr>
                                            <td>Kelahiran</td>
                                            <td>05 Sep 2006</td>
                                        </tr>
                                        <tr>
                                            <td>Nomer</td>
                                            <td>11</td>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="our-team">
                            <img src="images/team/top-player10.jpg" alt="" />
                            <div class="person-details">
                                <div class="overly-bg"></div>
                                <a href="{{ route('landing.team-single') }}">
                                    <h5 class="person-name">Johan Adi Rangga</h5>
                                </a>
                                <table class="person-info">
                                    <tbody>
                                        <tr>
                                            <td>Sekolah</td>
                                            <td>SMAN 2 MOJOKERTO</td>
                                        </tr>
                                        <tr>
                                            <td>Posisi</td>
                                            <td>Forward</td>
                                        </tr>
                                        <tr>
                                            <td>Goals</td>
                                            <td>3 Goals</td>
                                        </tr>
                                        <tr>
                                            <td>Kelahiran</td>
                                            <td>05 Sep 2006</td>
                                        </tr>
                                        <tr>
                                            <td>Nomer</td>
                                            <td>11</td>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-4 best-player">
                    <h3 class="title-bg">Rank Top Player</h3>
                    <div class="best-footballer">
                        <h4 style="color: #fed422"><strong>Daftar 10 Pemain Terbaik PGFC 2023:</strong></h4>
                        <ul id="player-list">
                            <li>
                                <span>1. M Ilham Noer</span>
                            </li>
                            <li>
                                <span>2. Achmad Riza Afifuddin</span>
                            </li>
                            <li>
                                <span>3. Cahya Ramadan</span>
                            </li>
                            <li>
                                <span>4. M Rasya Alfanorizkillah</span>
                            </li>
                            <li>
                                <span>5. Muhammad Irgi Maulana</span>
                            </li>
                            <li>
                                <span>6. Abdur Rashid</span>
                            </li>
                            <li>
                                <span>7. Moch.Iqbal Purnama</span>
                            </li>
                            <li>
                                <span>8. Mahardyecka Trias Purnama</span>
                            </li>
                            <li>
                                <span>9. Ardhen Ilham Dwiswara</span>
                            </li>
                            <li>
                                <span>10. Johan Adi Rangga</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Team end Here-->

    <!-- Gallery Section Start Here-->
    <div class="gallery-section-area pb-70">
        <div class="container" id="grid">
            <h3 class="title-bg">match gallery</h3>
            <div id="gallery-items">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="single-gallery">
                            <img src="images/gallery2/gallery-list-1.jpg" alt="" />
                            <div class="heading-conent">
                                <h4>Photo Title Here</h4>
                            </div>
                            <div class="bottom-icons">
                                <ul>
                                    <li><a class="image-popup" href="images/gallery2/gallery-list-1.jpg">
                                        <i class="fa fa-power-off"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="single-gallery">
                            <img src="images/gallery2/gallery-list-2.jpg" alt="" />
                            <div class="heading-conent">
                                <h4>Photo Title Here</h4>
                            </div>
                            <div class="bottom-icons">
                                <ul>
                                    <li><a class="image-popup" href="images/gallery2/gallery-list-2.jpg">
                                        <i class="fa fa-power-off"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="single-gallery">
                            <img src="images/gallery2/gallery-list-3.jpg" alt="" />
                            <div class="heading-conent">
                                <h4>Photo Title Here</h4>
                            </div>
                            <div class="bottom-icons">
                                <ul>
                                    <li><a class="image-popup" href="images/gallery2/gallery-list-3.jpg">
                                        <i class="fa fa-power-off"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="single-gallery">
                            <img src="images/gallery2/gallery-list-4.jpg" alt="" />
                            <div class="heading-conent">
                                <h4>Photo Title Here</h4>
                            </div>
                            <div class="bottom-icons">
                                <ul>
                                    <li><a class="image-popup" href="images/gallery2/gallery-list-4.jpg">
                                        <i class="fa fa-power-off"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="single-gallery">
                            <img src="images/gallery2/gallery-list-5.jpg" alt="" />
                            <div class="heading-conent">
                                <h4>Photo Title Here</h4>
                            </div>
                            <div class="bottom-icons">
                                <ul>
                                    <li><a class="image-popup" href="images/gallery2/gallery-list-5.jpg">
                                        <i class="fa fa-power-off"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="single-gallery">
                            <img src="images/gallery2/gallery-list-6.jpg" alt="" />
                            <div class="heading-conent">
                                <h4>Photo Title Here</h4>
                            </div>
                            <div class="bottom-icons">
                                <ul>
                                    <li><a class="image-popup" href="images/gallery2/gallery-list-6.jpg">
                                        <i class="fa fa-power-off"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Gallery Section End Here-->

    <!-- Testimonials Sections Start Here-->
    <div class="testimonial-section pb-100">
        <div class="container">
            <h3 class="title-bg">Testimonials</h3>
            <div class="row">
                <div class="col-md-12">
                    <div id="testimonial-slider" class="rs-carousel owl-carousel" data-loop="true" data-items="1"
                        data-margin="0" data-autoplay="true" data-autoplay-timeout="6000" data-smart-speed="2000"
                        data-dots="false" data-nav="false" data-nav-speed="false" data-mobile-device="1"
                        data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="1"
                        data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="1"
                        data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="1"
                        data-md-device-nav="false" data-md-device-dots="false">
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
