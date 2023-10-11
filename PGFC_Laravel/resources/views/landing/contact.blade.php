<!doctype html>
<html class="no-js" lang="zxx">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>PGFC | Contact</title>
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
            <img src="images/breadcrumbs/contact.jpg" alt="Breadcrubs" />
            <div class="breadcrumbs-inner">
    			<div class="container">
    				<div class="row">
    					<div class="col-md-12 text-center">
    						<h1 class="page-title">Contact</h1>
    						<ul>
    							<li>
    								<a class="active" href="{{ route('index') }}">Home</a>
    							</li>
    							<li>Contact</li>
    						</ul>
    					</div>
    				</div>
    			</div>
            </div>
		</div>
		<!-- Breadcrumbs Section End -->


		<!-- Contact Section Start -->
		<div class="contact-page-section sec-spacer">
        	<div class="container">
        		<div id="googleMap"></div>
        		<div class="map-text">
        			<h3>Contact Info</h3>
        			<p>Hubungi kami</p>
        		</div>
        		<div class="row contact-address-section">
    				<div class="col-md-4 contact-pd">
    					<div class="contact-address">
    						<i class="fa fa-map-marker"></i>
    						<h4>Address</h4>
    						<p>Jl. A Yani Gresik</p>
    					</div>
    				</div>
    				<div class="col-md-4 contact-pd">
    					<div class="contact-phone">
    						<i class="fa fa-phone"></i>
    						<h4>Phone Number</h4>
    						<a href="tel:031-3981811">031-3981811 3982200</a>
    						<a href="tel:3982100">3982100</a>
    						<a href="tel:3982200">3982200</a>
    					</div>
    				</div>
    				<div class="col-md-4 contact-pd">
    					<div class="contact-email">
    						<i class="fa fa-envelope"></i>
    						<h4>Email Address</h4>
    						<a href="mailto:pgfc@petrokimia-gresik.com"><p>pgfc@petrokimia-gresik.com</p></a>
        				</div>
        			</div>
        		</div>

        		<div class="contact-comment-section">
        			<h3>Contact Form</h3>
                    <div id="form-message"></div>
					<form id="contact-form" method="post" action="https://keenitsolutions.com/products/html/soccer/mailer.php">
						<fieldset>
							<div class="row">                                      
								<div class="col-md-6 col-sm-6 col-xs-12">
									<div class="form-group">
										<label>First Name*</label>
										<input name="fname" id="fname" class="form-control" type="text">
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<div class="form-group">
										<label>Last Name*</label>
										<input name="lname" id="lname" class="form-control" type="text">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 col-sm-6 col-xs-12">
									<div class="form-group">
										<label>Email*</label>
										<input name="email" id="email" class="form-control" type="email">
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<div class="form-group">
										<label>Subject *</label>
										<input name="subject" id="subject" class="form-control" type="text">
									</div>
								</div>
							</div>
							<div class="row"> 
								<div class="col-md-12 col-sm-12 col-xs-12">    
									<div class="form-group">
										<label>Message *</label>
										<textarea cols="40" rows="10" id="message" name="message" class="textarea form-control"></textarea>
									</div>
								</div>
								<div class="col-md-12 col-sm-12 col-xs-12">         
									<div class="form-group mb-0">
										<input class="btn-send" type="submit" value="Submit Now">
									</div>
								</div>
							</div>    
						</fieldset>
					</form>						
        		</div>
        	</div>
        </div>
        <!-- Contact Section End -->
		                
		{{-- Sponsorship --}}
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
		<script src="js/jquery.min.js"></script>
		<!-- Menu js -->
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
        <!-- moogle map js -->
    <script src="{{ asset('https://maps.googleapis.com/maps/api/js?key=AIzaSyAgC6ZapXdUzFdeQOFhdm_wucwlDMMQ8CQ')}}"></script>
        <!-- contact popup form js -->
    <script src="{{ asset('js/contact.form.js')}}"></script>
		<!-- main js -->		<script src="{{ asset('js/main.js')}}"></script>
	</body>
</html>