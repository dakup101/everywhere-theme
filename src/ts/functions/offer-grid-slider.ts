import { _qA } from "helpers";

import Swiper, { Pagination, Autoplay } from "swiper";
import "swiper/swiper-bundle.min.css";

export default function offerGridSlider() {
	const offerGrids = _qA(".offer-grid") as NodeListOf<HTMLElement>;

	offerGrids.forEach((grid) => {
		const sliders = _qA(".swiper") as NodeListOf<HTMLElement>;

		console.log(sliders);

		sliders.forEach((slider, key) => {
			offerGridSliderInit(slider, key);
		});
	});
}

function offerGridSliderInit(grid: HTMLElement, key) {
	const delayStep = 750;

	const swiper = new Swiper(grid, {
		modules: [Pagination, Autoplay],

		slidesPerView: 1,
		spaceBetween: 24,
		loop: true,
		speed: delayStep,
		autoplay: {
			delay: 2000,
			disableOnInteraction: false,
			waitForTransition: true,
		},
		pagination: {
			el: ".swiper-pagination",
		},
	});

	swiper.autoplay.stop();

	setTimeout(() => {
		swiper.autoplay.start();
	}, delayStep * key);
}
