import Swiper, { FreeMode, Autoplay, A11y } from "swiper";
import "swiper/css/bundle";

export default function logosSlider() {
	console.log("--- Logos Slider Loaded ---");

	function initializeSlider(selector) {
		return new Swiper(selector, {
			modules: [FreeMode, Autoplay, A11y],
			loop: true,
			spaceBetween: 30,
			slidesPerView: 4,
			allowTouchMove: false,
			a11y: {
				enabled: false,
			},
			autoplay: {
				delay: 1,
				disableOnInteraction: false,
			},
			freeMode: {
				enabled: true,
				momentum: false,
			},
			speed: 5500,
			breakpoints: {
				320: {
					slidesPerView: 2,
					speed: 3500,
				},
				468: {
					slidesPerView: 2.25,
				},
				648: {
					slidesPerView: 2.5,
					speed: 4000,
				},
				768: {
					slidesPerView: 3,
					speed: 4500,
				},
				1040: {
					slidesPerView: 4,
					speed: 5500,
				},
			},
		});
	}

	const sliderOne = initializeSlider(".logos-slider-1");
	const sliderTwo = initializeSlider(".logos-slider-2");
	const sliderThree = initializeSlider(".logos-slider-3");
}
