<?php 

	require __DIR__ . "/markdown.php";

	// Get project data from JSON
	function get_all_projects($max) {
		$project_files = glob("md_project/*.json");
		$project_data = [];
		foreach ($project_files as $i=>$file) {
			if ($i >= $max) break;

			$project_data_string = file_get_contents($file);
			$project_data[] = json_decode($project_data_string, true);
		}
		return $project_data;
	}

	// Get lesson data from Markdown
	function get_all_lessons($max) {
		$lesson_files = glob("md_lesson/*.md");
		$lesson_data = [];
		foreach ($lesson_files as $i=>$file) {
			if ($i >= $max) break;

			$markdown = new Markdown($file);
			$lesson_data[] = $markdown->parse_yaml();
		}
		return $lesson_data;
	}

?>