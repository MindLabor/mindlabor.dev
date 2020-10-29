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

		<div id="content">
			<div id="path"><a href="/projects">Projects</a> → <a href="/maintenance">Fractal Generator</a> → <span>Functional Streams with Java</span></div>
			<h1>Functional Streams with Java</h1>
			<div id="written-by"><div id="p-image"></div>Written by <a href="https://github.com/MindLabor" target="_blank" rel="noopener noreferrer">John Doe</a> <span>• 24th Aug, 2018</span></div>
			<div id="lesson-content">
				<p>
					Often, when you’re about to implement some complex stuff, things can become confusing really quickly. 
					So it is important to write clean code. A way of many is to use streams. Not the Java Stream API but the concept of a stream.
				</p>
				<h2>1. Creating a class</h2>
				<p>
					Take the example mentioned above and name the class “Train”. It has the following variables: people, fuel, timePast and trainDriver.
				</p>
				<pre><code class="language-java">public class Train { 
	int people, timePast;
	float fuel;
	String trainDriver;
}</code></pre>
				<h2>2. Creating the functionality</h2>
				<p>
					As the train moves, the fuel level decreases. So we should be able to refill the tank again. 
					We also want to pick up people on the way. Here are some methods we could include: enter, leave, fillfuel, changeDriver, etc.
				</p>
				<pre><code class="language-java">public void start() {
	test += 900f;
}</code></pre>
				<p>
					Streams can be very useful, especially when you’re implementing complex logic and want to have a clear structure and clean code. You might not want to use streams in a big loop though, 
					since there are very slow compared to a direct implementation. In all other cases, go ahead and try it out yourself.
				</p>
			</div>
			<div id="lesson-navigation">
				<div class="round-btn" id="prev-lesson"><a href="/maintenance">← Introduction</a></div>
				<div class="round-btn" id="next-lesson"><a href="/maintenance">Wrapping up states →</a></div>
			</div>
			<div id=""></div>
			<h2>Additional Resources</h2>
			<ol>
				<li><a href="#" target="_blank" rel="noopener noreferrer">Object Oriented vs Functional Programming with TypeScript</a></li>
				<li><a href="#" target="_blank" rel="noopener noreferrer">Streams</a></li>
			</ol>
			<h2>Contributers</h2>
			<div id="contributers">
				<div>
					<a href="https://github.com/MindLabor" target="_blank" rel="noopener noreferrer">
						<img src="https://avatars2.githubusercontent.com/u/42311986?s=460&u=a77d945cc3aba622ba704050334208f56da05d47&v=4" alt="John Doe">
					</a>
				</div>
				<div>
					<a href="https://github.com/MindLabor" target="_blank" rel="noopener noreferrer">
						<img src="https://www.blue-concept.com/wpneu/wp/wp-content/uploads/2018/06/maxmustermann-430x287.jpg" alt="Ragnar">
					</a>
				</div>
				<div>
					<a href="https://github.com/MindLabor" target="_blank" rel="noopener noreferrer">
						<img src="https://i.mmo.cm/is/image/mmoimg/thumbnew/weirdo-foam-latex-mask--mw-117350-1.jpg" alt="William">
					</a>
				</div>
			</div>
		</div>

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
	</body>
</html>
