export const _q = (selecotr: string, el = document) => {
	return el.querySelector(selecotr);
};

export const _qA = (selecotr: string, el = document) => {
	return el.querySelectorAll(selecotr);
};

export const _qID = (id: string, el = document) => {
	return el.getElementById(id);
};
