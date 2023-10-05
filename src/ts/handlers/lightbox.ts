export default function lightboxHandle() {
	if (!document.querySelectorAll(".lightbox")) return;
	import(/* webpackChunkName: "print" */ "../functions/lightbox").then((module) => {
		const initImported = module.default;
		initImported();
	});
}
