﻿<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]>
<!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>

    <!-- Basic Page Needs
	================================================== -->
    <meta charset="utf-8">
    <title>Thalia</title>
    <meta name="description" content="Professional Creative Template" />
    <meta name="author" content="IG Design">
    <meta name="keywords"
        content="ig design, website, design, html5, css3, jquery, creative, clean, animated, portfolio, blog, one-page, multi-page, corporate, business," />
    <meta property="og:title" content="Professional Creative Template" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
    <meta property="og:image:width" content="470" />
    <meta property="og:image:height" content="246" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="Professional Creative Template" />
    <meta name="twitter:card" content="" />
    <meta name="twitter:site" content="https://twitter.com/IvanGrozdic" />
    <meta name="twitter:domain" content="http://ivang-design.com/" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:description" content="Professional Creative Template" />
    <meta name="twitter:image" content="http://ivang-design.com/" />

    <!-- Mobile Specific Metas
	================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="theme-color" content="#212121" />
    <meta name="msapplication-navbutton-color" content="#212121" />
    <meta name="apple-mobile-web-app-status-bar-style" content="#212121" />

    <!-- Web Fonts 
	================================================== -->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
        rel="stylesheet">

    <!-- CSS
	================================================== -->
    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{url('css/font-awesome.min.css')}}" />
    <link rel="stylesheet" href="{{url('css/ionicons.min.css')}}" />
    <link rel="stylesheet" href="{{url('css/datepicker.css')}}" />
    <link rel="stylesheet" href="{{url('css/jquery.fancybox.min.css')}}" />
    <link rel="stylesheet" href="{{url('css/owl.carousel.css')}}" />
    <link rel="stylesheet" href="{{url('css/owl.transitions.css')}}" />
    <link rel="stylesheet" href="{{url('css/style.css')}}" />
    <link rel="stylesheet" href="{{url('css/colors/color.css')}}" />

    <!-- Favicons
	================================================== -->
    <link rel="icon" type="image/png" href="favicon.png">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png">


</head>

<body>

    <div class="loader">
        <div class="loader__figure"></div>
    </div>

    <svg class="hidden">
        <svg id="icon-nav" viewBox="0 0 152 63">
            <title>navarrow</title>
            <path
                d="M115.737 29L92.77 6.283c-.932-.92-1.21-2.84-.617-4.281.594-1.443 1.837-1.862 2.765-.953l28.429 28.116c.574.57.925 1.557.925 2.619 0 1.06-.351 2.046-.925 2.616l-28.43 28.114c-.336.327-.707.486-1.074.486-.659 0-1.307-.509-1.69-1.437-.593-1.442-.315-3.362.617-4.284L115.299 35H3.442C2.032 35 .89 33.656.89 32c0-1.658 1.143-3 2.552-3H115.737z" />
        </svg>
    </svg>


    <!-- Nav and Logo
	================================================== -->

    <nav id="menu-wrap" class="menu-back cbp-af-header">
        <div class="menu-top background-black">
            <div class="container">
                <div class="row">
                    <div class="col-6 px-0 px-md-3 pl-1 py-3">
                        <span class="call-top">call us:</span> <a href="#" class="call-top">085270676454</a>
                    </div>
                    <div class="col-6 px-0 px-md-3 py-3 text-right">
                        @if (Auth()->check())
                        <a href="{{ route('create.homestay') }}" class="social-top">Create Homestay</a>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                            class="social-top">Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                        @else
                        <a href="{{ route('login') }}" class="social-top">Login</a>
                        @endif
                    </div>
                </div>

            </div>
        </div>
        <div class="menu">
            <a href="index.html">
                <div class="logo">
                    <img src="img/logo.png" alt="">
                </div>
            </a>
            <ul>
                <li>
                    <a href="/">Home</a>
                </li>
                <li>
                    <a href="#">room</a>
                </li>
                <li>
                    <a href="#">about us</a>
                </li>
                <li>
                    <a class="curent-page" href="#">news</a>
                </li>
                <li>
                    <a href="#">contact</a>
                </li>
                <li>
                    <a href="#"><span>book now</span></a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Primary Page Layout
	================================================== -->

    <div class="section big-55-height over-hide z-bigger">

        <div class="parallax parallax-top" style="background-image: url('img/explore.jpg')"></div>
        <div class="dark-over-pages"></div>

        <div class="hero-center-section pages">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 parallax-fade-top">
                        <div class="hero-text">Our News</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section padding-top padding-bottom-smaller z-bigger background-grey">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="subtitle with-line text-center mb-4">journal</div>
                    <h3 class="text-center padding-bottom-small">latest news</h3>
                </div>
                <div class="section clearfix"></div>
                <div class="col-md-6 col-xl-4">
                    <div class="room-box background-white">
                        <img src="img/blog/1.jpg" alt="">
                        <div class="room-box-in">
                            <h6 class="">WE WANT TO SHARE WITH YOU OUR MOOD</h6>
                            <p class="mt-3">Sed ut perspiciatis unde omnis, totam rem aperiam, eaque ipsa quae ab illo
                                inventore veritatis et.</p>
                            <a class="mt-1 btn btn-primary" href="post.html">read more</a>
                            <div class="room-icons news-tags mt-4 pt-4">
                                <a href="#">luxury</a>
                                <a href="#">vacation</a>
                                <a href="#">travel</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 mt-4 mt-md-0">
                    <div class="room-box background-white">
                        <img src="img/blog/2.jpg" alt="">
                        <div class="room-box-in">
                            <h6 class="">SLEEP, CODE, EAT, TRAVEL. REPEAT.</h6>
                            <p class="mt-3">Sed ut perspiciatis unde omnis, totam rem aperiam, eaque ipsa quae ab illo
                                inventore veritatis et.</p>
                            <a class="mt-1 btn btn-primary" href="post.html">read more</a>
                            <div class="room-icons news-tags mt-4 pt-4">
                                <a href="#">luxury</a>
                                <a href="#">vacation</a>
                                <a href="#">travel</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 mt-4 mt-xl-0">
                    <div class="room-box background-white">
                        <img src="img/blog/3.jpg" alt="">
                        <div class="room-box-in">
                            <h6 class="">THE GOLDEN RULE OF WEBDESIGN.</h6>
                            <p class="mt-3">Sed ut perspiciatis unde omnis, totam rem aperiam, eaque ipsa quae ab illo
                                inventore veritatis et.</p>
                            <a class="mt-1 btn btn-primary" href="post.html">read more</a>
                            <div class="room-icons news-tags mt-4 pt-4">
                                <a href="#">luxury</a>
                                <a href="#">vacation</a>
                                <a href="#">travel</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 mt-4">
                    <div class="room-box background-white">
                        <img src="img/blog/4.jpg" alt="">
                        <div class="room-box-in">
                            <h6 class="">PRETTY MUCH HOW YOU'LL SEE IT.</h6>
                            <p class="mt-3">Sed ut perspiciatis unde omnis, totam rem aperiam, eaque ipsa quae ab illo
                                inventore veritatis et.</p>
                            <a class="mt-1 btn btn-primary" href="post.html">read more</a>
                            <div class="room-icons news-tags mt-4 pt-4">
                                <a href="#">luxury</a>
                                <a href="#">vacation</a>
                                <a href="#">travel</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 mt-4">
                    <div class="room-box background-white">
                        <img src="img/blog/5.jpg" alt="">
                        <div class="room-box-in">
                            <h6 class="">FORM AND CONTENT TOGETHER.</h6>
                            <p class="mt-3">Sed ut perspiciatis unde omnis, totam rem aperiam, eaque ipsa quae ab illo
                                inventore veritatis et.</p>
                            <a class="mt-1 btn btn-primary" href="post.html">read more</a>
                            <div class="room-icons news-tags mt-4 pt-4">
                                <a href="#">luxury</a>
                                <a href="#">vacation</a>
                                <a href="#">travel</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 mt-4">
                    <div class="room-box background-white">
                        <img src="img/blog/6.jpg" alt="">
                        <div class="room-box-in">
                            <h6 class="">DON´T GIVE UP, KEEP ON FOCUS.</h6>
                            <p class="mt-3">Sed ut perspiciatis unde omnis, totam rem aperiam, eaque ipsa quae ab illo
                                inventore veritatis et.</p>
                            <a class="mt-1 btn btn-primary" href="post.html">read more</a>
                            <div class="room-icons news-tags mt-4 pt-4">
                                <a href="#">luxury</a>
                                <a href="#">vacation</a>
                                <a href="#">travel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section padding-bottom-smaller z-bigger background-grey over-hide">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="project-nav-wrap">
                        <a href="#">
                            <div class="left-nav" data-scroll-reveal="enter left move 60px over 0.9s after 0.1s">new<div
                                    class="text-on-hover">latest news</div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="right-nav" data-scroll-reveal="enter right move 60px over 0.9s after 0.1s">old
                                <div class="text-on-hover">older news</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section background-dark over-hide">
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <a href="services.html">
                        <div class="img-wrap services-wrap">
                            <img src="img/ser-1.jpg" alt="">
                            <div class="services-text-over">spa salon</div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3 pt-4 pt-sm-0">
                    <a href="services.html">
                        <div class="img-wrap services-wrap">
                            <img src="img/ser-2.jpg" alt="">
                            <div class="services-text-over">restaurant</div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3 pt-4 pt-lg-0">
                    <a href="services.html">
                        <div class="img-wrap services-wrap">
                            <img src="img/ser-3.jpg" alt="">
                            <div class="services-text-over">pool</div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3 pt-4 pt-lg-0">
                    <a href="services.html">
                        <div class="img-wrap services-wrap">
                            <img src="img/ser-4.jpg" alt="">
                            <div class="services-text-over">activities</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="section padding-top-bottom-small background-black over-hide footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3 text-center text-md-left">
                    <img src="img/logo.png" alt="">
                    <p class="color-grey mt-4">Avenue Street 3284<br>Thessaloniki</p>
                </div>
                <div class="col-md-4 text-center text-md-left">
                    <h6 class="color-white mb-3">information</h6>
                    <a href="tandc.html">terms &amp; conditions</a>
                    <a href="services.html">services</a>
                    <a href="restaurant.html">restaurant</a>
                    <a href="testimonials.html">testimonials</a>
                    <a href="gallery.html">gallery &amp; images</a>
                </div>
                <div class="col-md-5 mt-4 mt-md-0 text-center text-md-left logos-footer">
                    <h6 class="color-white mb-3">about us</h6>
                    <p class="color-grey mb-4">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                        praesentium voluptatum deleniti atque corrupti quos dolores.</p>
                    <img src="img/logos/1.png" alt="">
                    <img src="img/logos/2.png" alt="">
                    <img src="img/logos/3.png" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="section py-4 background-dark over-hide footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-left mb-2 mb-md-0">
                    <p>2019 © Thalia. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <a href="#" class="social-footer-bottom">facebook</a>
                    <a href="#" class="social-footer-bottom">twitter</a>
                    <a href="#" class="social-footer-bottom">instagram</a>
                </div>
            </div>
        </div>
    </div>


    <div class="scroll-to-top"></div>




    <!-- JAVASCRIPT
    ================================================== -->
    <script src="{{url('js/jquery.min.js')}}"></script>
    <script src="{{url('js/popper.min.js')}}"></script>
    <script src="{{url('js/bootstrap.min.js')}}"></script>
    <script src="{{url('js/plugins.js')}}"></script>
    <script src="{{url('js/custom.js')}}"></script>
    <!-- End Document
================================================== -->
</body>

</html>