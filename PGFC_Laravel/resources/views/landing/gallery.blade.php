<!doctype html>
<html class="no-js" lang="zxx">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>PGFC | Gallery</title>
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
            <img src="images/petro-pgfc/11.jpg" alt="Breadcrubs" />
            <div class="breadcrumbs-inner">
    			<div class="container">
    				<div class="row">
    					<div class="col-md-12 text-center">
    						<h1 class="page-title">Match Gallery PGFC</h1>
    						<ul>
    							<li>
    								<a class="active" href="{{ route('index') }}">Home</a>
    							</li>
    							<li>Match Gallery PGFC</li>
    						</ul>
    					</div>
    				</div>
    			</div>
            </div>
		</div>
		<!-- Breadcrumbs Section End -->

        <!-- Gallery Section Start Here-->
        <div class="gallery-section-area pb-70 sec-spacer">
            <div class="container" id="grid">
                <h3 class="title-bg">Match Gallery PGFC</h3>
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