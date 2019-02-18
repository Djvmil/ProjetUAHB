<!DOCTYPE html>
<html lang="en">
<head>

	<title>Djamil</title>
<!--

Template 2083 Steak House

http://www.tooplate.com/view/2083-steak-house

-->
  	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
  	<meta name="description" content="">

	<!-- stylesheets css -->
	<link rel="stylesheet" href="{{asset('asset/css/bootstrap.min.css')}}">

  	<link rel="stylesheet" href="{{asset('asset/css/magnific-popup.css')}}">

	<link rel="stylesheet" href="{{asset('asset/css/animate.min.css')}}">
	<link rel="stylesheet" href="{{asset('asset/css/font-awesome.min.css')}}">

  	<link rel="stylesheet" href="{{asset('asset/css/nivo-lightbox.css')}}">
  	<link rel="stylesheet" href="{{asset('asset/css/nivo_assets/default/default.css')}}">

  	<link rel="stylesheet" href="{{asset('asset/css/hover-min.css')}}">
  	<link rel="stylesheet" href="{{asset('asset/css/flexslider.css')}}">

	<link rel="stylesheet" href="{{asset('asset/css/style.css')}}">

  	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600' rel='stylesheet' type='text/css'>

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

<!-- Preloader section -->
<div class="preloader">
	<div class="sk-spinner sk-spinner-pulse"></div>
</div>


<!-- Navigation section -->
<div class="navbar navbar-default navbar-static-top" role="navigation">
  <div class="container">

    <div class="navbar-header">
      <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon icon-bar"></span>
        <span class="icon icon-bar"></span>
        <span class="icon icon-bar"></span>
      </button>
			@section('nom')
			@show
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
				<li  class="nav-item {{request()-> is('home') ? 'active' : '' }} "><a href="{{route('home')}}" class="smoothScroll">Accueil</a></li>

				<li class="nav-item {{request()-> is('compteur') ? 'active' : '' }} "><a href="{{route('compteur.index')}}" class="smoothScroll">Compteur</a></li>

				<li  class="nav-item {{request()->is('abonnement') ? 'active' : '' }}"><a href="{{route('abonnement.index')}}" class="smoothScroll">Abonnement</a></li>
				<li  class="nav-item {{request()->is('facture') ? 'active' : '' }}"><a href="{{route('facture.index')}}" class="smoothScroll">Facture</a></li>
      </ul>
    </div>

  </div>
</div>

<main id="main" class="test">
  @section('main')
<!-- Feature section -->
<section id="feature" class="parallax-section">
  <div class="container">
    <div class="row">

    </div>
  </div>
</section>
@show
  </main>

<!-- javscript js -->
<script src="{{asset('asset/js/jquery.js')}}"></script>
<script src="{{asset('asset/js/bootstrap.min.js')}}"></script>

<script src="{{asset('asset/js/jquery.magnific-popup.min.js')}}"></script>

<script src="{{asset('asset/js/jquery.sticky.js')}}"></script>
<script src="{{asset('asset/js/jquery.backstretch.min.js')}}"></script>

<script src="{{asset('asset/js/isotope.js')}}"></script>
<script src="{{asset('asset/js/imagesloaded.min.js')}}"></script>
<script src="{{asset('asset/js/nivo-lightbox.min.js')}}"></script>

<script src="{{asset('asset/js/jquery.flexslider-min.js')}}"></script>

<script src="{{asset('asset/js/jquery.parallax.js')}}"></script>
<script src="{{asset('asset/js/smoothscroll.js')}}"></script>
<script src="{{asset('asset/js/wow.min.js')}}"></script>

<script src="{{asset('asset/js/custom.js')}}"></script>

</body>
</html>
