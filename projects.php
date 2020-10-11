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
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<?php # Title, meta tags & social media cards 
			echo $twig->render("meta.twig", [
				"title" => "MindLabor - Projects",
				"image" => "https://www.mindlabor.dev/assets/global/mindlabor/white-bg-icon.png",
				"description" => "Explore full coding projects from Discord bots to Chrome extensions and learn about every step from idea to release.",
				"tw_card" => "summary",
				"tw_site" => "@labor_mind",
				"tw_creator" => "@labor_mind",
				"og_url" => "https://www.mindlabor.dev/projects",
				"og_type" => "blog",
				"content_url" => "https://www.mindlabor.dev/projects",
			]);
		?>

		<link rel="shortcut icon" href="assets/global/mindlabor/favicon-32x32.png" type="image/x-icon">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap">
		<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" crossorigin="anonymous">
		<link rel="stylesheet" href="css/projects.css">
	</head>
	<body>
		<div id="splash-wrapper">
			<div id="splash"></div>
		</div>

		<?php 
			echo $twig->render("header.twig");
		?>
		
		<section class="content-box">
			<div>
				<h1>Projects</h1>
				<h2>Browse all projects and learn how we have built them step by step.</h2>
			</div>
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
		</section>

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
		<script src="js/general.js"></script>
		<script src="js/projects.js"></script>
	</body>
</html>
