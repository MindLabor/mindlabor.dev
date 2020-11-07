<?php 

	class Markdown {
		public $project;
		public $lesson;
		public $markdown;
		public $yaml_string;

		function __construct($project, $lesson) {
			$this->project = $project;
			$this->lesson = $lesson;
		}


		/**
		 * Checks if markdown file exists
		 */
		function file_exists() {
			$markdown_file = "../md_project/" . $this->project . "/" . $this->lesson;
			return file_exists($markdown_file . ".md");
		}


		/**
		 * Parse the yaml metadata of markdown
		 */
		function parse_yaml() {
			$markdown_file = "../md_project/" . $this->project . "/" . $this->lesson;
			$this->markdown = file_get_contents($markdown_file . ".md");

			// Make sure that the metadata is the first thing in the markdown file
			if (!strpos(trim($this->markdown), "---") == 0)
				return false;

			$this->yaml_string = get_string_between($this->markdown, "---", "---");
			return yaml_parse($this->yaml_string);
		}


		/**
		 * Filter out yaml metadata and return markdown only
		 */
		function get_filtered_markdown() {
			return substr($this->markdown, strpos($this->markdown, $this->yaml_string) + strlen($this->yaml_string) + 3);
		}

	}


	/**
	 * Get a substring between the two string $start and $end from $string
	 */
	function get_string_between($string, $start, $end){
		$string = ' ' . $string;
		$ini = strpos($string, $start);
		if ($ini == 0) return '';
		$ini += strlen($start);
		$len = strpos($string, $end, $ini) - $ini;
		return substr($string, $ini, $len);
	}
?>