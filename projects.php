<?php

	# Load twig templates
	require __DIR__ . "/vendor/autoload.php";

	use Twig\Environment;
	use Twig\Loader\FilesystemLoader;

	$loader = new FilesystemLoader(__DIR__ . "/templates");
	$twig = new Environment($loader);
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>MindLabor - Practice coding the cool way</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Explore full coding projects from Discord bots to Chrome extensions and learn about every step from idea to release.">
		
		<?php echo $twig->render("social-cards.twig", [
			"title" => "MindLabor",
			"image" => "https://www.mindlabor.dev/assets/global/mindlabor/white-bg-icon.png",
			"description" => "Explore full coding projects from Discord bots to Chrome extensions and learn about every step from idea to release.",
			"tw_card" => "summary",
			"tw_site" => "@labor_mind",
			"tw_creator" => "@labor_mind",
			"og_url" => "https://www.mindlabor.dev/",
			"og_type" => "blog",
		]); ?>

		<link rel="canonical" href="https://www.mindlabor.dev/">
		<link rel="shortcut icon" href="assets/global/mindlabor/favicon-32x32.png" type="image/x-icon">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap">
		<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" crossorigin="anonymous">
		<link rel="stylesheet" href="css/home.css">

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-123986016-2"></script>
		<script>window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}gtag('js', new Date());gtag('config', 'UA-123986016-2');</script>
	</head>
	<body>
		<div id="splash-wrapper">
			<div id="splash"></div>
		</div>
		<div class="mobile-menu">
			<div class="menu-active" id="menu-home"><a href="#">Home</a></div></a>
			<div id="menu-projects"><a href="/maintenance">Projects</a></div></a>
			<div id="menu-articles"><a href="/maintenance">Articles</a></div></a>
			<div id="menu-about"><a href="/maintenance">About</a></div></a>
			<div id="menu-sign-up"><a href="/maintenance">Sign Up</a></div></a>
		</div>

		<header>
			<div id="header">
				<div id="mobile-header-burger" onclick="$(this).toggleClass('open'); $('.mobile-menu').toggleClass('open'); $('body').toggleClass('fixed'); $('#header').toggleClass('header-mobile-open')">
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				</div>
				<div id="logo"></div>
				<div class="spacer"></div>
				<div id="header-home"><a href="#">Home</a></div>
				<div id="header-projects"><a href="/maintenance">Projects</a></div></a>
				<div id="header-articles"><a href="/maintenance">Articles</a></div></a>
				<div id="header-about"><a href="/maintenance">About</a></div></a>
				<div id="header-sign-in"><a href="/maintenance">Sign In</a></div></a>
				<div class="round-btn" id="sign-up"><a href="/maintenance">Sign Up</a></div></a>
			</div>
			<div id="hero">
				<h1>Practice coding the cool way.</h1>
				<p>Explore full coding projects and learn about every step from idea to release.</p>	
				<a href="/maintenance"><div class="round-btn" id="learn-more">Get Started</div></a>
			</div>
		</header>

		<?php 
			echo $twig->render("footer.twig");
		?>

		<script type="application/ld+json">
			{
			  "@context": "http://schema.org",
			  "@type": "Product",
			  "name": "MindLabor",
			  "url": "https://www.mindlabor.dev/",
			  "address": "",
			  "sameAs": [
				"https://twitter.com/labor_mind",
				"https://www.linkedin.com/in/samuel-braun",
				"https://github.com/MindLabor",
				"https://medium.com/@MindLabor",
				"https://www.instagram.com/mindlabor/"
			  ]
			}
		</script>
		<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
		<script src="vendor/jquery-3.5.1.min.js"></script>
	</body>
</html>
