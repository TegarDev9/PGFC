<!--Preloader start here-->
{{-- <div id="preloader">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
</div> --}}
<!--Preloader area end here-->

<!--Header area start here-->
<header>
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="header-top-left">
                        <ul>
                            <li><a href="mailto:pgfc@petrokimia-gresik.com"><i class="fa fa-envelope-o"
                                        aria-hidden="true"></i> pgfc@petrokimia-gresik.com</a></li>
                            {{-- <li><img src="{{ asset('images/logo/flag.jpg') }}" alt="Logo">
                                <a href="#">English 
                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </a>
                                <ul>
                                    <li><img src="{{ asset('images/logo/flag2.jpg') }}" alt="Logo"><a href="#">Japanese</a></li>
                                </ul> --}}
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="social-media-area">
                        <nav>
                            <ul>
                                <li><a href="https://twitter.com/petrogresik?lang=id" target="_blank" class="active"><i
                                            class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.facebook.com/PetrokimiaGresikOfficial" target="_blank"><i
                                            class="fa fa-facebook"></i></a></li>
                                <li><a href="https://www.youtube.com/@PGFCTV" target="_blank"><i class="fa fa-youtube"
                                            aria-hidden="true"></i></a></li>
                                <li><a href="https://www.instagram.com/petrofutsal/" target="_blank"><i
                                            class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li class="log"><a href="{{route('login')}}"><i class="fa fa-sign-in" aria-hidden="true"></i>
                                        Login</a></li>
                                <li class="sign"><a href="{{route('register')}}"><span>/</span> Sign Up</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-middle-area menu-sticky">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-12 col-xs-12 logo">
                    <a href="{{ route('index') }}"><img src="{{ asset('images/logo-pgfc.png') }}" alt="logo"
                            width="80" height="40"></a>
                </div>

                <div class="col-md-10 col-sm-12 col-xs-12 mobile-menu">
                    <div class="main-menu">
                        <a class="rs-menu-toggle"><i class="fa fa-bars"></i>Menu</a>
                        <nav class="rs-menu">
                            <ul class="nav-menu">
                                <!-- Home -->
                                <li><a href="{{ route('index') }}">Home</a>
                                <li>
                                    <a href="{{ route('landing.pgfc') }}">PGFC</a>
                                </li>
                                {{-- <li>
                                    <a href="{{ route('landing.details-club') }}">Details Club</a>
                                </li> --}}
                                <!-- Drop Down -->

                                <li class="menu-item-has-children">
                                    <a href="#">Pages</a>
                                    <ul class="sub-menu">
                                        {{-- <li><a href="{{ route('landing.about') }}">About</a></li> --}}
                                        <li><a href="{{ route('landing.competition') }}">Competition</a></li>
                                        {{-- <li class="menu-item-has-children"><a href="#">Team</a>
                                            <ul class="sub-menu">
                                                <li><a href="{{ route('landing.team') }}">Team</a></li>
                                                <li><a href="{{ route('landing.team-single') }}">Team Single</a></li>
                                            </ul>
                                        </li> --}}
                                        <li class="menu-item-has-children"><a href="#">Gallery</a>
                                            <ul class="sub-menu">
                                                <li><a href="{{ route('landing.gallery') }}">Gallery</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <!--End Icons -->

                                <li><a href="{{ route('landing.klasmen') }}">Klasmen</a></li>

                                <li class="menu-item-has-children"><a href="{{ route('landing.result') }}">Result</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('landing.result') }}">Result</a></li>
                                        <li><a href="{{ route('landing.result-single') }}">Result Single</a></li>
                                    </ul>
                                </li>

                                <li class="menu-item-has-children">
                                    <a href="#">News</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('landing.blog') }}">News</a></li>
                                        <li><a href="{{ route('landing.blog-single') }}">News Details</a></li>
                                    </ul>
                                </li>

                                <li><a href="{{ route('landing.contact') }}">Contact</a></li>
                            </ul>
                        </nav>
                        <!--Header Search Start  here-->
                        {{-- <div class="search">
                            <a class="rs-search" data-target=".search-modal" data-toggle="modal" href="#"><i class="fa fa-search"></i></a>
                        </div> --}}
                        <!--Header Search End  here-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!--Header area end here-->
