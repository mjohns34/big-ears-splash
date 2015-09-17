<!doctype html>
<html>
	<head>
		<title>[[++site_name]] - [[*pagetitle]]</title>
		<base href="[[++site_url]]" />
		<link rel="stylesheet" type="text/css" href="assets/css/normalize.css">
		<link rel="stylesheet" type="text/css" href="assets/css/styles.css">
		<script src="https://use.typekit.net/uxc6ivz.js"></script>
		<script>try{Typekit.load({ async: true });}catch(e){}</script>
	</head>
	<body>
		<header role="banner">
			<div class="container">
				<img src="[[*logo]]" class="logo" />
				<div class="slider">
					[[!getSliderImages]]
					<span class="arrow-left"></span>
					<span class="arrow-right"></span>
				</div>
				<nav role="navigation">
					<a class="tickets" href="#"></a>
					<a class="last-year" href="#"></a>
					<span class="bird-left"></span>
					<span class="bird-right"></span>
				</nav>
			</div>
		</header>
		<main role="main">