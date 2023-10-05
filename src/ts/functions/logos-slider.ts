import Swiper, { FreeMode, Autoplay, A11y } from "swiper";
import "swiper/css/bundle";

export default function logosSlider() {
	console.log("--- Logos Slider Loaded ---");
	const sliderOne = new Swiper(".logos-slider-1", {
		modules: [FreeMode, Autoplay, A11y],
		loop: true,
		spaceBetween: 0,
		// grabCursor: true,
		slidesPerView: 3,
		a11y: {
			enabled: false,
		},
		autoplay: {
			delay: 1,
			disableOnInteraction: true,
		},
		freeMode: {
			enabled: true,
			momentum: false,
		},
		speed: 5000,
		breakpoints: {
			768: {
				slidesPerView: 3,
				speed: 4000,
			},
			1040: {
				slidesPerView: 4,
				speed: 5000,
			},
		},
	});
	const sliderTwo = new Swiper(".logos-slider-2", {
		modules: [FreeMode, Autoplay, A11y],
		loop: true,
		spaceBetween: 30,
		// grabCursor: true,
		slidesPerView: 3,
		a11y: {
			enabled: false,
		},
		autoplay: {
			delay: 1,
			disableOnInteraction: true,
			// reverseDirection: true,
		},
		freeMode: {
			enabled: true,
			momentum: false,
		},
		speed: 5000,
		breakpoints: {
			468: {
				slidesPerView: 2,
			},
			768: {
				slidesPerView: 3,
				speed: 4000,
			},
			1040: {
				slidesPerView: 4,
				speed: 5000,
			},
		},
	});
}
