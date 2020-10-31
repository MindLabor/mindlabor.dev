
$(document).ready(() => {

	// Handle lesson settings dropdown
	$("#menu-dots").click(() => $("#menu-dots-drop").toggle());
	$("#menu-dots").clickOutside(["#menu-dots-drop"], function () {
		$("#menu-dots-drop").hide();
	});

});