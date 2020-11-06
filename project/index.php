<?php 
	# Load twig templates
	require __DIR__ . "/../vendor/autoload.php";
	use Twig\Environment;
	use Twig\Loader\FilesystemLoader;

	function get_string_between($string, $start, $end){
		$string = ' ' . $string;
		$ini = strpos($string, $start);
		if ($ini == 0) return '';
		$ini += strlen($start);
		$len = strpos($string, $end, $ini) - $ini;
		return substr($string, $ini, $len);
	}

	// Parse the REQUEST_URI
	$parsedUri = parse_url($_SERVER["REQUEST_URI"]);
	$path = explode('/', trim($parsedUri["path"], '/'));

	// Path should be /project/some-project-here which has 2 parts. 
	// Everything else is an invalid request.
	if (count($path) != 2)
		die("Invalid request");

	// Get project from uri and projects from md_project folder
	$project = end($path);
	$projects = [];
	foreach(glob('../md_project/*', GLOB_BRACE) as $file)
		$projects[] = basename($file);
	
	// Check if project exists
	if (!in_array($project . ".md", $projects))
		die("Invalid request");
	
	$markdown = file_get_contents("../md_project/" . $project . ".md");
	$yaml_string = get_string_between($markdown, "---", "---");
	$metadata = yaml_parse($yaml_string);
	if (!strpos(trim($markdown), "---") == 0)
		die("Markdown is not in correct format! Yaml must be at the top.");

	// Get everything after the yaml metadata string
	$only_markdown = substr($markdown, strpos($markdown, $yaml_string) + strlen($yaml_string) + 3);
	$data = [
		"markdown" => $only_markdown,
		"data" => $metadata
	];

	$loader = new FilesystemLoader(__DIR__ . "/../templates");
	$twig = new Environment($loader);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">

	<?php # Title, meta tags & social media cards 
		echo $twig->render("meta.twig", [
			"title" => $data["data"]["title"] . " - MindLabor",
			"description" => $data["data"]["description"],
			"robots" => "index, follow",
			"image" => "https://www.mindlabor.dev/assets/projects/" . $data["data"]["thumbnail"],
			"tw_card" => "summary",
			"tw_site" => "@labor_mind",
			"tw_creator" => "@labor_mind",
			"og_url" => "https://www.mindlabor.dev/projects/" . $data["data"]["url"],
			"og_type" => "blog",
			"content_url" => "https://www.mindlabor.dev/projects/" . $data["data"]["url"],
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
			"activesite" => "projects"
		]);
	?>

	<div id="content">
		<?php 
			echo $twig->render("lesson-content.twig", $data["data"]);
		?>
	</div>

	<?php 
		echo $twig->render("footer.twig", [
			"assets_path" => "../assets/"
		]);
	?>

	<script src="../vendor/jquery-351.js"></script>
	<script src="../vendor/prism/prism.js"></script>
	<script src="../js/general.js"></script>

	<script src="https://unpkg.com/twig/twig.min.js"></script>
	<script src="https://unpkg.com/showdown/dist/showdown.min.js"></script>
	<script>
		const onlyMarkdown = <?php echo json_encode($data["markdown"]); ?>;
		const metadata = <?php echo json_encode($data["data"]); ?>;
	</script>
	<script src="../js/lesson.js"></script>
</body>
</html>
