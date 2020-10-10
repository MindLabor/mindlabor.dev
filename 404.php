<?php

	# Load twig templates
	require __DIR__ . "/vendor/autoload.php";

	use Twig\Environment;
	use Twig\Loader\FilesystemLoader;

	$loader = new FilesystemLoader(__DIR__ . "/templates");
	$twig = new Environment($loader);
?>

<!DOCTYPE html>
<html>
	<head>
		<title>MindLabor - Oops, sorry</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta property="og:title" content="MindLabor">
		<meta property="og:image" content="https://www.mindlabor.dev/assets/icons/png/white-bg-icon.png">
		<meta property="og:description" content="This page was not found.">
		<meta property="og:url" content="https://www.mindlabor.dev/">
		<meta property="og:type" content="blog">

		<link rel="canonical" href="https://www.mindlabor.dev/">
		<link rel="shortcut icon" href="assets/icons/ico/favicon-32x32.png" type="image/x-icon">
		<link rel="stylesheet" href="css/404.css">
	</head>

	<body>
		<div class="container text-center" id="error">
			<div class="imgcont">
				<img height="280px" src="assets/404/404.jpg" alt="404 Page Not Found">
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="main-icon text-warning">
						<span class="uxicon uxicon-alert"></span>
					</div>
					<h1><b>404</b> This page is on vacation</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-md-push-3">
					<p class="lead">
						Looks like this page isn't available. <br /> Do you want to fire this page? <br />
						<a href="index.html" class="a">Fire Page</a>
					</p>
				</div>
			</div>
		</div>
		<?php 
			echo $twig->render("footer.html.twig");
		?>
	</body>
</html>
