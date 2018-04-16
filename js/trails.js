var difficultyMap = {
	1: 'Beginner',
	2: 'Easy',
	3: 'Intermediate',
	4: 'Advanced',
	5: 'Hard'
}

$(document).ready(function() {
	let countries = {};//Using maps, value is never used but the it reduces O(n). Using arrays would be n, hashmaps are constant time.
	let difficulties = {};

	//Load maps
	$(".tile-wrapper").children(".tile").each(function(index, val) {
		let self = $(val);
		let country = escape(self.find(".slide-left").text());
		let difficulty = self.find(".hidden").text();

		countries[country] = true;
		difficulties[difficulty] = true;
	});

	let controls = $(".controls");
	let controlCountries = $(controls.find(".section")[0]);
	let controlDifficulty = $(controls.find(".section")[1]);

	//Add controls
	for (let country in countries) {
		let name = unescape(country);
		let input = $(`<input id="c` + country + `" type="checkbox" />`);
		let control = $(`<div><lable for="c"` + country + `>` + name + `: </lable></div>`);
		input.change(updateTiles);
		control.append(input);
		controlCountries.append(control);
	}
	for (let d in difficulties) {
		let difficulty = difficultyMap[d];
		if (!difficulty) {
			console.error("Unknown difficulty");
			continue;
		}
		//Doing it this way so I can easily add the handler now, rather than having to select the input element after inserting it.
		let input = $(`<input id="d` + difficulty + `" type="checkbox" />`);
		let control = $(`<div><lable for="d"` + difficulty + `>` + difficulty + `: </lable></div>`);
		input.change(updateTiles);
		control.append(input);
		controlDifficulty.append(control);
	}
});

function updateTiles() {
	let controls = $(".controls");
	let controlCountries = $(controls.find(".section")[0]);
	let controlDifficulty = $(controls.find(".section")[1]);
	let countries = {};
	let difficulties = {};
	let countCountries = 0;
	let countDifficulties = 0;

	controlCountries.find("input").each(function() {
		if (this.checked) {
			countries[unescape(this.id.substring(1))] = true
			countCountries++;
		}
	});
	controlDifficulty.find("input").each(function() {
		if (this.checked) {
			difficulties[unescape(this.id.substring(1))] = true
			countDifficulties++;
		}
	});

	if (countCountries + countDifficulties === 0) {
		$(".tile-wrapper").find(".tile").each(function() {
			$(this).removeClass("hidden");
		});
		footerUpdate();
		return;
	}

	$(".tile-wrapper").find(".tile").each(function() {
		let self = $(this);
		self.removeClass("hidden");
		if (countCountries > 0) {
			if (!countries[self.find(".slide-left")[0].innerHTML]) {
				self.addClass("hidden");
			}
		}

		if (countDifficulties > 0) {
			if (!difficulties[difficultyMap[self.find(".hidden")[0].innerHTML]]) {
				self.addClass("hidden");
			}
		}
	});
	footerUpdate();
}
