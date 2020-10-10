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
		<meta name="twitter:title" content="MindLabor">
		<meta name="twitter:image" content="https://www.mindlabor.dev/assets/global/mindlabor/white-bg-icon.png">
		<meta name="twitter:description" content="Explore full coding projects from Discord bots to Chrome extensions and learn about every step from idea to release.">
		<meta name="twitter:card" content="summary">
		<meta name="twitter:site" content="@labor_mind">
		<meta name="twitter:creator" content="@labor_mind">
		<meta property="og:title" content="MindLabor">
		<meta property="og:image" content="https://www.mindlabor.dev/assets/global/mindlabor/white-bg-icon.png">
		<meta property="og:description" content="Explore full coding projects from Discord bots to Chrome extensions and learn about every step from idea to release.">
		<meta property="og:url" content="https://www.mindlabor.dev/">
		<meta property="og:type" content="blog">

		<link rel="canonical" href="https://www.mindlabor.dev/">
		<link rel="shortcut icon" href="assets/global/mindlabor/favicon-32x32.png" type="image/x-icon">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap">
		<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" crossorigin="anonymous">
		<link rel="stylesheet" href="css/home.css">

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-123986016-2"></script>
		<script>window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}gtag('js', new Date());gtag('config', 'UA-123986016-2');</script>
		<script src="https://kit.fontawesome.com/157f63bc72.js" crossorigin="anonymous"></script>
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
		<section class="content-box">
			<h1>Latest Projects</h1>
			<div class="content-box-wrapper">

				<?php echo $twig->render("content-box.html.twig", [
					"thumbnail" => "assets/projects/thumb-skadi.svg",
					"href" => "/maintenance",
					"title" => "Discord Music Bot with NodeJS",
					"description" => "Make your own Discord bot that streams music from YouTube, searches for lyrics, and shows other songs of the same artist.",
					"tags" => ["NodeJs", "Discord API", "Audio"]
				]); ?>

				<?php echo $twig->render("content-box.html.twig", [
					"thumbnail" => "assets/projects/thumb-fractals.jpg",
					"href" => "/maintenance",
					"title" => "Fractal Generator",
					"description" => "Dive into the world of fractals. Learn how they are created and write a program that generates them in Java.",
					"tags" => ["Java", "Recursion", "Math"]
				]); ?>

			</div>
			<div id="projects-more"><a href="/maintenance">More</a></div>
		</section>

		<section id="time-hero">
			<div>
				<h1>Not enough time?<span class="text-ext"> No Problem.</span></h1>
				<p>Explore mini-articles about various topics that help you with your projects and personal development as a developer.</p>
			</div>
		</section>

		<section class="content-box">
			<h1>Latest Articles</h1>
			<div class="content-box-wrapper">

				<?php echo $twig->render("content-box.html.twig", [
					"thumbnail" => "assets/articles/thumb-streams.svg",
					"href" => "/maintenance",
					"title" => "Functional Streams with Java",
					"description" => "A useful trick to make your code more readable and concise.",
					"tags" => ["Java", "Functional"]
				]); ?>

				<?php echo $twig->render("content-box.html.twig", [
					"thumbnail" => "assets/articles/thumb-fft.svg",
					"href" => "/maintenance",
					"title" => "FFT in Javascript using p5.js",
					"description" => "Decompose an audio signal from your microphone into its frequencies using this simple library.",
					"tags" => ["p5.js", "Tools", "Audio"]
				]);?>

			</div>
			<div id="articles-more"><a href="/maintenance">More</a></div>
		</section>

		<?php 
			echo $twig->render("footer.html.twig");
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
		<script src="js/home.js"></script>
	</body>
</html>
