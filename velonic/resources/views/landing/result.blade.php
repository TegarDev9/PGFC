<!doctype html>
<html class="no-js" lang="zxx">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>PGFC | Result</title>
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
    						<h1 class="page-title">Result</h1>
    						<ul>
    							<li>
    								<a class="active" href="{{ route('index') }}">Home</a>
    							</li>
    							<li>Result</li>
    						</ul>
    					</div>
    				</div>
    			</div>
            </div>
		</div>
		<!-- Breadcrumbs Section End -->


        <!-- Point Table Section Start -->
        <div class="rs-result sec-spacer">
	        <div class="container">
	        	<ul class="point-menu text-center">
					<li class="active"><a data-toggle="tab" href="#GA">Grup A</a></li>
				  	<li><a data-toggle="tab" href="#GB">Grup B</a></li>
				  	<li><a data-toggle="tab" href="#GC">Grup C</a></li>
				  	<li><a data-toggle="tab" href="#GD">Grup D</a></li>
				  	<li><a data-toggle="tab" href="#GE">Grup E</a></li>
				  	<li><a data-toggle="tab" href="#GF">Grup F</a></li>
				  	<li><a data-toggle="tab" href="#GG">Grup G</a></li>
				  	<li><a data-toggle="tab" href="#GH">Grup H</a></li>
				</ul>

				<div class="tab-content team-result">
	        		<div class="overly-bg"></div>
				  	<div id="GA" class="tab-pane fade in active">
				    	<table>
				    		<tr class="single-result">
				    			<td class="team-name team1 text-center"><img class="result-img" src="images/today-match/LogoSekolah/SMAN 1 GRESIK.png">SMAN 1 GRESIK</td>
				    			<td class="text-center match-result"><span class="match-score">1 : 0</span></td>
				    			<td class="team-name team2 text-center">SMAN 2 LAMONGAN<img class="result-img" src="images/today-match/LogoSekolah/SMAN 2 LAMONGAN.png"></td>
				    			<td class="match-venu text-center"><span class="match-date">22 Agustus 2022 15:00 WIB</span> <span class="match-date">GOR Tri Dharma PT Petrokimia Gresik </span></td>
				    			<td class="view-statictics text-center"><a href="{{ route('landing.result-single') }}">View Statictics >></a> </td>
				    		</tr>    			
				    	</table>
				  	</div>
				  	<div id="GB" class="tab-pane fade">
				    	<table>
							<tr class="single-result">
				    			<td class="team-name team1 text-center"><img class="result-img" src="images/today-match/LogoSekolah/SMAN 1 GRESIK.png">SMAN 1 GRESIK</td>
				    			<td class="text-center match-result"><span class="match-score">1 : 0</span></td>
				    			<td class="team-name team2 text-center">SMAN 2 LAMONGAN<img class="result-img" src="images/today-match/LogoSekolah/SMAN 2 LAMONGAN.png"></td>
				    			<td class="match-venu text-center"><span class="match-date">22 Agustus 2022 15:00 WIB</span> <span class="match-date">GOR Tri Dharma PT Petrokimia Gresik </span></td>
				    			<td class="view-statictics text-center"><a href="{{ route('landing.result-single') }}">View Statictics >></a> </td>
				    		</tr> 
				    	</table>
				  	</div>
				  	<div id="GC" class="tab-pane fade">
				    	<table>
				    		<tr class="single-result">
				    			<td class="team-name team1 text-center"><img class="result-img" src="images/today-match/LogoSekolah/SMAN 1 GRESIK.png">SMAN 1 GRESIK</td>
				    			<td class="text-center match-result"><span class="match-score">1 : 0</span></td>
				    			<td class="team-name team2 text-center">SMAN 2 LAMONGAN<img class="result-img" src="images/today-match/LogoSekolah/SMAN 2 LAMONGAN.png"></td>
				    			<td class="match-venu text-center"><span class="match-date">22 Agustus 2022 15:00 WIB</span> <span class="match-date">GOR Tri Dharma PT Petrokimia Gresik </span></td>
				    			<td class="view-statictics text-center"><a href="{{ route('landing.result-single') }}">View Statictics >></a> </td>
				    		</tr>  			
				    	</table>
				  	</div>
				  	<div id="GD" class="tab-pane fade">
				    	<table>
				    		<tr class="single-result">
				    			<td class="team-name team1 text-center"><img class="result-img" src="images/today-match/LogoSekolah/SMAN 1 GRESIK.png">SMAN 1 GRESIK</td>
				    			<td class="text-center match-result"><span class="match-score">1 : 0</span></td>
				    			<td class="team-name team2 text-center">SMAN 2 LAMONGAN<img class="result-img" src="images/today-match/LogoSekolah/SMAN 2 LAMONGAN.png"></td>
				    			<td class="match-venu text-center"><span class="match-date">22 Agustus 2022 15:00 WIB</span> <span class="match-date">GOR Tri Dharma PT Petrokimia Gresik </span></td>
				    			<td class="view-statictics text-center"><a href="{{ route('landing.result-single') }}">View Statictics >></a> </td>
				    		</tr>    			
				    	</table>
				  	</div>
				  	<div id="GE" class="tab-pane fade">
				    	<table>
				    		<tr class="single-result">
				    			<td class="team-name team1 text-center"><img class="result-img" src="images/today-match/LogoSekolah/SMAN 1 GRESIK.png">SMAN 1 GRESIK</td>
				    			<td class="text-center match-result"><span class="match-score">1 : 0</span></td>
				    			<td class="team-name team2 text-center">SMAN 2 LAMONGAN<img class="result-img" src="images/today-match/LogoSekolah/SMAN 2 LAMONGAN.png"></td>
				    			<td class="match-venu text-center"><span class="match-date">22 Agustus 2022 15:00 WIB</span> <span class="match-date">GOR Tri Dharma PT Petrokimia Gresik </span></td>
				    			<td class="view-statictics text-center"><a href="{{ route('landing.result-single') }}">View Statictics >></a> </td>
				    		</tr>     			
				    	</table>
				  	</div>
				  	<div id="GF" class="tab-pane fade">
				    	<table>
				    		<tr class="single-result">
				    			<td class="team-name team1 text-center"><img class="result-img" src="images/today-match/LogoSekolah/SMAN 1 GRESIK.png">SMAN 1 GRESIK</td>
				    			<td class="text-center match-result"><span class="match-score">1 : 0</span></td>
				    			<td class="team-name team2 text-center">SMAN 2 LAMONGAN<img class="result-img" src="images/today-match/LogoSekolah/SMAN 2 LAMONGAN.png"></td>
				    			<td class="match-venu text-center"><span class="match-date">22 Agustus 2022 15:00 WIB</span> <span class="match-date">GOR Tri Dharma PT Petrokimia Gresik </span></td>
				    			<td class="view-statictics text-center"><a href="{{ route('landing.result-single') }}">View Statictics >></a> </td>
				    		</tr>     			
				    	</table>
				  	</div>
				  	<div id="GG" class="tab-pane fade">
				    	<table>
				    		<tr class="single-result">
				    			<td class="team-name team1 text-center"><img class="result-img" src="images/today-match/LogoSekolah/SMAN 1 GRESIK.png">SMAN 1 GRESIK</td>
				    			<td class="text-center match-result"><span class="match-score">1 : 0</span></td>
				    			<td class="team-name team2 text-center">SMAN 2 LAMONGAN<img class="result-img" src="images/today-match/LogoSekolah/SMAN 2 LAMONGAN.png"></td>
				    			<td class="match-venu text-center"><span class="match-date">22 Agustus 2022 15:00 WIB</span> <span class="match-date">GOR Tri Dharma PT Petrokimia Gresik </span></td>
				    			<td class="view-statictics text-center"><a href="{{ route('landing.result-single') }}">View Statictics >></a> </td>
				    		</tr>     			
				    	</table>
				  	</div>
				  	<div id="GH" class="tab-pane fade">
				    	<table>
				    		<tr class="single-result">
				    			<td class="team-name team1 text-center"><img class="result-img" src="images/today-match/LogoSekolah/SMAN 1 GRESIK.png">SMAN 1 GRESIK</td>
				    			<td class="text-center match-result"><span class="match-score">1 : 0</span></td>
				    			<td class="team-name team2 text-center">SMAN 2 LAMONGAN<img class="result-img" src="images/today-match/LogoSekolah/SMAN 2 LAMONGAN.png"></td>
				    			<td class="match-venu text-center"><span class="match-date">22 Agustus 2022 15:00 WIB</span> <span class="match-date">GOR Tri Dharma PT Petrokimia Gresik </span></td>
				    			<td class="view-statictics text-center"><a href="{{ route('landing.result-single') }}">View Statictics >></a> </td>
				    		</tr>     			
				    	</table>
				  	</div>
				</div>
			</div>
        </div>
        <!-- Point Table Section End -->

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