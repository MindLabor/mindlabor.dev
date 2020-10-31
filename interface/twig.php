<?php 

	// Check if POST file is set and only contains letters or "-"
	$template = $_POST["template"];
	if (isset($template) && !preg_match("/[^a-zA-Z\-]/", $template)) {
		echo file_get_contents("../templates/" . $template . ".twig");
	} else {
		echo "Template not Found!";
	}

?>