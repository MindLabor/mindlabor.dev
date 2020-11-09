

$(document).ready(async () => {
  
	// Handle lesson settings dropdowns
	$("#menu-dots").click(() => $("#menu-dots-drop").toggle());
	$("#menu-dots").clickOutside(["#menu-dots-drop"], function () {
		$("#menu-dots-drop").hide();
	});

	// Load the lesson
	loadLesson();
});


/**
* Loads the lesson
*/
function loadLesson() {
	
	// Convert date to proper format
	const year = new Intl.DateTimeFormat("en", { year: "numeric" }).format(new Date(metadata.date));
	const mon = new Intl.DateTimeFormat("en", { month: "short" }).format(new Date(metadata.date));
	const da = new Intl.DateTimeFormat("en", { day: "2-digit" }).format(new Date(metadata.date));
	$("#lesson-date").text(`${da} ${mon}, ${year}`);

	// Convert markdown to html
	let converter = new showdown.Converter();
	let	html      = converter.makeHtml(onlyMarkdown);

	// Insert html and update code snippets
	$("#lesson-content").html(html);

	// Hightlight inline <code> blocks
	$("#lesson-content").find("code").each((i, e) => {
		if ($(e).attr("class")) return;
		
		const code = $(e).html();
		const firstSpace = code.indexOf(" ");
		if (firstSpace !== -1) {
			$(e).addClass(code.split(" ")[0]);
			$(e).addClass("language-" + code.split(" ")[0]);
			$(e).html(code.substring(firstSpace+1));
		} else {
			$(e).addClass("language-none");
		}
	});

	Prism.highlightAll();
}

