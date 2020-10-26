
$(document).ready(() => {

	// Handle Loading UI
	setTimeout(handleSplashScreen, 100);

	// Bind Event Handler: MOBILE HEADER MENU TOGGLE
	$("#mobile-header-burger").click(() => {
		$(this).toggleClass("open");
		$(".mobile-menu").toggleClass("open");
		$("body").toggleClass("fixed");
		$("#header").toggleClass("header-mobile-open")
	})

});


/**
 * Handle the UI of the splash screen
 */
function handleSplashScreen() {
	$("#splash").addClass("animated");
	$("#splash-wrapper").css("opacity", "0");
	setTimeout(() => { $("#splash-wrapper").addClass("hidden") }, 500);
}
