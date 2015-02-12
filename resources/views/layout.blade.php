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
	<link href="/css/pfg.css" rel="stylesheet">
	<!-- Fonts -->


	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
<header>
	<div class="row">
		<div class="large-12 columns">
			<img src="/img/paparazzifeelgood.svg">
		</div>
	</div>
</header>
	<div class="row">
		<div class="large-12 columns">
			@yield('content')
		</div>
	</div>
<script src="/js/vendor/jquery.js"></script>
<script src="/js/vendor/modernizr.js"></script>
<script src="/js/foundation.min.js"></script>
<script src="/js/foundation/foundation.js"></script>
<script src="/js/foundation/foundation.clearing.js"></script>
<script src="/js/foundation/foundation.reveal.js"></script>
<script>
	$(document).foundation();
	var doc = document.documentElement;
	doc.setAttribute('data-useragent', navigator.userAgent);
</script>
</body>
</html>
