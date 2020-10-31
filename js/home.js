$(document).ready(() => {

	// Init AOS
	AOS.init({
		"once": true
	});

	// Scroll to project section on GET STARTED click
	$("#learn-more").click(() => {
		$("html, body").scrollTop($("#projects-section").offset().top - 100);
	});
	
});
