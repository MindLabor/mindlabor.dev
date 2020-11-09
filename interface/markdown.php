<?php 

	class Markdown {
		public $file;
		public $markdown;
		public $yaml_string;

		function __construct($file) {
			$this->file = $file;
		}


		/**
		 * Parse the yaml metadata of markdown
		 */
		function parse_yaml() {
			$this->markdown = file_get_contents($this->file);

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