import introHello from "functions/intro-hello";
import offerGridSlider from "functions/offer-grid-slider";
import form from "functions/form";
import ctaTyper from "functions/cta-typer";

// import lightboxHandle from "handlers/lightbox";
import logosSliderHandle from "handlers/logos-slider";

window.addEventListener("DOMContentLoaded", () => {
	introHello();
	offerGridSlider();
	form();
	ctaTyper();

	// lightboxHandle();
	logosSliderHandle();
});
