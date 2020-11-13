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

		<?php # Title, meta tags & social media cards 
			echo $twig->render("meta.twig", [
				"title" => "Project - MindLabor",
				"description" => "content of your project",
				"robots" => "index, follow",
				"image" => "https://www.mindlabor.dev/assets/global/mindlabor/white-bg-icon.png",
				"og_url" => "https://www.mindlabor.dev/projects",
				"og_type" => "blog",
				"content_url" => "https://www.mindlabor.dev/projects",
			]);
		?>

		<link rel="shortcut icon" href="assets/global/mindlabor/favicon-32x32.png" type="image/x-icon">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap">
		<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" crossorigin="anonymous">
		<link rel="stylesheet" href="css/content-overview.css">
		<link rel="stylesheet" href="css/project.css">
	</head>
	<body>
		<div id="splash-wrapper"></div>


		<section class="project-header">
			<img id="project-top-1" class="wave" src="assets/project/top-wave.svg" alt="">
			<div class="wave-layer">
				<img id="project-top-2" class="wave" src="assets/project/top-wave-bot.svg" alt="">
			</div>
			<div class="head">
				<?php 
					echo $twig->render("header.twig", [
						"activesite" => "project",
						"internal" => true
					]);
				?>
			</div>

			<div class="project-text">
				<?php 
					echo $twig->render("project-head-text.twig", [
						"title" => explode(" ", "chat app"),
						"images" => [
							"assets/project/project-example-logo-1.png",
							"assets/project/project-example-logo-2.png",
							"assets/project/project-example-logo-3.svg"
						]
					]);
				?>
			</div>
		</section>
		<div id="header-wave">
			<img class="wave" src="assets/project/top-wave-3.svg" alt="">
			<div class="head-svg">
				<img src="assets/project/head-svg-example.svg" alt="">
			</div>
			<div id="project-information">
				<?php 
					echo $twig->render("project-info.twig", [
						"title" => "Chat-Application with NodeJS and Angular",
						"name" => "Moritz Schlegelmilch",
						"image" => "assets/project/example-profile.jpg"
					]);
				?>
			</div>
			<section id="lesson-area">
				<?php
					$lessons = [
						[
							"name" => "Resources",
							"desc" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga reiciendis cumque dolore aliquam quaerat deserunt",
							"image" => "assets/project/project-example-logo-1.png",
							"available" => true
						],
						[
							"name" => "Resources",
							"desc" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga reiciendis cumque dolore aliquam quaerat deserunt",
							"image" => "assets/project/project-example-logo-1.png",
							"available" => true
						],
						[
							"name" => "Resources",
							"desc" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga reiciendis cumque dolore aliquam quaerat deserunt",
							"image" => "assets/project/project-example-logo-1.png",
							"available" => true
						],
						[
							"name" => "Resources",
							"desc" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga reiciendis cumque dolore aliquam quaerat deserunt",
							"image" => "assets/project/project-example-logo-1.png"
						],
						[
							"name" => "Resources",
							"desc" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga reiciendis cumque dolore aliquam quaerat deserunt",
							"image" => "assets/project/project-example-logo-1.png"
						],
						[
							"name" => "Resources",
							"desc" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga reiciendis cumque dolore aliquam quaerat deserunt",
							"image" => "assets/project/project-example-logo-1.png"
						],
						[
							"name" => "Resources",
							"desc" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga reiciendis cumque dolore aliquam quaerat deserunt",
							"image" => "assets/project/project-example-logo-1.png"
						]
					];
					echo $twig->render("project-lessons.twig", [
						"lessons" => $lessons,
						"break" => ceil(sizeof($lessons) / 2)
					]);
				?>
			</section>
		</div>


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
		<script src="https://unpkg.com/aos@next/dist/aos.js" integrity="sha384-ZGo5k5ISlEzWLoXyt+lnvKt9j03Z7GkxXh14zLqVy098XJhcdKHjL8pQYVMI8WiH" crossorigin="anonymous"></script>
		<script src="vendor/jquery-351.js"></script>
		<script src="js/general.js"></script>
		<script src="js/projects.js"></script>
	</body>
</html>
