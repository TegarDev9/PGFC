<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>PGFC | Poin Table</title>
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
		<script src="{{ asset('js/modernizr-2.8.3.min.js')}}"></script>
</head>

<body class="home-two">
    @include('components.navbar')

    <!-- Breadcrumbs Section Start -->
    <div class="rs-breadcrumbs sec-color">
        <img src="images/breadcrumbs/point-table.jpg" alt="Breadcrubs" />
        <div class="breadcrumbs-inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1 class="page-title">Klasmen</h1>
                        <ul>
                            <li>
                                <a class="active" href="{{ route('index') }}">Home</a>
                            </li>
                            <li>Klasmen</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs Section End -->


    <!-- Klasmen Section Start -->
    <div class="rs-point-table sec-spacer">
        <div class="container">
            <ul class="point-menu">
                <li class="active"><a data-toggle="tab" href="#A">Group A</a></li>
                <li><a data-toggle="tab" href="#B">Group B</a></li>
                <li><a data-toggle="tab" href="#C">Group C</a></li>
                <li><a data-toggle="tab" href="#D">Group D</a></li>
                <li><a data-toggle="tab" href="#E">Group E</a></li>
                <li><a data-toggle="tab" href="#F">Group F</a></li>
                <li><a data-toggle="tab" href="#G">Group G</a></li>
                <li><a data-toggle="tab" href="#H">Group H</a></li>
            </ul>

            <div class="tab-content">
                <div id="A" class="tab-pane fade in active">
                    <table>
                        <tr>
                            <td>Rank</td>
                            <td class="team-name">Tim</td>
                            <td>Main</td>
                            <td>Menang</td>
                            <td>Seri</td>
                            <td>Kalah</td>
                            <td>GM</td>
                            <td>GK</td>
                            <td>GD</td>
                            <td>Point</td>
                        </tr>
                        <tr>
                            <td>01</td>
                            <td class="team-name">SMK YPI DARUSSALAM 1 CERME</td>
                            <td>3</td>
                            <td>2</td>
                            <td>1</td>
                            <td>0</td>
                            <td>11</td>
                            <td>6</td>
                            <td>5</td>
                            <td>7</td>
                        </tr>
                        <tr>
                            <td>02</td>
                            <td class="team-name">SMAN 1 GRESIK</td>
                            <td>3</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>5</td>
                            <td>6</td>
                            <td>-1</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td>03</td>
                            <td class="team-name">SMAN 2 LAMONGAN</td>
                            <td>3</td>
                            <td>1</td>
                            <td>0</td>
                            <td>2</td>
                            <td>4</td>
                            <td>4</td>
                            <td>0</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>04</td>
                            <td class="team-name">SMAN 1 WRINGINANOM</td>
                            <td>3</td>
                            <td>1</td>
                            <td>0</td>
                            <td>2</td>
                            <td>9</td>
                            <td>13</td>
                            <td>-4</td>
                            <td>3</td>
                        </tr>
                    </table>
                </div>
                <div id="B" class="tab-pane fade">
                    <table>
                        <tr>
                            <td>Rank</td>
                            <td class="team-name">Tim</td>
                            <td>Main</td>
                            <td>Menang</td>
                            <td>Seri</td>
                            <td>Kalah</td>
                            <td>GM</td>
                            <td>GK</td>
                            <td>GD</td>
                            <td>Point</td>
                        </tr>
                        <tr>
                            <td>01</td>
                            <td class="team-name">SMAN 1 KEBOMAS</td>
                            <td>3</td>
                            <td>3</td>
                            <td>0</td>
                            <td>0</td>
                            <td>10</td>
                            <td>2</td>
                            <td>8</td>
                            <td>9</td>
                        </tr>
                        <tr>
                            <td>02</td>
                            <td class="team-name">SMAN 2 MOJOKERTO</td>
                            <td>3</td>
                            <td>2</td>
                            <td>0</td>
                            <td>1</td>
                            <td>11</td>
                            <td>6</td>
                            <td>5</td>
                            <td>6</td>
                        </tr>
                        <tr>
                            <td>03</td>
                            <td class="team-name">SMAN 1 CERME</td>
                            <td>3</td>
                            <td>1</td>
                            <td>0</td>
                            <td>2</td>
                            <td>3</td>
                            <td>6</td>
                            <td>-3</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>04</td>
                            <td class="team-name">SMA SEMEN GRESIK</td>
                            <td>3</td>
                            <td>0</td>
                            <td>0</td>
                            <td>3</td>
                            <td>2</td>
                            <td>12</td>
                            <td>-10</td>
                            <td>0</td>
                        </tr>
                    </table>
                </div>
                <div id="C" class="tab-pane fade">
                    <table>
                        <tr>
                            <td>Rank</td>
                            <td class="team-name">Tim</td>
                            <td>Main</td>
                            <td>Menang</td>
                            <td>Seri</td>
                            <td>Kalah</td>
                            <td>GM</td>
                            <td>GK</td>
                            <td>GD</td>
                            <td>Point</td>
                        </tr>
                        <tr>
                            <td>01</td>
                            <td class="team-name">SMA MUHAMMADIYAH 8 CERME</td>
                            <td>2</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td>15</td>
                            <td>0</td>
                            <td>15</td>
                            <td>6</td>
                        </tr>
                        <tr>
                            <td>02</td>
                            <td class="team-name">SMKN 5 SURABAYA</td>
                            <td>2</td>
                            <td>1</td>
                            <td>0</td>
                            <td>1</td>
                            <td>3</td>
                            <td>4</td>
                            <td>-1</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>03</td>
                            <td class="team-name">SMK MANBAUL ULUM</td>
                            <td>2</td>
                            <td>1</td>
                            <td>0</td>
                            <td>1</td>
                            <td>18</td>
                            <td>3</td>
                            <td>15</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>04</td>
                            <td class="team-name">SMA NU2 GRESIK</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td>2</td>
                            <td>0</td>
                            <td>29</td>
                            <td>-29</td>
                            <td>0</td>
                        </tr>
                    </table>
                </div>
                <div id="D" class="tab-pane fade">
                    <table>
                        <tr>
                            <td>Rank</td>
                            <td class="team-name">Tim</td>
                            <td>Main</td>
                            <td>Menang</td>
                            <td>Seri</td>
                            <td>Kalah</td>
                            <td>GM</td>
                            <td>GK</td>
                            <td>GD</td>
                            <td>Point</td>
                        </tr>
                        <tr>
                            <td>01</td>
                            <td class="team-name">SMA NEGERI 1 KRIAN</td>
                            <td>3</td>
                            <td>3</td>
                            <td>0</td>
                            <td>0</td>
                            <td>9</td>
                            <td>2</td>
                            <td>7</td>
                            <td>9</td>
                        </tr>
                        <tr>
                            <td>02</td>
                            <td class="team-name">SMA NU 1 GRESIK</td>
                            <td>3</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>2</td>
                            <td>4</td>
                            <td>-2</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td>03</td>
                            <td class="team-name">SMKN 1 CERME</td>
                            <td>3</td>
                            <td>1</td>
                            <td>0</td>
                            <td>2</td>
                            <td>2</td>
                            <td>5</td>
                            <td>-3</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>04</td>
                            <td class="team-name">SMK YASMU MANYAR</td>
                            <td>3</td>
                            <td>0</td>
                            <td>1</td>
                            <td>2</td>
                            <td>4</td>
                            <td>6</td>
                            <td>-2</td>
                            <td>1</td>
                        </tr>
                    </table>
                </div>
                <div id="E" class="tab-pane fade">
                    <table>
                        <tr>
                            <td>Rank</td>
                            <td class="team-name">Tim</td>
                            <td>Main</td>
                            <td>Menang</td>
                            <td>Seri</td>
                            <td>Kalah</td>
                            <td>GM</td>
                            <td>GK</td>
                            <td>GD</td>
                            <td>Point</td>
                        </tr>
                        <tr>
                            <td>01</td>
                            <td class="team-name">SMAN 1 MENGANTI</td>
                            <td>3</td>
                            <td>2</td>
                            <td>1</td>
                            <td>0</td>
                            <td>8</td>
                            <td>3</td>
                            <td>5</td>
                            <td>7</td>
                        </tr>
                        <tr>
                            <td>02</td>
                            <td class="team-name">SMK SEMEN GRESIK</td>
                            <td>3</td>
                            <td>2</td>
                            <td>0</td>
                            <td>1</td>
                            <td>4</td>
                            <td>5</td>
                            <td>-1</td>
                            <td>6</td>
                        </tr>
                        <tr>
                            <td>03</td>
                            <td class="team-name">SMAN 1 PURI</td>
                            <td>3</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>4</td>
                            <td>4</td>
                            <td>0</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td>04</td>
                            <td class="team-name">MA YKUI MASKUMAMBANG</td>
                            <td>3</td>
                            <td>0</td>
                            <td>0</td>
                            <td>3</td>
                            <td>2</td>
                            <td>5</td>
                            <td>-4</td>
                            <td>0</td>
                        </tr>
                    </table>
                </div>
                <div id="F" class="tab-pane fade">
                    <table>
                        <tr>
                            <td>Rank</td>
                            <td class="team-name">Tim</td>
                            <td>Main</td>
                            <td>Menang</td>
                            <td>Seri</td>
                            <td>Kalah</td>
                            <td>GM</td>
                            <td>GK</td>
                            <td>GD</td>
                            <td>Point</td>
                        </tr>
                        <tr>
                            <td>01</td>
                            <td class="team-name">SMAN 1 DRIYOREJO</td>
                            <td>3</td>
                            <td>2</td>
                            <td>1</td>
                            <td>0</td>
                            <td>5</td>
                            <td>3</td>
                            <td>2</td>
                            <td>7</td>
                        </tr>
                        <tr>
                            <td>02</td>
                            <td class="team-name">SMAN 1 MANYAR</td>
                            <td>3</td>
                            <td>2</td>
                            <td>0</td>
                            <td>1</td>
                            <td>5</td>
                            <td>2</td>
                            <td>3</td>
                            <td>6</td>
                        </tr>
                        <tr>
                            <td>03</td>
                            <td class="team-name">SMK PGRI 1 GRESIK</td>
                            <td>3</td>
                            <td>1</td>
                            <td>0</td>
                            <td>2</td>
                            <td>4</td>
                            <td>3</td>
                            <td>1</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>04</td>
                            <td class="team-name">MAN 1 GRESIK</td>
                            <td>3</td>
                            <td>0</td>
                            <td>1</td>
                            <td>2</td>
                            <td>5</td>
                            <td>0</td>
                            <td>-5</td>
                            <td>1</td>
                        </tr>
                    </table>
                </div>
                <div id="G" class="tab-pane fade">
                    <table>
                        <tr>
                            <td>Rank</td>
                            <td class="team-name">Tim</td>
                            <td>Main</td>
                            <td>Menang</td>
                            <td>Seri</td>
                            <td>Kalah</td>
                            <td>GM</td>
                            <td>GK</td>
                            <td>GD</td>
                            <td>Point</td>
                        </tr>
                        <tr>
                            <td>01</td>
                            <td class="team-name">SMA NEGERI 1 LAMONGAN</td>
                            <td>3</td>
                            <td>3</td>
                            <td>0</td>
                            <td>0</td>
                            <td>14</td>
                            <td>2</td>
                            <td>12</td>
                            <td>9</td>
                        </tr>
                        <tr>
                            <td>02</td>
                            <td class="team-name">SMKN 7 SURABAYA</td>
                            <td>3</td>
                            <td>2</td>
                            <td>0</td>
                            <td>1</td>
                            <td>13</td>
                            <td>7</td>
                            <td>6</td>
                            <td>6</td>
                        </tr>
                        <tr>
                            <td>03</td>
                            <td class="team-name">SMA MUHAMMADIYAH 10 GKB GRESIK</td>
                            <td>3</td>
                            <td>0</td>
                            <td>2</td>
                            <td>1</td>
                            <td>4</td>
                            <td>20</td>
                            <td>-16</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>04</td>
                            <td class="team-name">SMA NEGERI 1 BABAT</td>
                            <td>3</td>
                            <td>0</td>
                            <td>2</td>
                            <td>1</td>
                            <td>7</td>
                            <td>9</td>
                            <td>-2</td>
                            <td>2</td>
                        </tr>
                    </table>
                </div>
                <div id="H" class="tab-pane fade">
                    <table>
                        <tr>
                            <td>Rank</td>
                            <td class="team-name">Tim</td>
                            <td>Main</td>
                            <td>Menang</td>
                            <td>Seri</td>
                            <td>Kalah</td>
                            <td>GM</td>
                            <td>GK</td>
                            <td>GD</td>
                            <td>Point</td>
                        </tr>
                        <tr>
                            <td>01</td>
                            <td class="team-name">SMA NEGERI 9 SURABAYA</td>
                            <td>4</td>
                            <td>4</td>
                            <td>0</td>
                            <td>0</td>
                            <td>7</td>
                            <td>0</td>
                            <td>7</td>
                            <td>12</td>
                        </tr>
                        <tr>
                            <td>02</td>
                            <td class="team-name">SMA ANTARTIKA SIDOARJO</td>
                            <td>3</td>
                            <td>2</td>
                            <td>0</td>
                            <td>1</td>
                            <td>14</td>
                            <td>4</td>
                            <td>10</td>
                            <td>12</td>
                        </tr>
                        <tr>
                            <td>03</td>
                            <td class="team-name">SMA MUHAMMADIYAH 1 GRESIK</td>
                            <td>3</td>
                            <td>1</td>
                            <td>0</td>
                            <td>2</td>
                            <td>3</td>
                            <td>6</td>
                            <td>-3</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>04</td>
                            <td class="team-name">SMA NEGERI 1 SIDAYU</td>
                            <td>4</td>
                            <td>0</td>
                            <td>0</td>
                            <td>4</td>
                            <td>0</td>
                            <td>14</td>
                            <td>-14</td>
                            <td>0</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Klasmen Section End -->

    <!-- Sponsorhip-->
    @include('components.sponsorship')

    {{-- footer --}}
    @include('components.footer')

    <!-- Search Modal Start Here -->
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
    <!-- Search Modal End Here -->

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
    <!-- magnific-popup js -->
    <script src="{{ asset('js/jquery.magnific-popup.js')}}"></script>
    <!-- jquery.counterup js -->
    <script src="{{ asset('js/jquery.counterup.min.js')}}"></script>
    <script src="{{ asset('js/waypoints.min.js')}}"></script>
    <!-- main js -->
    <script src="{{ asset('js/main.js')}}"></script>
</body>

</html>
