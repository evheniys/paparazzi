<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Paparazzi Feel Good</title>

	<link href="/css/normalize.css" rel="stylesheet">
	<link href="/css/foundation.css" rel="stylesheet">
	<link href="/css/magnific-popup.css" rel="stylesheet">
	<link href="/css/pfg.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Kotta+One' rel='stylesheet' type='text/css'>

	<!-- Fonts -->


	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
<header id="fixed-top-bar">
	<div class="row">
		<div class="small-12 medium-12 large-12 columns">
			<h1 id="logo"><a title="Feel Good Paparazzi" href="/">Feel Good Paparazzi</a></h1>
			<h2 id="contact">Ukraine, Lemberg, Citadel<br>VS-Bank, office 104<br>(098) 098-5000</h2>
			<hr>
		</div>
	</div>
</header>
	<div id="content" class="row">
		<div class="large-12 columns">
			@yield('content')
		</div>
	</div>
<script src="/js/vendor/jquery.js"></script>
<script src="/js/vendor/modernizr.js"></script>
<script src="/js/foundation.min.js"></script>
<script src="/js/foundation/foundation.js"></script>
<script src="/js/jquery.magnific-popup.min.js"></script>
<script src="/js/masonry.pkgd.min.js"></script>
<script src="/js/imagesloaded.pkgd.min.js"></script>

<script>
	$(document).foundation();
	var doc = document.documentElement;
	doc.setAttribute('data-useragent', navigator.userAgent);

	$(document).ready(function() {
		$('.image-popup-vertical-fit').magnificPopup({
			type: 'image',
			closeOnContentClick: true,
			mainClass: 'mfp-img-mobile',
			image: {
				verticalFit: true
			}

		});
		var $container = $('#imgcontainer');


// layout Masonry again after all images have loaded
		$container.imagesLoaded( function() {
			$container.masonry();
		});

	});

</script>
</body>
</html>
