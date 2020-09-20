$(document).ready(() => {

    // Handle Loading UI
    setTimeout(() => {
        handleSplashScreen();
    }, 100);

});


/**
 * Handle the UI of the splash screen
 */
function handleSplashScreen() {
    $("#splash").addClass("animated");
    $("#splash-wrapper").css("opacity", "0");
    setTimeout(() => {$("#splash-wrapper").addClass("hidden")}, 500);
}
