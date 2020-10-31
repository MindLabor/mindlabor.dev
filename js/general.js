
$(document).ready(() => {

	// Handle Loading UI
	setTimeout(handleSplashScreen, 100);

	// Bind Event Handler: MOBILE HEADER MENU TOGGLE
	$("#mobile-header-burger").click(() => {
		$(this).toggleClass("open");
		$(".mobile-menu").toggleClass("open");
		$("body").toggleClass("fixed");
		$("#header").toggleClass("header-mobile-open")
	});

});


/**
 * Handle the UI of the splash screen
 */
function handleSplashScreen() {
	$("#splash").addClass("animated");
	$("#splash-wrapper").css("opacity", "0");
	setTimeout(() => { $("#splash-wrapper").addClass("hidden") }, 500);
}


/**
 * 
 * @param {string[]} insideElements Inside element selectors
 * @param {function} callback The callback that runs when clicked outside of inside selectors
 */
$.prototype.clickOutside = function (insideElements, callback) {
	$(document).mouseup(event => {

		// Check if click happend inside of insideElements
		let clickedInside = insideElements.some(e => $(event.target).is($(e)));

		// Call callback if click didnt happen on inside elements or the element itself
		if (!clickedInside && !$(event.target).is(this)) 
			callback.call($(event.target), event);
	});
}