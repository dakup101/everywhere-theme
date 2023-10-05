import { _qA } from "helpers";

import Typewriter from "typewriter-effect/dist/core";

export default function ctaTyper() {
	const typers = _qA(".cta-typer") as NodeListOf<HTMLSpanElement>;

	if (!typers) return;

	typers.forEach((el) => {
		new Typewriter(el, {
			strings: ["Podejściu", "Design'ie", "Kodowaniu"],
			autoStart: true,
			loop: true,
			cursor: null,
		});
	});
}
