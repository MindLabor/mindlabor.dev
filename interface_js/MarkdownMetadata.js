

/**
 * Handles Markdown Metadata table
 */
class MarkdownHandler {

	constructor(markdown) {
		this.markdown = markdown;
	}


	/**
	 * Filter out metadata and return only the markdown
	 * 
	 * @returns {string} The filtered markdown
	 */
	getMarkdownOnly() {
		let result;

		try {
			// Get metadata and its index
			let metadata = this.extractMetaData();
			let separatorIndex = this.markdown.indexOf(metadata);
			result = this.markdown.substring(separatorIndex + metadata.length).trim().substring(3);
		} catch { return; }
		
		// Return everything after the metadata and +3 (for the "---" boundary)
		return result;
	}


	/**
	 * Parse yaml metadata if it isnt parsed yet
	 * 
	 * @returns {object} Parsed data object
	 */
	getMetaData() {
		
		// Get meta data of markdown
		if (!this.metadata) {
			try {
				let yamlString = this.extractMetaData();
				this.metadata = this.parseMetadata(yamlString);
			} catch {
				return;
			}
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
			this.markdown.substring(
				this.markdown.indexOf("---") + 3
			).indexOf("---") + 3
		).trim();
	}
}