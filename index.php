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

		<?php echo $twig->render("meta.twig", [
			"title" => "Practice coding the cool way - MindLabor",
			"description" => "Explore full coding projects from Discord bots to Chrome extensions and learn about every step from idea to release.",
			"robots" => "index, follow",
			"image" => "https://www.mindlabor.dev/assets/global/mindlabor/white-bg-icon.png",
			"tw_card" => "summary",
			"tw_site" => "@labor_mind",
			"tw_creator" => "@labor_mind",
			"og_url" => "https://www.mindlabor.dev/",
			"og_type" => "blog",
			"content_url" => "https://www.mindlabor.dev/",
		]); ?>

		<link rel="shortcut icon" href="assets/global/mindlabor/favicon-32x32.png" type="image/x-icon">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap">
		<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" crossorigin="anonymous">
		<link rel="stylesheet" href="css/home.css">
	</head>
	<body>
		<div id="splash-wrapper">
			<div id="splash"></div>
		</div>
		<div class="mobile-menu">
			<div class="menu-active" id="menu-home"><a href="/">Home</a></div></a>
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
				<div id="header-home"><a href="/">Home</a></div>
				<div id="header-projects"><a href="/projects">Projects</a></div></a>
				<div id="header-articles"><a href="/maintenance">Articles</a></div></a>
				<div id="header-about"><a href="/maintenance">About</a></div></a>
				<div id="header-sign-in"><a href="/maintenance">Sign In</a></div></a>
				<div class="round-btn" id="sign-up"><a href="/maintenance">Sign Up</a></div></a>
			</div>
			<div id="hero">
				<h1>Practice coding the cool way.</h1>
				<p>Explore full coding projects and learn about every step from idea to release.</p>	
				<div class="round-btn" id="learn-more">Get Started</div>
			</div>
		</header>
		<section class="content-box">
			<h1 data-aos="fade-up" data-aos-duration="400" data-aos-offset="100">Latest Projects</h1>
			<div class="content-box-wrapper">

				<?php echo $twig->render("content-box.twig", [
					"index" => 0,
					"thumbnail" => "assets/projects/thumb-skadi.svg",
					"href" => "/maintenance",
					"title" => "Discord Music Bot with NodeJS",
					"description" => "Make your own Discord bot that streams music from YouTube, searches for lyrics, and shows other songs of the same artist.",
					"tags" => ["NodeJs", "Discord API", "Audio"]
				]); ?>

				<?php echo $twig->render("content-box.twig", [
					"index" => 1,
					"thumbnail" => "assets/projects/thumb-fractals.jpg",
					"href" => "/maintenance",
					"title" => "Fractal Generator",
					"description" => "Dive into the world of fractals. Learn how they are created and write a program that generates them in Java.",
					"tags" => ["Java", "Recursion", "Math"]
				]); ?>

			</div>
			<div class="round-btn" id="projects-more"><a href="/projects">More</a></div>
		</section>

		<section id="time-hero">
			<div>
				<h1>Not enough time?<span class="text-ext"> No Problem.</span></h1>
				<p>Explore mini-articles about various topics that help you with your projects and personal development as a developer.</p>
			</div>
		</section>

		<section class="content-box">
			<h1 data-aos="fade-up" data-aos-duration="400" data-aos-offset="100">Latest Articles</h1>
			<div class="content-box-wrapper">

				<?php echo $twig->render("content-box.twig", [
					"index" => 0,
					"thumbnail" => "assets/articles/thumb-streams.svg",
					"href" => "/maintenance",
					"title" => "Functional Streams with Java",
					"description" => "A useful trick to make your code more readable and concise.",
					"tags" => ["Java", "Functional"]
				]); ?>

				<?php echo $twig->render("content-box.twig", [
					"index" => 1,
					"thumbnail" => "assets/articles/thumb-fft.svg",
					"href" => "/maintenance",
					"title" => "FFT in Javascript using p5.js",
					"description" => "Decompose an audio signal from your microphone into its frequencies using this simple library.",
					"tags" => ["p5.js", "Tools", "Audio"]
				]);?>

			</div>
			<div class="round-btn" id="articles-more"><a href="/maintenance">More</a></div>
		</section>

		<?php 
			echo $twig->render("footer.twig");
		?>

		<script type="application/ld+json">
			{ 
				"@context": "https://schema.org",
				"@type": "Organization",
				"name": "MindLabor",
				"url": "https://www.mindlabor.dev/",
				"logo": "https://www.mindlabor.dev/assets/global/mindlabor/white-bg-icon.png",
				"foundingDate": "2020",
				"founders": [{
					"@type": "Person",
					"name": "Samuel Braun"
				}],
				"contactPoint": {
					"@type": "ContactPoint",
					"contactType": "Support Email",
					"email": "support@mindlabor.dev"
				},
				"sameAs": [ 
					"http://twitter.com/labor_mind",
					"http://www.linkedin.com/in/samuel-braun",
					"http://github.com/MindLabor",
					"http://medium.com/@MindLabor",
					"http://www.instagram.com/mindlabor/"
				]
			}
		</script>
		<script src="https://unpkg.com/aos@next/dist/aos.js" integrity="sha384-ZGo5k5ISlEzWLoXyt+lnvKt9j03Z7GkxXh14zLqVy098XJhcdKHjL8pQYVMI8WiH" crossorigin="anonymous"></script>
		<script src="vendor/jquery-351.js"></script>
		<script src="js/general.js"></script>
		<script src="js/home.js"></script>
	</body>
</html>
