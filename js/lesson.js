

$(document).ready(async () => {
  
	// Load the lesson
	await loadLesson();

	// Handle lesson settings dropdown
	$("#menu-dots").click(() => $("#menu-dots-drop").toggle());
	$("#menu-dots").clickOutside(["#menu-dots-drop"], function () {
	  $("#menu-dots-drop").hide();
	});
  
});


/**
* Loads the lesson
*/
async function loadLesson() {
	$.ajax({
	  url: "../interface/markdown",
	  success: async markdown => {

		// Create a markdown handler
		let mdHandler = new MarkdownHandler(markdown);

		// Parse markdown metadata
		let metadata = mdHandler.getMetaData();
		if (!metadata || !metadata.date) {
		  $("#lesson-content").html(`<div style="color: red; text-align: center; width: 100%;">Loading Error: Document is not in correct format!<div>`);
		  return;
		}

		// Convert date to proper format
		const year = new Intl.DateTimeFormat("en", { year: "numeric" }).format(metadata.date);
		const mon = new Intl.DateTimeFormat("en", { month: "short" }).format(metadata.date);
		const da = new Intl.DateTimeFormat("en", { day: "2-digit" }).format(metadata.date);
		metadata.date = `${da} ${mon}, ${year}`;

		// Render lesson wrapper (title, author, date aontributors, resources, etc.)
		await renderTemplate(metadata);

		// Parse markdown without metadata
		let onlyMarkdown = mdHandler.getMarkdownOnly();
		if (!onlyMarkdown) {
		  $("#lesson-content").html(`<div style="color: red; text-align: center; width: 100%;">Loading Error: Document is not in correct format!<div>`);
		  return;
		}

		// Convert markdown to html
		let converter = new showdown.Converter();
		let	html      = converter.makeHtml(onlyMarkdown);

		// Insert html and update code snippets
		$("#lesson-content").html(html);
		Prism.highlightAll();
	  }
	});
}



/**
 * Renders lesson wrapper (title, author, date aontributors, resources, etc.)
 * 
 * @param {object} data For the twig template (comes from markdown yaml metadata)
 */
async function renderTemplate(data) {

	// Fetch the lesson twig template
	await $.ajax({
		url: "../interface/twig",
		method: "POST",
		data: {
			template: "lesson-content"
		},
		success: template => {

			// Load twig template and render it
			let twigTemplate = Twig.twig({ data: template });
			let html = twigTemplate.render(data);

			// Insert template
			$("#content").html(html);
		}
	});
} 
