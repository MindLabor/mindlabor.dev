

$.ajax({
	url: "../interface/markdown",
	success: markdown => {
		let mdHandler = new MarkdownHandler(markdown);
		console.log(mdHandler.getMetaData())
	}
});