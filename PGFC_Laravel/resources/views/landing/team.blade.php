<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Team | Soccer</title>
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
    <!-- Slick css -->
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <!-- Slick Theme css -->
    <link rel="stylesheet" href="{{ asset('css/slick-theme.css') }}">
    <!-- style css -->
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <!-- responsive css -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css')}}">
    <!-- modernizr js -->
    <script src="{{ asset('js/modernizr-2.8.3.min.js')}}"></script>
</head>

<body class="home-two">
    @include('components.navbar')

    <!-- Breadcrumbs Section Start -->
    <div class="rs-breadcrumbs sec-color">
        <img src="images/breadcrumbs/team.jpg" alt="Breadcrubs" />
        <div class="breadcrumbs-inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1 class="page-title">Our Team</h1>
                        <ul>
                            <li>
                                <a class="active" href="{{ route('index') }}">Home</a>
                            </li>
                            <li>Team</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs Section End -->

    <!-- Our Team Start Here-->
    <div class="our-team-section team-inner-page sec-spacer">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="our-team">
                        <img src="images/team/5.jpg" alt="" />
                        <div class="person-details">
                            <div class="overly-bg"></div>
                            <a href="{{ route('landing.team-single') }}">
                                <h5 class="person-name">Masud Rana</h5>
                            </a>
                            <table class="person-info">
                                <tbody>
                                    <tr>
                                        <td>Born</td>
                                        <td>sep 31, 1988</td>
                                    </tr>
                                    <tr>
                                        <td>Position</td>
                                        <td>striker</td>
                                    </tr>
                                    <tr>
                                        <td>Squad number</td>
                                        <td>11</td>
                                    </tr>
                                    <tr>
                                        <td>Previous Club</td>
                                        <td>Badda</td>
                                    </tr>
                                    <tr>
                                        <td>Fallow us on</td>
                                        <td>
                                            <ul class="person-social-icons">
                                                <li><a href="#" class="active"><i class="fa fa-facebook"></i></a>
                                                </li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin"
                                                            aria-hidden="true"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="our-team">
                        <img src="images/team/6.jpg" alt="" />
                        <div class="person-details">
                            <div class="overly-bg"></div>
                            <a href="{{ route('landing.team-single') }}">
                                <h5 class="person-name">Forhad Mondol</h5>
                            </a>
                            <table class="person-info">
                                <tbody>
                                    <tr>
                                        <td>Born</td>
                                        <td>sep 31, 1988</td>
                                    </tr>
                                    <tr>
                                        <td>Position</td>
                                        <td>striker</td>
                                    </tr>
                                    <tr>
                                        <td>Squad number</td>
                                        <td>11</td>
                                    </tr>
                                    <tr>
                                        <td>Previous Club</td>
                                        <td>Badda</td>
                                    </tr>
                                    <tr>
                                        <td>Fallow us on</td>
                                        <td>
                                            <ul class="person-social-icons">
                                                <li><a href="#" class="active"><i class="fa fa-facebook"></i></a>
                                                </li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin"
                                                            aria-hidden="true"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="our-team">
                        <img src="images/team/7.jpg" alt="" />
                        <div class="person-details">
                            <div class="overly-bg"></div>
                            <a href="{{ route('landing.team-single') }}">
                                <h5 class="person-name">Yeamin Hossen</h5>
                            </a>
                            <table class="person-info">
                                <tbody>
                                    <tr>
                                        <td>Born</td>
                                        <td>sep 31, 1988</td>
                                    </tr>
                                    <tr>
                                        <td>Position</td>
                                        <td>striker</td>
                                    </tr>
                                    <tr>
                                        <td>Squad number</td>
                                        <td>11</td>
                                    </tr>
                                    <tr>
                                        <td>Previous Club</td>
                                        <td>Badda</td>
                                    </tr>
                                    <tr>
                                        <td>Fallow us on</td>
                                        <td>
                                            <ul class="person-social-icons">
                                                <li><a href="#" class="active"><i class="fa fa-facebook"></i></a>
                                                </li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin"
                                                            aria-hidden="true"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="our-team">
                        <img src="images/team/8.jpg" alt="" />
                        <div class="person-details">
                            <div class="overly-bg"></div>
                            <a href="{{ route('landing.team-single') }}">
                                <h5 class="person-name">Kaium Bagra</h5>
                            </a>
                            <table class="person-info">
                                <tbody>
                                    <tr>
                                        <td>Born</td>
                                        <td>sep 31, 1988</td>
                                    </tr>
                                    <tr>
                                        <td>Position</td>
                                        <td>striker</td>
                                    </tr>
                                    <tr>
                                        <td>Squad number</td>
                                        <td>11</td>
                                    </tr>
                                    <tr>
                                        <td>Previous Club</td>
                                        <td>Badda</td>
                                    </tr>
                                    <tr>
                                        <td>Fallow us on</td>
                                        <td>
                                            <ul class="person-social-icons">
                                                <li><a href="#" class="active"><i
                                                            class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin"
                                                            aria-hidden="true"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="our-team">
                        <img src="images/team/9.jpg" alt="" />
                        <div class="person-details">
                            <div class="overly-bg"></div>
                            <a href="{{ route('landing.team-single') }}">
                                <h5 class="person-name">Sagor Mondol</h5>
                            </a>
                            <table class="person-info">
                                <tbody>
                                    <tr>
                                        <td>Born</td>
                                        <td>sep 31, 1988</td>
                                    </tr>
                                    <tr>
                                        <td>Position</td>
                                        <td>striker</td>
                                    </tr>
                                    <tr>
                                        <td>Squad number</td>
                                        <td>11</td>
                                    </tr>
                                    <tr>
                                        <td>Previous Club</td>
                                        <td>Badda</td>
                                    </tr>
                                    <tr>
                                        <td>Fallow us on</td>
                                        <td>
                                            <ul class="person-social-icons">
                                                <li><a href="#" class="active"><i
                                                            class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin"
                                                            aria-hidden="true"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="our-team">
                        <img src="images/team/10.jpg" alt="" />
                        <div class="person-details">
                            <div class="overly-bg"></div>
                            <a href="{{ route('landing.team-single') }}">
                                <h5 class="person-name">Naim Islam</h5>
                            </a>
                            <table class="person-info">
                                <tbody>
                                    <tr>
                                        <td>Born</td>
                                        <td>sep 31, 1988</td>
                                    </tr>
                                    <tr>
                                        <td>Position</td>
                                        <td>striker</td>
                                    </tr>
                                    <tr>
                                        <td>Squad number</td>
                                        <td>11</td>
                                    </tr>
                                    <tr>
                                        <td>Previous Club</td>
                                        <td>Badda</td>
                                    </tr>
                                    <tr>
                                        <td>Fallow us on</td>
                                        <td>
                                            <ul class="person-social-icons">
                                                <li><a href="#" class="active"><i
                                                            class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin"
                                                            aria-hidden="true"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="our-team">
                        <img src="images/team/11.jpg" alt="" />
                        <div class="person-details">
                            <div class="overly-bg"></div>
                            <a href="{{ route('landing.team-single') }}">
                                <h5 class="person-name">Riaz Sorkar</h5>
                            </a>
                            <table class="person-info">
                                <tbody>
                                    <tr>
                                        <td>Born</td>
                                        <td>sep 31, 1988</td>
                                    </tr>
                                    <tr>
                                        <td>Position</td>
                                        <td>striker</td>
                                    </tr>
                                    <tr>
                                        <td>Squad number</td>
                                        <td>11</td>
                                    </tr>
                                    <tr>
                                        <td>Previous Club</td>
                                        <td>Badda</td>
                                    </tr>
                                    <tr>
                                        <td>Fallow us on</td>
                                        <td>
                                            <ul class="person-social-icons">
                                                <li><a href="#" class="active"><i
                                                            class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin"
                                                            aria-hidden="true"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="our-team">
                        <img src="images/team/12.jpg" alt="" />
                        <div class="person-details">
                            <div class="overly-bg"></div>
                            <a href="{{ route('landing.team-single') }}">
                                <h5 class="person-name">Soikot Khan</h5>
                            </a>
                            <table class="person-info">
                                <tbody>
                                    <tr>
                                        <td>Born</td>
                                        <td>sep 31, 1988</td>
                                    </tr>
                                    <tr>
                                        <td>Position</td>
                                        <td>striker</td>
                                    </tr>
                                    <tr>
                                        <td>Squad number</td>
                                        <td>11</td>
                                    </tr>
                                    <tr>
                                        <td>Previous Club</td>
                                        <td>Badda</td>
                                    </tr>
                                    <tr>
                                        <td>Fallow us on</td>
                                        <td>
                                            <ul class="person-social-icons">
                                                <li><a href="#" class="active"><i
                                                            class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin"
                                                            aria-hidden="true"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="our-team">
                        <img src="images/team/13.jpg" alt="" />
                        <div class="person-details">
                            <div class="overly-bg"></div>
                            <a href="{{ route('landing.team-single') }}">
                                <h5 class="person-name">SM Sultan</h5>
                            </a>
                            <table class="person-info">
                                <tbody>
                                    <tr>
                                        <td>Born</td>
                                        <td>sep 31, 1988</td>
                                    </tr>
                                    <tr>
                                        <td>Position</td>
                                        <td>striker</td>
                                    </tr>
                                    <tr>
                                        <td>Squad number</td>
                                        <td>11</td>
                                    </tr>
                                    <tr>
                                        <td>Previous Club</td>
                                        <td>Badda</td>
                                    </tr>
                                    <tr>
                                        <td>Fallow us on</td>
                                        <td>
                                            <ul class="person-social-icons">
                                                <li><a href="#" class="active"><i
                                                            class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin"
                                                            aria-hidden="true"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="our-team">
                        <img src="images/team/14.jpg" alt="" />
                        <div class="person-details">
                            <div class="overly-bg"></div>
                            <a href="{{ route('landing.team-single') }}">
                                <h5 class="person-name">Anjelo Keain</h5>
                            </a>
                            <table class="person-info">
                                <tbody>
                                    <tr>
                                        <td>Born</td>
                                        <td>sep 31, 1988</td>
                                    </tr>
                                    <tr>
                                        <td>Position</td>
                                        <td>striker</td>
                                    </tr>
                                    <tr>
                                        <td>Squad number</td>
                                        <td>11</td>
                                    </tr>
                                    <tr>
                                        <td>Previous Club</td>
                                        <td>Badda</td>
                                    </tr>
                                    <tr>
                                        <td>Fallow us on</td>
                                        <td>
                                            <ul class="person-social-icons">
                                                <li><a href="#" class="active"><i
                                                            class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin"
                                                            aria-hidden="true"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="our-team">
                        <img src="images/team/15.jpg" alt="" />
                        <div class="person-details">
                            <div class="overly-bg"></div>
                            <a href="{{ route('landing.team-single') }}">
                                <h3 class="person-name">Sarian Mento</h3>
                            </a>
                            <table class="person-info">
                                <tbody>
                                    <tr>
                                        <td>Born</td>
                                        <td>sep 31, 1988</td>
                                    </tr>
                                    <tr>
                                        <td>Position</td>
                                        <td>striker</td>
                                    </tr>
                                    <tr>
                                        <td>Squad number</td>
                                        <td>11</td>
                                    </tr>
                                    <tr>
                                        <td>Previous Club</td>
                                        <td>Badda</td>
                                    </tr>
                                    <tr>
                                        <td>Fallow us on</td>
                                        <td>
                                            <ul class="person-social-icons">
                                                <li><a href="#" class="active"><i
                                                            class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin"
                                                            aria-hidden="true"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="our-team">
                        <img src="images/team/16.jpg" alt="" />
                        <div class="person-details">
                            <div class="overly-bg"></div>
                            <a href="{{ route('landing.team-single') }}">
                                <h5 class="person-name">Luis Massum</h5>
                            </a>
                            <table class="person-info">
                                <tbody>
                                    <tr>
                                        <td>Born</td>
                                        <td>sep 31, 1988</td>
                                    </tr>
                                    <tr>
                                        <td>Position</td>
                                        <td>striker</td>
                                    </tr>
                                    <tr>
                                        <td>Squad number</td>
                                        <td>11</td>
                                    </tr>
                                    <tr>
                                        <td>Previous Club</td>
                                        <td>Badda</td>
                                    </tr>
                                    <tr>
                                        <td>Fallow us on</td>
                                        <td>
                                            <ul class="person-social-icons">
                                                <li><a href="#" class="active"><i
                                                            class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin"
                                                            aria-hidden="true"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Team end Here-->

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
