<?php

	# Load twig templates
	require __DIR__ . "/../vendor/autoload.php";

	use Twig\Environment;
	use Twig\Loader\FilesystemLoader;

	$loader = new FilesystemLoader(__DIR__ . "/../templates");
	$twig = new Environment($loader);
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">

		<?php # Title, meta tags & social media cards 
			echo $twig->render("meta.twig", [
				"title" => "Functional streams with Java - MindLabor",
				"description" => "Often, when you’re about to implement some complex stuff, things can become confusing really quickly. So it is important to write clean code. A way of many is to use streams. Not the Java Stream API but the concept of a stream.",
				"robots" => "index, follow",
				"image" => "https://www.mindlabor.dev/assets/lessons/thumb-streams.svg",
				"tw_card" => "summary",
				"tw_site" => "@labor_mind",
				"tw_creator" => "@labor_mind",
				"og_url" => "https://www.mindlabor.dev/lesson/functional-streams-with-java",
				"og_type" => "blog",
				"content_url" => "https://www.mindlabor.dev/lesson/functional-streams-with-java",
			]);
		?>

		<link rel="shortcut icon" href="../assets/global/mindlabor/favicon-32x32.png" type="image/x-icon">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;600&display=swap">
		<link rel="stylesheet" href="../vendor/prism/prism.css">
		<link rel="stylesheet" href="../css/lesson.css">
	</head>
	<body>
		<div id="splash-wrapper"></div>

		<?php 
			echo $twig->render("header.twig", [
				"activesite" => "lessons"
			]);
		?>

		<div id="content"><!-- AJAX Content --></div>

		<?php 
			echo $twig->render("footer.twig", [
				"assets_path" => "../assets/"
			]);
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
				"email": "support@mindlabor.dev",
				"sameAs": [ 
					"http://twitter.com/labor_mind",
					"http://www.linkedin.com/in/samuel-braun",
					"http://github.com/MindLabor",
					"http://medium.com/@MindLabor",
					"http://www.instagram.com/mindlabor/"
				]
			}
		</script>
		<script src="../vendor/jquery-351.js"></script>
		<script src="../vendor/prism/prism.js"></script>
		<script src="../js/general.js"></script>
  
		<script src="https://unpkg.com/twig/twig.min.js"></script>
		<script src="https://unpkg.com/showdown/dist/showdown.min.js"></script>
		<script src="../interface_js/MarkdownMetadata.js"></script>
		<script src="../js/lesson.js"></script>
	</body>
</html>
