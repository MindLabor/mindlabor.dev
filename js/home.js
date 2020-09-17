$(document).ready(() => {
    handleLoading();
});


/**
 * Handle loading of the doocument
 *  1. Load elements after each other with delay and opacity animation.
 */
async function handleLoading() {

    // Get all elements with the delay attribute, map it to object and sort it (the order)
    let delayedElements = $("[delay]").toArray();
    let delays = delayedElements.map(e => ({
        element:	$(e),
        delay:		parseInt($(e).attr("delay")),
        order:		parseInt($(e).attr("dorder")),
    })).sort((a, b) => a.order - b.order);

    // Find maximum delay to remove classes afterwards
    const maxDelay = Math.max(...delays.map(e => e.delay));
    const timeout = ms => new Promise(resolve => setTimeout(resolve, ms));

    // Set opacity to 1 after each elements delay
    for (const delay of delays) {

        // Wait for delay and set opacity afterwards
        await timeout(delay.delay);
        delay.element.addClass("opc1");
    }
    
    // Remove unneeded classes
    setTimeout(() => $("[delay]").removeAttr("delay").removeAttr("dorder").removeClass("opc1"), maxDelay+500);
}
