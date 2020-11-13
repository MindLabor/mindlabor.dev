<?php

	# Load twig templates
	require __DIR__ . "/vendor/autoload.php";
	use Twig\Environment;
	use Twig\Loader\FilesystemLoader;
	$loader = new FilesystemLoader(__DIR__ . "/templates");
	$twig = new Environment($loader);

	// Load projects data and lessons data
	require __DIR__ . "/interface/content.php";
	$projects_data = get_all_projects(6);
	$lessons_data = get_all_lessons(6);
?>

<!DOCTYPE html>
<html lang="en">
	<head>

		<?php echo $twig->render("meta.twig", [
			"title" => "Practice coding the cool way - MindLabor",
			"description" => "Explore full coding projects from Discord bots to Chrome extensions and learn about every step from idea to release.",
			"robots" => "index, follow",
			"image" => "https://www.mindlabor.dev/assets/global/mindlabor/white-bg-icon.png",
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
		<div id="splash-wrapper"></div>
		<div class="mobile-menu">
			<div class="menu-active" id="menu-home"><a href="/">Home</a></div></a>
			<div id="menu-projects"><a href="/projects">Projects</a></div></a>
			<div id="menu-articles"><a href="/lessons">Lessons</a></div></a>
			<div id="menu-about"><a href="/maintenance">About</a></div></a>
			<div id="menu-sign-up"><a href="/maintenance">Sign Up</a></div></a>
		</div>

		<header>
			<div id="header">
				<div id="mobile-header-burger">
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				</div>
				<div id="logo"></div>
				<div class="spacer"></div>
				<div id="header-home"><a href="/">Home</a></div>
				<div id="header-projects"><a href="/projects">Projects</a></div></a>
				<div id="header-articles"><a href="/lessons">Lessons</a></div></a>
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
		<section class="content-box" id="projects-section">
			<h1 data-aos="fade-up" data-aos-duration="400" data-aos-offset="100">Latest Projects</h1>
			<div class="content-box-wrapper">

				<?php 
					foreach ($projects_data as $index=>$project) {
						echo $twig->render("content-box.twig", [
							"index" => $index,
							"thumbnail" => "assets/projects/" . $project["thumbnail"],
							"href" => "/project/" . $project["url"],
							"title" => $project["title"],
							"description" => $project["description"],
							"tags" => $project["tags"]
						]);
					}
				?>

			</div>
			<div class="round-btn" id="projects-more"><a href="/projects">More</a></div>
		</section>

		<section id="time-hero">
			<div>
				<h1>Not enough time?<span class="text-ext"> No Problem.</span></h1>
				<p>Explore mini-lessons about various topics that help you with your projects and personal development as a developer.</p>
			</div>
		</section>

		<section class="content-box">
			<h1 data-aos="fade-up" data-aos-duration="400" data-aos-offset="100">Latest Lessons</h1>
			<div class="content-box-wrapper">

				<?php 
					foreach ($lessons_data as $lesson) {
						echo $twig->render("content-box.twig", [
							"index" => 0,
							"thumbnail" => "assets/lessons/" . $lesson["thumbnail"],
							"href" => "/lesson/" . $lesson["url"],
							"title" => $lesson["title"],
							"description" => $lesson["description"],
							"tags" => $lesson["tags"]
						]);
					}
				?>

			</div>
			<div class="round-btn" id="articles-more"><a href="/lessons">More</a></div>
		</section>

		<?php 
			echo $twig->render("footer.twig", [
				"assets_path" => "assets/"
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
		<script src="https://unpkg.com/aos@next/dist/aos.js" integrity="sha384-ZGo5k5ISlEzWLoXyt+lnvKt9j03Z7GkxXh14zLqVy098XJhcdKHjL8pQYVMI8WiH" crossorigin="anonymous"></script>
		<script src="vendor/jquery-351.js"></script>
		<script src="js/general.js"></script>
		<script src="js/home.js"></script>
	</body>
</html>
