<!DOCTYPE html>
<html class="no-js"> 

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Aholiab Foundation | {{$title}}</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="APEK TECH INC" />

	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content="" />
	<meta property="og:image" content="" />
	<meta property="og:url" content="" />
	<meta property="og:site_name" content="" />
	<meta property="og:description" content="" />
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="{{asset('storage/images/logorw.png')}}">
	<!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'> -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=AW-436446054"></script> -->
	<!-- Animate.css -->
	<link rel="stylesheet" href="{{asset('storage/css/animate.css')}}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{asset('storage/css/icomoon.css')}}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{asset('storage/css/bootstrap.css')}}">
	<!-- Superfish -->
	<link rel="stylesheet" href="{{asset('storage/css/superfish.css')}}">

	<link rel="stylesheet" href="{{asset('storage/css/style.css')}}">

	<!-- Modernizr JS -->
	<script src="{{asset('storage/js/modernizr-2.6.2.min.js')}}"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>

<body>
	<div id="fh5co-wrapper">
		<div id="fh5co-page">
			<div class="header-top">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-sm-6 text-left fh5co-link">
							<a href="#">FAQ</a>
							<a href="#">Forum</a>
							<a href="#">Contact</a>
						</div>
						<div class="col-md-6 col-sm-6 text-right fh5co-social">
							<a href="#" class="grow"><i class="icon-facebook2"></i></a>
							<a href="#" class="grow"><i class="icon-twitter2"></i></a>
							<a href="#" class="grow"><i class="icon-instagram2"></i></a>
						</div>
					</div>
				</div>
			</div>
			<header id="fh5co-header-section" class="sticky-banner">
				<div class="container">
					<div class="nav-header">
						<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
						<h1 id="fh5co-logo"><a href="/"><img src="{{asset('storage/images/logo.png')}}" alt="Logo" style="height:10vh;"></a></h1>
						<!-- START #fh5co-menu-wrap -->
						<nav id="fh5co-menu-wrap" role="navigation">
							<ul class="sf-menu" id="fh5co-primary-menu">
								<li class="{{request()->path()=='/'?'active':''}}">
									<a href="/">Home</a>
								</li>
								<li>
									<a href="#" class="fh5co-sub-ddown">Get Involved</a>
									<ul class="fh5co-sub-menu">
										<li><a href="/#donate">Donate</a></li>
										<li><a href="/#volunteer">Volunteer</a></li>
									</ul>
								</li>
								<li class="{{request()->path()=='projects'?'active':''}}">
									<a href="/projects" class="fh5co-sub-ddown">Projects</a>
									<ul class="fh5co-sub-menu">
										<li><a href="/projects#philo">Philantrophist</a></li>
										<li><a href="/projects#gallery">Gallery</a></li>
										<li><a href="/projects">Projects</a></li>
									</ul>
								</li>
								<li class="{{request()->path()=='about'?'active':''}}"><a href="/about">About</a></li>
								<li class="{{request()->path()=='reports'?'active':''}}"><a href="/reports">Field Reports</a></li>
								<li class="{{request()->path()=='contact'?'active':''}}"><a href="/contact">Contact</a></li>
								<li class="">
									@guest
									<a href="/login">Login</a>
									@else
									<a href="/dashboard">Dashboard</a>
									@endguest
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</header>
			<!-- end:header-top -->
			<div class="" style="min-height: 80vh;">
			@yield('content')
			</div>
			<!-- fh5co-blog-section -->
			<footer>
				<div id="footer">
					<div class="container">
						<div class="row">
							<div class="col-md-6 col-md-offset-3 text-center">
								<p class="fh5co-social-icons">
									<a href="#"><i class="icon-twitter2"></i></a>
									<a href="#"><i class="icon-facebook2"></i></a>
									<a href="#"><i class="icon-instagram"></i></a>
									<a href="#"><i class="icon-youtube"></i></a>
								</p>
								<p>Copyright {{date('Y')}} <a href=" #">Aholiab Foundation</a>. All Rights Reserved. <br>Made with <i class="icon-heart3"></i> by <a href="https://apektechinc.com" target="_blank">APEK TECH INC</a></p>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>
		<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->

	<!-- jQuery -->

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

	<script src="{{asset('storage/js/jquery.min.js')}}"></script>
	<!-- jQuery Easing -->
	<script src="{{asset('storage/js/jquery.easing.1.3.js')}}"></script>
	<!-- Bootstrap -->
	<!-- <script src="{{asset('storage/js/bootstrap.min.js')}}"></script> -->
	<!-- Waypoints -->
	<script src="{{asset('storage/js/jquery.waypoints.min.js')}}"></script>
	<script src="{{asset('storage/js/sticky.js')}}"></script>

	<!-- Stellar -->
	<script src="{{asset('storage/js/jquery.stellar.min.js')}}"></script>
	<!-- Superfish -->
	<script src="{{asset('storage/js/hoverIntent.js')}}"></script>
	<script src="{{asset('storage/js/superfish.js')}}"></script>

	<!-- Main JS -->
	<script src="{{asset('storage/js/main.js')}}"></script>

</body>

</html>