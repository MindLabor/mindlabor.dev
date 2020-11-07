<?php 
	# Load twig templates
	require __DIR__ . "/../vendor/autoload.php";
	require __DIR__ . "/../interface/markdown.php";
	use Twig\Environment;
	use Twig\Loader\FilesystemLoader;
	$loader = new FilesystemLoader(__DIR__ . "/../templates");
	$twig = new Environment($loader);

	// Validate request and exit if it is not valid
	$path = validate_request();

	// Parse markdown file with yaml metadata
	$markdown = new Markdown($path[1], $path[2]);
	if (!$markdown->file_exists()) die("Invalid request!");
	$metadata = $markdown->parse_yaml();
	if (!$metadata) die("Wrong Format! Yaml must be the at the top!");
	$data = [
		"markdown" => $markdown->get_filtered_markdown(),
		"data" => $metadata
	];

	// Fetch project data
	$project_data_string = file_get_contents("../md_project/" . $path[1] . ".json");
	$project_data = json_decode($project_data_string, true);
	$data["data"]["project"] = $project_data;

	// Evaluate other needed data (such as next and previous lesson)
	$data["data"]["type"] = "project";
	$all_lessons = $data["data"]["project"]["lessons"];
	$current_lesson = $data["data"]["url"];
	if (!in_array($current_lesson, $all_lessons)) die("Wrong Format! Lesson is not in lesson overview of project!");
	$current_index = array_search($current_lesson, $all_lessons);
	$data["data"]["next"] = $current_index+1 < count($all_lessons)? $all_lessons[$current_index+1] : "";
	$data["data"]["prev"] = $current_index-1 >= 0? $all_lessons[$current_index-1] : "";
	$data["data"]["currentLessonIndex"] = $current_index;

	/**
	 * Validates this request and returns the request parts
	 */
	function validate_request() {

		// Parse the REQUEST_URI
		$parsedUri = parse_url($_SERVER["REQUEST_URI"]);
		$path = explode('/', trim($parsedUri["path"], '/'));

		// if path is /project/some-project-here which has 2 parts. 
		if (count($path) == 2) {
			print_r(scandir("../md_project/" . $path[1]));
			die(); // TODO: Implement project overview
		}

		// if path is not /project/some-project-here/lesson-here which has 3 parts. 
		if (count($path) != 3) die("Invalid request");

		return $path;
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">

	<link rel="shortcut icon" href="../../assets/global/mindlabor/favicon-32x32.png" type="image/x-icon">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;600&display=swap">
	<link rel="stylesheet" href="../../vendor/prism/prism.css">
	<link rel="stylesheet" href="../../css/lesson.css">
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

	<script src="../../vendor/jquery-351.js"></script>
	<script src="../../vendor/prism/prism.js"></script>
	<script src="../../js/general.js"></script>

	<script src="https://unpkg.com/twig/twig.min.js"></script>
	<script src="https://unpkg.com/showdown/dist/showdown.min.js"></script>
	<script>
		const onlyMarkdown = <?php echo json_encode($data["markdown"]); ?>;
		const metadata = <?php echo json_encode($data["data"]); ?>;
	</script>
	<script src="../../js/lesson.js"></script>
</body>
</html>
