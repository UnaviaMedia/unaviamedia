<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Unavia personal portfolio web site" />

	<meta property="og:title" content="Unavia" />
	<meta property="og:description" content="Unavia personal portfolio web site" />
	<meta property="og:image" content="/icons/favicon_plant.png" />

	<link rel="icon" href="/icons/favicon_plant.png" />
	<title><?=$PAGE_TITLE?> | Unavia</title>

	<!-- Styles -->
	<link rel="stylesheet" href="/dist/css/app.css" />
	<!-- Scripts -->
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<script src="/bower_components/jquery/dist/jquery.js"></script>
	<script src="/dist/js/utilities.js"></script>
</head>

<body>
	<!-- TODO: Development only -->
	<!--<section id="media-query">
		<span class="show-for-small-only">small</span>
		<span class="show-for-medium-only">medium</span>
		<span class="show-for-large">large</span>
	</section>-->
	<header>
		<nav class="header-bar row">
			<ul class="menu align-center column">
				<li><a href="<?=URL_HOME ?>">Home</a></li>
				<li class="menu__logo"><a href="/"><img src="/images/profile.jpeg" width="75" alt="Unavia" /></a></li>
				<li><a href="<?=URL_ABOUT ?>">About</a></li>
			</ul>
		</nav>
	</header>
	<section class="site__content">
