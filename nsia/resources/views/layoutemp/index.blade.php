<!DOCTYPE HTML>
<!--
	Aesthetic by gettemplates.co
	Twitter: http://twitter.com/gettemplateco
	URL: http://gettemplates.co
-->
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>NSIA</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by gettemplates.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="gettemplates.co" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- <link href="https://fonts.googleapis.com/css?family=Droid+Sans" rel="stylesheet"> -->
    <link rel="shortcut icon" href="{{ asset('dist/img/nlogo.png') }}" type="image/x-icon">
	<!-- Animate.css -->
	<link rel="stylesheet" href="{{ asset('admin/css/animate.css') }}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{ asset('admin/css/icomoon.css') }}">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="{{ asset('admin/css/themify-icons.css') }}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{ asset('admin/css/bootstrap.css') }}">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{ asset('admin/css/magnific-popup.css') }}">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="{{ asset('admin/css/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('admin/css/owl.theme.default.min.css') }}">

	<!-- Theme style  -->
	<link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">

	<!-- Modernizr JS -->
	<script src="{{ asset('admin/js/modernizr-2.6.2.min.js') }}"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>

	<div class="gtco-loader"></div>

	<div id="page">
	<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">

			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<div id="gtco-logo"><a href="">NSIA <em>.</em></a></div>
				</div>
				<div class="col-xs-8 text-right menu-1">
					<ul>
						<li class="active"><a href="{{ route('logoutemp') }}">Deconnexion</a></li>
					</ul>
				</div>
			</div>

		</div>
	</nav>

	<header id="gtco-header" class="gtco-cover" role="banner" style="background-image:url(images/img_bg_1.jpg);">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					<div class="display-t">
						<div class="display-tc">
							<h1 class="animate-box" data-animate-effect="fadeInUp">Groupe NSIA </h1>
							<h2 class="animate-box" data-animate-effect="fadeInUp">Le vrai visage de l'assurance <em>par</em> <a href="http://gettemplates.co/" target="_blank">NSIA ASSURANCES</a></h2>
							<p class="animate-box" data-animate-effect="fadeInUp"><a href="https://www.groupensia.com" class="btn btn-white btn-lg btn-outline">Site officiel</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div id="gtco-features-3">
		<div class="gtco-container">
			<div class="gtco-flex">
				<div class="feature feature-1 animate-box" data-animate-effect="fadeInUp">
					<div class="feature-inner">
						<span class="icon">
							<i class="ti-file"></i>
						</span>
						<h3>Remplir la fiche d'engagement </h3>
						<p>Remplir la fiche d'engagement de dépenses avant de faire une demande. </p>
                        @foreach ($employes as $employe )

                        <p><a href="{{ route('employe.show', $employe->id) }}" class="btn btn-white btn-outline">Remplir la fiche </a></p>

                        @endforeach



					</div>
				</div>
				<div class="feature feature-2 animate-box" data-animate-effect="fadeInUp">
					<div class="feature-inner">
						<span class="icon">
							<i class="ti-pencil-alt"></i>
						</span>
						<h3>Demande de consommables</h3>
						<p>Faire une demande de consommable en cas de panne ou de besoin matériel. </p>
						<p><a href="{{ route('demande.create') }}" class="btn btn-white btn-outline">Faire une demande</a></p>
					</div>
				</div>
			{{-- 	<div class="feature feature-3 animate-box" data-animate-effect="fadeInUp">
					<div class="feature-inner">
						<span class="icon">
							<i class="ti-timer"></i>
						</span>
						<h3>Timer</h3>
						<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. </p>
						<p><a href="#" class="btn btn-white btn-outline">Learn More</a></p>
					</div>
				</div> --}}
			</div>
		</div>
	</div>

	<div id="gtco-features">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
					<h2>Groupe NSIA</h2>
					<p>Assurances, Banque et finance, immobilier, technologie.</p>
				</div>
			</div>

		</div>
	</div>


<!-- 	<footer id="gtco-footer" role="contentinfo">
		<div class="gtco-container">
			<div class="row row-p	b-md">
				<div class="col-md-4 col-md-push-1">
					<div class="gtco-widget">
						<h3>Links</h3>
						<ul class="gtco-footer-links">
							<li><a href="#">Knowledge Base</a></li>
							<li><a href="#">Career</a></li>
							<li><a href="#">Press</a></li>
							<li><a href="#">Terms of services</a></li>
							<li><a href="#">Privacy Policy</a></li>
						</ul>
					</div>
				</div>


			</div>

			<div class="row copyright">
				<div class="col-md-12">
					<p class="pull-left">
						<small class="block">&copy; 2016 Free HTML5. All Rights Reserved.</small>
						<small class="block">Designed by <a href="http://gettemplates.co/" target="_blank">GetTemplates.co</a> Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a></small>
					</p>

				</div>
			</div>

		</div>
	</footer> -->
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>

	<!-- jQuery -->
	<script src="{{ asset('admin/js/jquery.min.js') }}"></script>
	<!-- jQuery Easing -->
	<script src="{{ asset('admin/js/jquery.easing.1.3.js') }}"></script>
	<!-- Bootstrap -->
	<script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>
	<!-- Waypoints -->
	<script src="{{ asset('admin/js/jquery.waypoints.min.js') }}"></script>
	<!-- Carousel -->
	<script src="{{ asset('admin/js/owl.carousel.min.js') }}"></script>
	<!-- countTo -->
	<script src="{{ asset('admin/js/jquery.countTo.js') }}"></script>
	<!-- Magnific Popup -->
	<script src="{{ asset('admin/js/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ asset('admin/js/magnific-popup-options.js') }}"></script>
	<!-- Main -->
	<script src="{{ asset('admin/js/main.js') }}"></script>

	</body>
</html>

