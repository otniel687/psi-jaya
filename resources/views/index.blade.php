﻿<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]>
<!--><html class="no-js" lang="en"><!--<![endif]-->
<head>

	<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">
	<title>Thalia</title>
	<meta name="description"  content="Professional Creative Template" />
	<meta name="author" content="IG Design">
	<meta name="keywords"  content="ig design, website, design, html5, css3, jquery, creative, clean, animated, portfolio, blog, one-page, multi-page, corporate, business," />
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
	<meta name="theme-color" content="#212121"/>
    <meta name="msapplication-navbutton-color" content="#212121"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="#212121"/>

	<!-- Web Fonts 
	================================================== -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"/>
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	
	<!-- CSS
	================================================== -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/ionicons.min.css"/>
	<link rel="stylesheet" href="css/datepicker.css"/>
	<link rel="stylesheet" href="css/jquery.fancybox.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/owl.transitions.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="css/colors/color.css"/>
			
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
			<path d="M115.737 29L92.77 6.283c-.932-.92-1.21-2.84-.617-4.281.594-1.443 1.837-1.862 2.765-.953l28.429 28.116c.574.57.925 1.557.925 2.619 0 1.06-.351 2.046-.925 2.616l-28.43 28.114c-.336.327-.707.486-1.074.486-.659 0-1.307-.509-1.69-1.437-.593-1.442-.315-3.362.617-4.284L115.299 35H3.442C2.032 35 .89 33.656.89 32c0-1.658 1.143-3 2.552-3H115.737z"/>
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
							<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="social-top">Logout</a>
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
			<a href="index.html" >
				<div class="logo">
					<img src="img/logo.png" alt="">
				</div>
			</a>
			<ul>
				<li>
					<a class="curent-page" href="/" >Home</a>
				</li>
				<li>
					<a href="#" >room</a>
				</li>
				<li>
					<a href="about.html">about us</a>
				</li>
				<li>
					<a href="blog.html">news</a>
				</li>
				<li>
					<a href="contact.html">contact</a>
				</li>
				<li>
					<a href="search.html"><span>book now</span></a>
				</li>
			</ul>
		</div>
	</nav>
		
	<!-- Primary Page Layout
	================================================== -->

	<div class="section big-55-height over-hide z-bigger">
	
		<div class="parallax parallax-top" style="background-image: url('img/rooms.jpg')"></div>
		<div class="dark-over-pages"></div>
	
		<div class="hero-center-section pages">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-12 parallax-fade-top">
						<div class="hero-text">Toba Nest</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
	<div class="section padding-top-bottom over-hide background-grey">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6">
					<div class="room-box background-white">
						<div class="room-name">Martogi Homestay</div>
						<div class="room-per">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
						<img src="img/room3.jpg" alt="">
						<div class="room-box-in">
							<h5 class="">Big House</h5>
							<p class="mt-3">
							Temukan kenyamanan rumah di kota Balige dengan menginap di homestay kami yang menawarkan satu rumah utuh untuk disewakan. Dikelilingi oleh keindahan alam Danau Toba, homestay ini menawarkan pemandangan yang menakjubkan dan fasilitas lengkap untuk kenyamanan Anda. Sempurna untuk liburan atau perjalanan bisnis, pesan sekarang untuk pengalaman menginap yang tak terlupakan di Balige!.</p>
							<a class="mt-1 btn btn-primary" href="/booking">Start From 800K</a>
							<div class="room-icons mt-4 pt-4">
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 mt-4 mt-md-0">
					<div class="room-box background-white">
						<div class="room-name">Mentari Homestay</div>
						<div class="room-per">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star-o"></i>
						</div>
						<img src="img/room4.jpg" alt="">
						<div class="room-box-in">
							<h5 class="">Small House</h5>
							<p class="mt-3">
Nikmati pesona Danau Toba dengan menginap di homestay kami yang menyewakan satu rumah utuh. Terletak tepat di tepi danau, homestay ini menawarkan pemandangan menakjubkan, fasilitas lengkap, dan kesempatan untuk menikmati keindahan alam sekitar. Pesan sekarang dan buat momen tak terlupakan di Danau Toba!</p>
							<a class="mt-1 btn btn-primary" href="rooms-gallery.html">book from 80$</a>
							<div class="room-icons mt-4 pt-4">
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 mt-4" data-scroll-reveal="enter bottom move 50px over 0.7s after 0.2s">
					<div class="room-box background-white">
						<div class="room-name">suite andrea</div>
						<div class="room-per">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
						<img src="img/room5.jpg" alt="">
						<div class="room-box-in">
							<h5 class="">Apartment</h5>
							<p class="mt-3">Sed ut perspiciatis unde omnis, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et.</p>
							<a class="mt-1 btn btn-primary" href="rooms-gallery.html">book from 110$</a>
							<div class="room-icons mt-4 pt-4">
								<img src="img/5.svg" alt="">
								<img src="img/2.svg" alt="">
								<img src="img/3.svg" alt="">
								<img src="img/6.svg" alt="">
								<a href="rooms-gallery.html">full info</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 mt-4" data-scroll-reveal="enter bottom move 50px over 0.7s after 0.4s">
					<div class="room-box background-white">
						<div class="room-name">suite diana</div>
						<div class="room-per">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
						<img src="img/room6.jpg" alt="">
						<div class="room-box-in">
							<h5 class="">big Apartment</h5>
							<p class="mt-3">Sed ut perspiciatis unde omnis, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et.</p>
							<a class="mt-1 btn btn-primary" href="rooms-gallery.html">book from 160$</a>
							<div class="room-icons mt-4 pt-4">
								<img src="img/5.svg" alt="">
								<img src="img/2.svg" alt="">
								<img src="img/3.svg" alt="">
								<img src="img/6.svg" alt="">
								<a href="rooms-gallery.html">full info</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 mt-4" data-scroll-reveal="enter bottom move 50px over 0.7s after 0.2s">
					<div class="room-box background-white">
						<div class="room-name">suite andrea</div>
						<div class="room-per">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
						<img src="img/room5.jpg" alt="">
						<div class="room-box-in">
							<h5 class="">Apartment</h5>
							<p class="mt-3">Sed ut perspiciatis unde omnis, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et.</p>
							<a class="mt-1 btn btn-primary" href="rooms-gallery.html">book from 110$</a>
							<div class="room-icons mt-4 pt-4">
								<img src="img/5.svg" alt="">
								<img src="img/2.svg" alt="">
								<img src="img/3.svg" alt="">
								<img src="img/6.svg" alt="">
								<a href="rooms-gallery.html">full info</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 mt-4" data-scroll-reveal="enter bottom move 50px over 0.7s after 0.4s">
					<div class="room-box background-white">
						<div class="room-name">suite diana</div>
						<div class="room-per">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
						<img src="img/room6.jpg" alt="">
						<div class="room-box-in">
							<h5 class="">big Apartment</h5>
							<p class="mt-3">Sed ut perspiciatis unde omnis, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et.</p>
							<a class="mt-1 btn btn-primary" href="rooms-gallery.html">book from 160$</a>
							<div class="room-icons mt-4 pt-4">
								<img src="img/5.svg" alt="">
								<img src="img/2.svg" alt="">
								<img src="img/3.svg" alt="">
								<img src="img/6.svg" alt="">
								<a href="rooms-gallery.html">full info</a>
							</div>
						</div>
					</div>
				</div>
			</div>	
		</div>		
	</div>
	
	
	
	
	<!-- JAVASCRIPT
    ================================================== -->
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script> 
	<script src="js/bootstrap.min.js"></script>
	<script src="js/plugins.js"></script>  
	<script src="js/custom.js"></script> 
<!-- End Document
================================================== -->
</body>
</html>