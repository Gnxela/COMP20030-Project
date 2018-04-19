$(document).ready(function() {
	let container = $("#values");
	let values = [
		["Health.", "Care for yourself."],
		["Persistance.", "Keet at it. Keep trying. Again. And again."],
		["Drive", "Do what you love."],
		["Adventure", "Take risks and embrace where they take you."],
		["Motivation", "Shoot for the stars. Land on the clouds."],
		["Freedom", "Explore. Discover. Experience."]
	];
	for (let i = 0; i < values.length; i++) {
		container.append(`<div class="value">` + values[i][0] + `<div class="description">` + values[i][1] + `</div></div>`)
		if (i != values.length - 1) {
			container.append(`<div class="seperator"></div>`);
		}
	}
	footerUpdate();
});
