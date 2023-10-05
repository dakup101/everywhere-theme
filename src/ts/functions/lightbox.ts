import GLightbox from "glightbox";
import "glightbox/dist/css/glightbox.min.css";

export default function lightbox() {
	const lightbox = GLightbox({
		selector: ".lightbox",
		touchNavigation: true,
		loop: true,
	});
}
