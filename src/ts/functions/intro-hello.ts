import { _qA } from "helpers";

import Typewriter from "typewriter-effect/dist/core";

export default function introHello() {
	const typers = _qA(".theme-intro__hello") as NodeListOf<HTMLSpanElement>;

	if (!typers) return;

	typers.forEach((el) => {
		new Typewriter(el, {
			strings: ["Cześć ;)", "Hello ;)"],
			autoStart: true,
			loop: true,
			cursor: null,
		});
	});
}
