

/**
 * Handles Markdown Metadata table
 */
class MarkdownHandler {

	constructor(markdown) {
		this.markdown = markdown;
	}


	/**
	 * Parse yaml metadata if it isnt parsed yet
	 * 
	 * @returns {object} Parsed data object
	 */
	getMetaData() {

		// Get meta data of markdown
		if (!this.metadata) {
			let yamlString = this.extractMetaData();
			this.metadata = this.parseMetadata(yamlString);
		}

		return this.metadata;
	}


	/**
	 * Parses yaml string to an object
	 * @param {string} yamlString The yaml string
	 */
	parseMetadata(yamlString) {
		return jsyaml.load(yamlString);
	}


	/**
	 * Extracts the yaml metadata from the markdown string
	 */
	extractMetaData() {
		return this.markdown.substring(
			this.markdown.indexOf("---") + 3,
			this.markdown.lastIndexOf("---")
		).trim();
	}
}