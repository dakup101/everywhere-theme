export default function logosSliderHandle() {
	if (!document.querySelectorAll(".logos-slider").length) return;

	console.log("--- Parallax Loaded ---");

	import(/* webpackChunkName: "print" */ "../functions/logos-slider").then((module) => {
		const moduleInit = module.default;
		moduleInit();
	});
}
